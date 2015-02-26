<?php

namespace app\controllers;

use app\models\Apis;
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
						'actions' => ['index', 'update'],
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
			'query' => $votedUpAPIsQuery
		]);

		$votedDownAPIsArray = array_filter(explode(',', $model->votes_down_apis));
		$votedDownAPIsArrayInt = array_map('intval', $votedDownAPIsArray);
		$votedDownAPIsQuery = Apis::find()->where(['id' => $votedDownAPIsArrayInt]);
		$votedDownAPIsDataProvider = new ActiveDataProvider([
			'query' => $votedDownAPIsQuery
		]);

		$votedUpObjectsArray = array_filter(explode(',', $model->votes_up_objects));
		$votedUpObjectsArrayInt = array_map('intval', $votedUpObjectsArray);
		$votedUpObjectsQuery = Apis::find()->where(['id' => $votedUpObjectsArrayInt]);
		$votedUpObjectsDataProvider = new ActiveDataProvider([
			'query' => $votedUpObjectsQuery
		]);

		$votedDownObjectsArray = array_filter(explode(',', $model->votes_down_objects));
		$votedDownObjectsArrayInt = array_map('intval', $votedDownObjectsArray);
		$votedDownObjectsQuery = Apis::find()->where(['id' => $votedDownObjectsArrayInt]);
		$votedDownObjectsDataProvider = new ActiveDataProvider([
			'query' => $votedDownObjectsQuery
		]);

		$votedUpCommentsArray = array_filter(explode(',', $model->votes_up_comments));
		$votedUpCommentsArrayInt = array_map('intval', $votedUpCommentsArray);
		$votedUpCommentsQuery = Apis::find()->where(['id' => $votedUpCommentsArrayInt]);
		$votedUpCommentsDataProvider = new ActiveDataProvider([
			'query' => $votedUpCommentsQuery
		]);

		$votedDownCommentsArray = array_filter(explode(',', $model->votes_down_comments));
		$votedDownCommentsArrayInt = array_map('intval', $votedDownCommentsArray);
		$votedDownCommentsQuery = Apis::find()->where(['id' => $votedDownCommentsArrayInt]);
		$votedDownCommentsDataProvider = new ActiveDataProvider([
			'query' => $votedDownCommentsQuery
		]);

        return $this->render('index', [
            'model' => $model,
			'votedUpAPIsDataProvider' => $votedUpAPIsDataProvider,
			'votedDownAPIsDataProvider' => $votedDownAPIsDataProvider,
			'votedUpObjectsDataProvider' => $votedUpObjectsDataProvider,
			'votedDownObjectsDataProvider' => $votedDownObjectsDataProvider,
			'votedUpCommentsDataProvider' => $votedUpCommentsDataProvider,
			'votedDownCommentsDataProvider' => $votedDownCommentsDataProvider,
        ]);
    }

	/**
	 * Updates an existing User model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionUpdate($id)
	{
		if ($id == \Yii::$app->user->id) {
			$model = $this->findModel($id);

			if ($model->load(Yii::$app->request->post())) {
				$image = UploadedFile::getInstance($model, 'photo_name');

				$imagePath = explode("\\",$image->tempName);
				array_pop($imagePath);
				$imagePath = implode("\\",$imagePath);
				$imagePath = $imagePath . "\\" . $image->name;

				$image->saveAs($imagePath);
				$model->attachImage($imagePath, true);
				$model->save();
				return $this->redirect(['index']);
			} else {
				return $this->render('update', [
					'model' => $model,
				]);
			}
		}
		return $this->redirect('index');
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
