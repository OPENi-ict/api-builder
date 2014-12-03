<?php

namespace app\controllers;

use app\models\Apis;
use app\models\Properties;
use app\models\PropertiesSearch;
use Yii;
use app\models\Objects;
use app\models\ObjectsSearch;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * ObjectsController implements the CRUD actions for Objects model.
 */
class ObjectsController extends Controller
{
    public function behaviors()
    {
        return [
			'access' => [
				'class' => AccessControl::className(),
				'rules' => [
					[
						'allow' => true,
						'roles' => ['@'],
					],
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
     * Lists all Objects models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ObjectsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

	/**
	 * Displays a single Objects model.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionAdminview($id)
	{
		return $this->render('adminView', [
			'model' => $this->findModel($id),
		]);
	}

	/**
	 * Displays a single Objects model.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionView($id)
	{
		$model = $this->findModel($id);
		$searchModel = new PropertiesSearch();
		$dataProvider = $searchModel->search([
			'PropertiesSearch' => ['object' => $id]
		]);

		// Dropdown List for the methods
		// First come the Methods for the Object
		$propertyDropdownList = [
			'Get '.$model->name => 'Get '.$model->name,
			'Post '.$model->name => 'Post '.$model->name,
			'Delete '.$model->name => 'Delete '.$model->name,
			'Get '.$model->name.'/{id}' => 'Get '.$model->name.'/{id}',
			'Put '.$model->name.'/{id}' => 'Put '.$model->name.'/{id}',
			'Delete '.$model->name.'/{id}' => 'Delete '.$model->name.'/{id}'
		];

		// Then all the methods for the connections
		$properties = Properties::findAll(['type' => $model->name]);
		foreach($properties as $property)
		{
			$one = $property->getAttribute('object');
			$newObject = Objects::findOne($one);

			$propertyDropdownList = ArrayHelper::merge($propertyDropdownList,[
				'Get '.$model->name.'/{id}/'.$newObject->name => 'Get '.$model->name.'/{id}/'.$newObject->name,
				'Post '.$model->name.'/{id}/'.$newObject->name => 'Post '.$model->name.'/{id}/'.$newObject->name,
				'Delete '.$model->name.'/{id}/'.$newObject->name => 'Delete '.$model->name.'/{id}/'.$newObject->name
			]);
		};

		if ($model->load(Yii::$app->request->post()))
		{
			$model->methods = implode(",", $model->methods);
			$model->save();
		}

		$model->methods = explode(',', $model->methods);

		return $this->render('view', [
			'model' => $model,
			'searchModel' => $searchModel,
			'dataProvider' => $dataProvider,
			'propertyDropdownList' => $propertyDropdownList
		]);
	}

    /**
	 * Creates a new Object model under this API.
     * If creation is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new Objects();
		$apiModel = $this->findAPIModel($id);

		$model->api = $id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
				'api' => $apiModel,
            ]);
        }
    }

    /**
     * Updates an existing Objects model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Objects model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
		$toBeDeleted = $this->findModel($id);
		$apiID = $toBeDeleted->api;
		$toBeDeleted->delete();

        return $this->redirect(['apis/view', 'id' => $apiID]);
    }

	/**
	 * Duplicates an Object model under this API.
	 * If duplication is successful, the browser will be redirected to the 'view' page.
	 * If the Object has inheritance then retrieve all the Properties and Methods of the parent.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionDuplicate($id)
	{
		$model = new Objects();

		$apiModel = $this->findAPIModel($id);

		if ($model->load(Yii::$app->request->post()) && $model->inherited != '')
		{
			$parentModel = $this->findModel($model->inherited);
			$model->inherited = $parentModel->id;
			$model->api = $id;
			$model->name = $parentModel->name . '_for_' . $apiModel->name;
			$model->description = $parentModel->description;
			$model->privacy = $parentModel->privacy;
			$model->methods = $parentModel->methods;
			if ($model->save())
				return $this->redirect(['view', 'id' => $model->id]);
		}
		return $this->render('duplicate', [
			'model' => $model,
			'api' => $apiModel
		]);
	}

	/**
	 * Votes up an Object.
	 * Immediate return to index.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionVoteup($id)
	{
		$model = $this->findModel($id);
		$model->votes_up = $model->votes_up + 1;
		$model->save();

		return $this->redirect(['site/']);
	}

	/**
	 * Votes Down an Object.
	 * Immediate return to index.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionVotedown($id)
	{
		$model = $this->findModel($id);
		$model->votes_down = $model->votes_down + 1;
		$model->save();

		return $this->redirect(['site/']);
	}

    /**
     * Finds the Objects model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Objects the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Objects::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

	/**
	 * Finds the Apis model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param integer $id
	 * @return Apis the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findAPIModel($id)
	{
		if (($model = Apis::findOne($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
}
