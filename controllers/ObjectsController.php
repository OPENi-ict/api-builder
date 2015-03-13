<?php

namespace app\controllers;

use app\helpers\NotifAPIHelper;
use app\models\Apis;
use app\models\Cbs;
use app\models\Properties;
use app\models\PropertiesSearch;
use app\models\User;
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
	 * @param integer $propose
	 * @return mixed
	 */
	public function actionView($id, $propose = 0)
	{
		$model = $this->findModel($id);
		$searchModel = new PropertiesSearch();
		$dataProviderExceptBasic = $searchModel->search([
		]);
		$dataProviderBasic = $searchModel->search([
		]);

		if ($model->api0->name != 'core') {
			$dataProviderExceptBasic->query->where(['and', ['object' => $id], ['not in', 'name', ['id', 'resource_uri', 'url', 'context_id', 'object_type', 'service']]]);
			$dataProviderBasic->query->where(['and', ['object' => $id], ['in', 'name', ['id', 'resource_uri', 'url', 'context_id', 'object_type', 'service']]]);
		}
		else
			$dataProviderBasic->query->where(['object' => $id]);

		// Dropdown List for the methods
		// First come the Methods for the Object
		$methodDropdownList = [
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

			$methodDropdownList = ArrayHelper::merge($methodDropdownList,[
				'Get '.$model->name.'/{id}/'.$newObject->name => 'Get '.$model->name.'/{id}/'.$newObject->name,
				'Post '.$model->name.'/{id}/'.$newObject->name => 'Post '.$model->name.'/{id}/'.$newObject->name,
				'Delete '.$model->name.'/{id}/'.$newObject->name => 'Delete '.$model->name.'/{id}/'.$newObject->name
			]);
		};

		$cbsDropdownList = [];
		$cbss = Cbs::find()->select('name')->where(['status' => 'approved'])->all();
		foreach ($cbss as $cbs)
		{
			$cbsDropdownList= ArrayHelper::merge($cbsDropdownList, [
				$cbs->name => $cbs->name
			]);
		}

		if ($model->load(Yii::$app->request->post()))
		{
			if ($model->methods !== "")
				$model->methods = implode(",", $model->methods);
			if ($model->cbs !== "")
				$model->cbs = implode(",", $model->cbs);
			$model->save();
		}

		$model->methods = explode(',', $model->methods);
		$model->cbs = explode(',', $model->cbs);

		return $this->render('view', [
			'model' => $model,
			'searchModel' => $searchModel,
			'dataProviderExceptBasic' => $dataProviderExceptBasic,
			'dataProviderBasic' => $dataProviderBasic,
			'methodDropdownList' => $methodDropdownList,
			'cbsDropdownList' => $cbsDropdownList,
			'propose' => $propose
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
			// Create the 4 Properties each Object must have
			$propID = new Properties();
			$propID->object = $model->id;
			$propID->name = 'id';
			$propID->description = 'Primary key for this Object';
			$propID->type = 'integer';
			$propID->save();

			$propUri = new Properties();
			$propUri->object = $model->id;
			$propUri->name = 'resource_uri';
			$propUri->description = 'The url for finding this Object';
			$propUri->type = 'string';
			$propUri->save();

			$propServ = new Properties();
			$propServ->object = $model->id;
			$propServ->name = 'service';
			$propServ->description = 'The service that returns this Object';
			$propServ->type = 'string';
			$propServ->save();

			$propType = new Properties();
			$propType->object = $model->id;
			$propType->name = 'object_type';
			$propType->description = 'The type of this Object';
			$propType->type = 'string';
			$propType->save();

			$change = new NotifAPIHelper();
			$followersNotified = $change->apiChangedObjectsNumber($id);

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
				'api' => $apiModel,
            ]);
        }
    }

	/**
	 * Proposes an Object to the developers.
	 * If proposal is successful, the browser will be redirected to the 'view?id=$model->id' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionPropose($id)
	{
		$model = $this->findModel($id);
		$model->proposed = 1;
		$model->save();

		return $this->redirect(['view', 'id' => $id, 'propose' => 1]);
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
			$model->description = $parentModel->description;
			$model->privacy = $parentModel->privacy;
			$model->methods = $parentModel->methods;
			$model->cbs = $parentModel->cbs;
			$model->save();

			$properties = Properties::findAll(['object' => $parentModel->id]);
			foreach ($properties as $property)
			{
				$prop = new Properties();
				$prop->name = $property->name;
				$prop->description = $property->description;
				$prop->type = $property->type;
				$prop->object = $model->id;
				$prop->save();
			}

			$change = new NotifAPIHelper();
			$followersNotified = $change->apiChangedObjectsNumber($id);

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
	public function actionVoteup($id, $redirect = 'site/')
	{
		$model = $this->findModel($id);

		$curUser = Yii::$app->getUser();
		$curUser = User::findOne($curUser->id);

		$votes_up = explode(',', $curUser->votes_up_objects);
		$votes_down = explode(',', $curUser->votes_down_objects);

		if (in_array($id, $votes_up))
			return $this->redirect([$redirect]);

		if (($key = array_search($id, $votes_down)) !== false) {
			unset($votes_down[$key]);
			$model->votes_down = $model->votes_down - 1;
			$curUser->votes_down_objects = implode(",", $votes_down);
		}

		$votes_up[] = $id;
		$curUser->votes_up_objects = implode(",", $votes_up);
		$curUser->save();

		$model->votes_up = $model->votes_up + 1;
		$model->save();

		return $this->redirect([$redirect]);
	}

	/**
	 * Votes Down an Object.
	 * Immediate return to index.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionVotedown($id, $redirect = 'site/')
	{
		$model = $this->findModel($id);

		$curUser = Yii::$app->getUser();
		$curUser = User::findOne($curUser->id);

		$votes_up = explode(',', $curUser->votes_up_objects);
		$votes_down = explode(',', $curUser->votes_down_objects);

		if (in_array($id, $votes_down))
			return $this->redirect([$redirect]);

		if (($key = array_search($id, $votes_up)) !== false) {
			unset($votes_up[$key]);
			$model->votes_up = $model->votes_up - 1;
			$curUser->votes_up_objects = implode(",", $votes_up);
		}

		$votes_down[] = $id;
		$curUser->votes_down_objects = implode(",", $votes_down);
		$curUser->save();

		$model->votes_down = $model->votes_down + 1;
		$model->save();

		return $this->redirect([$redirect]);
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
