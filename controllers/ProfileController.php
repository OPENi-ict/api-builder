<?php

namespace app\controllers;

use app\models\Apis;
use app\models\Comments;
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
						'actions' => ['admin', 'create', 'delete'],
						'roles' => ['admin'],
					],
					[
						'allow' => true,
						'actions' => ['index', 'updatephoto', 'update', 'view', 'follow', 'unfollow'],
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
	 * @return mixed
	 */
	public function actionIndex()
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
	 * @return mixed
	 */
	public function actionView($id, $followed = 0)
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

		$doIFollow = FollowUserUser::find()->where([
			'follower' => $myId,
			'followee' => $id
		])->exists();

		$followers = FollowUserUser::find()->where(['followee' => $id])->count();

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
			'followed' => $followed,
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
				$model->save();
				return $this->redirect(['index']);
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
			return $this->redirect(['index']);
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
		return $this->redirect(['view', 'id' => $id, 'followed' => 1]);
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
		return $this->redirect(['view', 'id' => $id, 'followed' => -1]);
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
}
