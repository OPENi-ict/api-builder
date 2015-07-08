<?php

namespace app\controllers;

use app\helpers\NotifAPIHelper;
use app\helpers\NotifUserHelper;
use app\models\Apis;
use app\models\Comments;
use app\models\FollowUserApi;
use app\models\FollowUserUser;
use app\models\Objects;
use Yii;
use app\models\User;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProfileController implements the CRUD actions for User model.
 */
class ProfileController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
					[
						'allow' => true,
						'actions' => ['admin', 'create', 'delete', 'adminnotifications', 'acceptapi', 'acceptcbs'],
						'roles' => ['admin'],
					],
					[
						'allow' => true,
						'actions' => ['index', 'notifications', 'clearapinotifs', 'clearusernotifs', 'updatephoto', 'update', 'view', 'follow', 'unfollow'],
						'roles' => ['@'],
					]
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

	/**
	 * Displays my User model.
	 * @param boolean $followersNotified
	 * @return mixed
	 */
	public function actionIndex($followersNotified = null)
	{
		$id = \Yii::$app->user->id;
		$model = $this->findModel($id);

		$votedUpAPIsArray = array_filter(explode(',', $model->votes_up_apis));
		$votedUpAPIsArrayInt = array_map('intval', $votedUpAPIsArray);
		$votedUpAPIsQuery = Apis::find()->where(['id' => $votedUpAPIsArrayInt]);
		$votedUpAPIsDataProvider = new ActiveDataProvider([
			'query' => $votedUpAPIsQuery,
			'sort' => false,
			'pagination' => [
				'pageSize' => 5,
			],
		]);

		$votedDownAPIsArray = array_filter(explode(',', $model->votes_down_apis));
		$votedDownAPIsArrayInt = array_map('intval', $votedDownAPIsArray);
		$votedDownAPIsQuery = Apis::find()->where(['id' => $votedDownAPIsArrayInt]);
		$votedDownAPIsDataProvider = new ActiveDataProvider([
			'query' => $votedDownAPIsQuery,
			'sort' => false,
			'pagination' => [
				'pageSize' => 5,
			],
		]);

		$votedUpObjectsArray = array_filter(explode(',', $model->votes_up_objects));
		$votedUpObjectsArrayInt = array_map('intval', $votedUpObjectsArray);
		$votedUpObjectsQuery = Objects::find()->where(['id' => $votedUpObjectsArrayInt]);
		$votedUpObjectsDataProvider = new ActiveDataProvider([
			'query' => $votedUpObjectsQuery,
			'sort' => false,
			'pagination' => [
				'pageSize' => 5,
			],
		]);

		$votedDownObjectsArray = array_filter(explode(',', $model->votes_down_objects));
		$votedDownObjectsArrayInt = array_map('intval', $votedDownObjectsArray);
		$votedDownObjectsQuery = Objects::find()->where(['id' => $votedDownObjectsArrayInt]);
		$votedDownObjectsDataProvider = new ActiveDataProvider([
			'query' => $votedDownObjectsQuery,
			'sort' => false,
			'pagination' => [
				'pageSize' => 5,
			],
		]);

		$votedUpCommentsArray = array_filter(explode(',', $model->votes_up_comments));
		$votedUpCommentsArrayInt = array_map('intval', $votedUpCommentsArray);
		$votedUpCommentsQuery = Comments::find()->where(['id' => $votedUpCommentsArrayInt]);
		$votedUpCommentsDataProvider = new ActiveDataProvider([
			'query' => $votedUpCommentsQuery,
			'sort' => false,
			'pagination' => [
				'pageSize' => 5,
			],
		]);

		$votedDownCommentsArray = array_filter(explode(',', $model->votes_down_comments));
		$votedDownCommentsArrayInt = array_map('intval', $votedDownCommentsArray);
		$votedDownCommentsQuery = Comments::find()->where(['id' => $votedDownCommentsArrayInt]);
		$votedDownCommentsDataProvider = new ActiveDataProvider([
			'query' => $votedDownCommentsQuery,
			'sort' => false,
			'pagination' => [
				'pageSize' => 5,
			],
		]);

		$followedUsers = $model->getFollowees();
		$followedUsersDataProvider = new ActiveDataProvider([
			'query' => $followedUsers,
			'sort' => false,
			'pagination' => [
				'pageSize' => 5,
			],
		]);

		$followedApis = $model->getFollowingApis();
		$followedApisDataProvider = new ActiveDataProvider([
			'query' => $followedApis,
			'sort' => false,
			'pagination' => [
				'pageSize' => 5,
			],
		]);

		$this->view->params['followers_notified'] = $followersNotified;

		return $this->render('index', [
			'model' => $model,
			'votedUpAPIsDataProvider' => $votedUpAPIsDataProvider,
			'votedDownAPIsDataProvider' => $votedDownAPIsDataProvider,
			'votedUpObjectsDataProvider' => $votedUpObjectsDataProvider,
			'votedDownObjectsDataProvider' => $votedDownObjectsDataProvider,
			'votedUpCommentsDataProvider' => $votedUpCommentsDataProvider,
			'votedDownCommentsDataProvider' => $votedDownCommentsDataProvider,
			'followedUsersDataProvider' => $followedUsersDataProvider,
			'followedApisDataProvider' => $followedApisDataProvider
		]);
	}

	/**
	 * Displays a User model.
	 * @param integer $id
	 * @param boolean $followed
	 * @return mixed
	 */
	public function actionView($id, $followed = null)
	{
		// If I'm trying to view myself then redirect to index
		$myId = \Yii::$app->user->id;
		if ($myId == $id)
			return $this->redirect(['index']);

		$model = $this->findModel($id);

		$votedUpAPIsArray = array_filter(explode(',', $model->votes_up_apis));
		$votedUpAPIsArrayInt = array_map('intval', $votedUpAPIsArray);
		$votedUpAPIsQuery = Apis::find()->where(['id' => $votedUpAPIsArrayInt]);
		$votedUpAPIsDataProvider = new ActiveDataProvider([
			'query' => $votedUpAPIsQuery,
			'sort' => false,
			'pagination' => [
				'pageSize' => 5,
			],
		]);

		$votedDownAPIsArray = array_filter(explode(',', $model->votes_down_apis));
		$votedDownAPIsArrayInt = array_map('intval', $votedDownAPIsArray);
		$votedDownAPIsQuery = Apis::find()->where(['id' => $votedDownAPIsArrayInt]);
		$votedDownAPIsDataProvider = new ActiveDataProvider([
			'query' => $votedDownAPIsQuery,
			'sort' => false,
			'pagination' => [
				'pageSize' => 5,
			],
		]);

		$votedUpObjectsArray = array_filter(explode(',', $model->votes_up_objects));
		$votedUpObjectsArrayInt = array_map('intval', $votedUpObjectsArray);
		$votedUpObjectsQuery = Objects::find()->where(['id' => $votedUpObjectsArrayInt]);
		$votedUpObjectsDataProvider = new ActiveDataProvider([
			'query' => $votedUpObjectsQuery,
			'sort' => false,
			'pagination' => [
				'pageSize' => 5,
			],
		]);

		$votedDownObjectsArray = array_filter(explode(',', $model->votes_down_objects));
		$votedDownObjectsArrayInt = array_map('intval', $votedDownObjectsArray);
		$votedDownObjectsQuery = Objects::find()->where(['id' => $votedDownObjectsArrayInt]);
		$votedDownObjectsDataProvider = new ActiveDataProvider([
			'query' => $votedDownObjectsQuery,
			'sort' => false,
			'pagination' => [
				'pageSize' => 5,
			],
		]);

		$votedUpCommentsArray = array_filter(explode(',', $model->votes_up_comments));
		$votedUpCommentsArrayInt = array_map('intval', $votedUpCommentsArray);
		$votedUpCommentsQuery = Comments::find()->where(['id' => $votedUpCommentsArrayInt]);
		$votedUpCommentsDataProvider = new ActiveDataProvider([
			'query' => $votedUpCommentsQuery,
			'sort' => false,
			'pagination' => [
				'pageSize' => 5,
			],
		]);

		$votedDownCommentsArray = array_filter(explode(',', $model->votes_down_comments));
		$votedDownCommentsArrayInt = array_map('intval', $votedDownCommentsArray);
		$votedDownCommentsQuery = Comments::find()->where(['id' => $votedDownCommentsArrayInt]);
		$votedDownCommentsDataProvider = new ActiveDataProvider([
			'query' => $votedDownCommentsQuery,
			'sort' => false,
			'pagination' => [
				'pageSize' => 5,
			],
		]);

		$followedUsers = $model->getFollowees();
		$followedUsersDataProvider = new ActiveDataProvider([
			'query' => $followedUsers,
			'sort' => false,
			'pagination' => [
				'pageSize' => 5,
			],
		]);

		$followedApis = $model->getFollowingApis();
		$followedApisDataProvider = new ActiveDataProvider([
			'query' => $followedApis,
			'sort' => false,
			'pagination' => [
				'pageSize' => 5,
			],
		]);

		$followUserUser = FollowUserUser::findOne([
			'follower' => $myId,
			'followee' => $id
		]);

		$doIFollow = false;
		if ($followUserUser != null)
		{
			$doIFollow = true;

			$followUserUser->last_seen = date("Y-m-d H:i:s");
			$followUserUser->changed_photo = false;
			$followUserUser->changed_linkedin = false;
			$followUserUser->changed_github = false;
			$followUserUser->created_api = null;
			$followUserUser->changed_upvotes_apis = null;
			$followUserUser->changed_downvotes_apis = null;
			$followUserUser->save();
		}

		$followers = FollowUserUser::find(['followee' => $id])->count();

		$this->view->params['followed'] = $followed;

		return $this->render('view', [
			'model' => $model,
			'votedUpAPIsDataProvider' => $votedUpAPIsDataProvider,
			'votedDownAPIsDataProvider' => $votedDownAPIsDataProvider,
			'votedUpObjectsDataProvider' => $votedUpObjectsDataProvider,
			'votedDownObjectsDataProvider' => $votedDownObjectsDataProvider,
			'votedUpCommentsDataProvider' => $votedUpCommentsDataProvider,
			'votedDownCommentsDataProvider' => $votedDownCommentsDataProvider,
			'followedUsersDataProvider' => $followedUsersDataProvider,
			'followedApisDataProvider' => $followedApisDataProvider,
			'doIFollow' => $doIFollow,
			'followers' => $followers
		]);
	}

	/**
	 * Updates an existing User Photo.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionUpdatephoto($id)
	{
		if ($id == \Yii::$app->user->id) {
			$model = $this->findModel($id);

			if ($model->load(Yii::$app->request->post())) {
				$image = UploadedFile::getInstance($model, 'photo_name');
				$model->photo_name = $image->name;

				if ($image != null) {
					$imagePath = explode("\\", $image->tempName);
					array_pop($imagePath);
					$imagePath = implode("\\", $imagePath);
					$imagePath = $imagePath . "\\" . $image->name;

					$image->saveAs($imagePath);
					$model->attachImage($imagePath, true);
				}
				else {
					$model->removeImage($model->getImage(), true);
				}

				$change = new NotifUserHelper();
				$followersNotified = $change->userChangedPhoto($id);

				$model->save();
				return $this->redirect(['index', 'followersNotified' => $followersNotified]);
			} else {
				return $this->render('updatephoto', [
					'model' => $model,
				]);
			}
		}
		return $this->redirect('index');
	}

	/**
	 * Updates an existing User social links.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionUpdate($id)
	{
		$model = $this->findModel($id);

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			$change = new NotifUserHelper();
			$followersNotified = null;
			if ($model->isAttributeChanged('linkedin'))
				$followersNotified = $change->userChangedLinkedIn($id);
			if ($model->isAttributeChanged('github'))
				$followersNotified = $change->userChangedGithub($id);

			return $this->redirect(['index', 'followersNotified' => $followersNotified]);
		} else {
			return $this->render('update', [
				'model' => $model,
			]);
		}
	}

	/**
	 * Follow another User.
	 * If insertion is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionFollow($id)
	{
		$myId = \Yii::$app->user->id;
		$model = new FollowUserUser();
		$model->follower = $myId;
		$model->followee = $id;
		$model->save();
		return $this->redirect(['view', 'id' => $id, 'followed' => true]);
	}

	/**
	 * Unfollow another User.
	 * If deletion is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionUnfollow($id)
	{
		$myId = \Yii::$app->user->id;
		FollowUserUser::deleteAll([
			'follower' => $myId,
			'followee' => $id
		]);
		return $this->redirect(['view', 'id' => $id, 'followed' => false]);
	}

	/**
	 * Lists all User models.
	 * @return mixed
	 */
	public function actionAdmin()
	{
		$dataProvider = new ActiveDataProvider([
			'query' => User::find(),
		]);

		return $this->render('admin', [
			'dataProvider' => $dataProvider,
		]);
	}

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

	/**
	 * Finds the Number of Notifications that should be displayed to a follower. Both for APIs and Users.
	 * @return int
	 */
	public function getFollowingAPIsUsersNotifNum()
	{
		$myId = \Yii::$app->user->id;
		$followUserApis = FollowUserApi::findAll([
			'follower' => $myId
		]);

		$notifNum = 0;
		foreach($followUserApis as $followUserApi)
		{
			if ($followUserApi->changed_name)
				$notifNum++;
			if ($followUserApi->changed_descr)
				$notifNum++;
			if ($followUserApi->changed_version)
				$notifNum++;
			if ($followUserApi->changed_upvotes)
				$notifNum++;
			if ($followUserApi->changed_downvotes)
				$notifNum++;
			if ($followUserApi->changed_proposed)
				$notifNum++;
			if ($followUserApi->changed_published)
				$notifNum++;
			if ($followUserApi->changed_privacy)
				$notifNum++;
			if ($followUserApi->changed_objects_number)
				$notifNum++;
		}

		$followUserUsers = FollowUserUser::findAll([
			'follower' => $myId
		]);

		foreach($followUserUsers as $followUserUser)
		{
			if ($followUserUser->changed_photo)
				$notifNum++;
			if ($followUserUser->changed_linkedin)
				$notifNum++;
			if ($followUserUser->changed_github)
				$notifNum++;
			if ($followUserUser->created_api)
				$notifNum++;
			if ($followUserUser->changed_upvotes_apis)
				$notifNum++;
			if ($followUserUser->changed_downvotes_apis)
				$notifNum++;
		}

		return $notifNum;
	}

	/**
	 * Finds the Number of Notifications that should be displayed to an Admin. Both for proposed APIs and CBS.
	 * @return int
	 */
	public function getAdminNotifNum()
	{
		// Count and add the APIs that are under review
		$apis = Apis::find()->where(['cbs' => 0, 'status' => 'Under Review']);
		$notifNum = $apis->count();

		// Count and add the CBS that are still pending review
        $cbs = Apis::find()->where(['cbs' => 1, 'status' => 'pending']);
		$notifNum += $cbs->count();

		// Add the usual following notification count
		$notifNum += ProfileController::getFollowingAPIsUsersNotifNum();

		return $notifNum;
	}

	/**
	 * Display grids with all the Notifications
	 */
	public function actionNotifications()
	{
		$myId = \Yii::$app->user->id;
		$apiNotifications = new NotifAPIHelper();
		$fUAModel = $apiNotifications->getAllAPIChangesForWhatIFollow($myId);
		$userNotifications = new NotifUserHelper();
		$fUUModel = $userNotifications->getAllUserChangesForWhatIFollow($myId);

		return $this->render('notifications', [
			'fUAModel' => $fUAModel,
			'fUUModel' => $fUUModel
		]);
	}

	/**
	 * Display grids with all the Notifications + Administrator Notifications
	 */
	public function actionAdminnotifications()
	{
		$myId = \Yii::$app->user->id;
		$apiNotifications = new NotifAPIHelper();
		$fUAModel = $apiNotifications->getAllAPIChangesForWhatIFollow($myId);
		$userNotifications = new NotifUserHelper();
		$fUUModel = $userNotifications->getAllUserChangesForWhatIFollow($myId);

		// Find the APIs that are under review
        $apis = Apis::find()->where(['cbs' => 0, 'status' => 'Under Review']);
		$proposedAPIsModel = new ActiveDataProvider([
			'query' => $apis,
		]);

		// Find the CBS that are still pending review
        $cbs = Apis::find()->where(['cbs' => 1, 'status' => 'Under Review']);
		$proposedCBSModel = new ActiveDataProvider([
			'query' => $cbs,
		]);

		return $this->render('adminnotifications', [
			'fUAModel' => $fUAModel,
			'fUUModel' => $fUUModel,
			'proposedAPIsModel' => $proposedAPIsModel,
			'proposedCBSModel' => $proposedCBSModel
		]);
	}

	/**
	 * Clear all Notifications regarding the followed APIs
	 */
	public function actionClearapinotifs()
	{
		$myId = \Yii::$app->user->id;
		$apiNotifications = new NotifAPIHelper();
		$apiNotifications->clearAllAPIChangesIFollow($myId);

		return $this->redirect(['notifications']);
	}

	/**
	 * Clear all Notifications regarding the followed Users
	 */
	public function actionClearusernotifs()
	{
		$myId = \Yii::$app->user->id;
		$userNotifications = new NotifUserHelper();
		$userNotifications->clearAllUserChangesIFollow($myId);

		return $this->redirect(['notifications']);
	}

	/**
	 * Accept a particular API
	 */
	public function actionAcceptapi($id)
	{
		$api = Apis::findOne($id);
		$api->status = 'Approved';
		$api->save();
		$this->redirect('adminnotifications');
	}

	/**
	 * Accept a particular CBS
	 */
	public function actionAcceptcbs($id)
	{
		$cbs = Apis::findOne($id);
		$cbs->status = 'Approved';
		$cbs->save();
		$this->redirect('adminnotifications');
	}
}
