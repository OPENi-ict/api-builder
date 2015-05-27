<?php

namespace app\controllers;

use app\helpers\ElasticSearchPut;
use app\models\Apis;
use app\models\Objects;
use Yii;
use app\models\Properties;
use app\models\PropertiesSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PropertiesController implements the CRUD actions for Properties model.
 */
class PropertiesController extends Controller
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
     * Lists all Properties models.
     * @return mixed
     */
//    public function actionIndex()
//    {
//        $searchModel = new PropertiesSearch();
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
//
//        return $this->render('index', [
//            'searchModel' => $searchModel,
//            'dataProvider' => $dataProvider,
//        ]);
//    }

    /**
     * Displays a single Properties model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Properties model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new Properties();

		$objectModel = $this->findObjectModel($id);
		$apiModel = $this->findAPIModel($objectModel->api);

		$model->object = $id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            // Elastic Search Update
            $esu = new ElasticSearchPut;
            $esu->setApi($apiModel);
            $esu->MakeJSON();
            $esu->InsertUpdate();

            return $this->redirect(['objects/view', 'id' => $id]);
        } else {
            return $this->render('create', [
                'model' => $model,
				'object' => $objectModel,
				'api' => $apiModel,
            ]);
        }
    }

    /**
     * Updates an existing Properties model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
		$objectModel = $this->findObjectModel($model->object);
		$apiModel = $this->findAPIModel($objectModel->api);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            // Elastic Search Update
            $esu = new ElasticSearchPut;
            $esu->setApi($apiModel);
            $esu->MakeJSON();
            $esu->InsertUpdate();

			return $this->redirect(['objects/view', 'id' => $objectModel->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
				'object' => $objectModel,
				'api' => $apiModel,
            ]);
        }
    }

    /**
     * Deletes an existing Properties model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $objectModel = $this->findObjectModel($id);
        $apiModel = $this->findAPIModel($objectModel->api);

        $this->findModel($id)->delete();

        // Elastic Search Update
        $esu = new ElasticSearchPut;
        $esu->setApi($apiModel);
        $esu->MakeJSON();
        $esu->InsertUpdate();


        return $this->redirect(['index']);
    }

	/**
	 * Duplicates a Property model under this Object and API.
	 * If duplication is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionDuplicate($id)
	{
		$model = new Properties();

		$objectModel = $this->findObjectModel($id);
        $apiModel = $this->findAPIModel($objectModel->api);

		if ($model->load(Yii::$app->request->post()) && $model->inherited != '')
		{
			$parentModel = $this->findModel($model->inherited);
			$model->inherited = $parentModel->id;
			$model->object = $id;
			$model->name = $parentModel->name . '_for_' . $objectModel->name;
			$model->description = $parentModel->description;
			$model->privacy = $parentModel->privacy;
			$model->methods = $parentModel->methods;
			if ($model->save()) {

                // Elastic Search Update
                $esu = new ElasticSearchPut;
                $esu->setApi($apiModel);
                $esu->MakeJSON();
                $esu->InsertUpdate();

                return $this->redirect(['view', 'id' => $model->id]);
            }
		}
		return $this->render('duplicate', [
			'model' => $model,
			'object' => $objectModel
		]);
	}

    /**
     * Finds the Properties model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Properties the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Properties::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

	/**
	 * Finds the Objects model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param integer $id
	 * @return Objects the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findObjectModel($id)
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
