<?php

namespace app\controllers;

use app\helpers\BuildSwaggerAnnotationsOnly;
use app\helpers\FileManipulation;
use app\models\Objects;
use app\models\Properties;
use Yii;
use app\models\Apis;
use app\models\ApisSearch;
use app\models\ObjectsSearch;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Swagger\Swagger;

/**
 * ApisController implements the CRUD actions for Apis model.
 */
class ApisController extends Controller
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
     * Lists all Apis models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ApisSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

	/**
	 * Displays a single Apis model.
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
     * Displays a grid containing all Objects of this API.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
		$searchModel = new ObjectsSearch();
		$dataProvider = $searchModel->search([
			'ObjectsSearch' => ['api' => $id]
		]);

		return $this->render('view', [
			'model' => $this->findModel($id),
			'searchModel' => $searchModel,
			'dataProvider' => $dataProvider,
		]);
    }

    /**
     * Creates a new Apis model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Apis();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Apis model.
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
     * Deletes an existing Apis model.
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
	 * Publishes an API Swagger.
	 * If publish is successful, the browser will be redirected to the 'swagger/index?url=$model->name' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionPublish($id)
	{
		$api = $this->findModel($id);

		$basePathPart = explode('publish', Url::canonical());
		$basePath = $basePathPart[0] . $api->name . '/';

		$objects = Objects::findAll(['api' => $id]);

		$swaggerJSON = new BuildSwaggerAnnotationsOnly();
		$swaggerJSON->BuildJSON();
		foreach ($objects as $object)
		{

			$object->methods = explode(',', $object->methods);

			// If this Resource has Methods
			if ($object->methods != [""]) {
				$swaggerJSON->BuildResource($api->version, '1.2', $basePath, $object->name);

				foreach ($object->methods as $methodName) {
					// $methodParts[method_name, path]
					$methodParts = explode(' ', $methodName);
					$upper_method = strtoupper($methodParts[0]);

					// $pathParts = [object, ({id}, connection)]
					$pathParts = explode('/', $methodParts[1]);
					$numOfPathParts = count($pathParts);
					$swaggerJSON->BuildAPI($methodParts[1], NULL);

					$summary = '';
					$nickname = '';
					$returnType = '';

					switch ($upper_method) {
						case 'GET':
							switch ($numOfPathParts) {
								case 1:
									$summary = 'Retrieve a list of ' . $pathParts[0];
									$nickname = 'Get_all_' . $pathParts[0];
									$returnType = 'list_' . $pathParts[0];
									break;
								case 2:
									$summary = 'Retrieve one ' . $pathParts[0];
									$nickname = 'Get_one_' . $pathParts[0];
									$returnType = $pathParts[0];
									break;
								case 3:
									$summary = 'Retrieve a list of ' . $pathParts[0] . ' ' . $pathParts[2];
									$nickname = 'Get_all_' . $pathParts[2];
									$returnType = 'list_' . $pathParts[2];
							}
							break;
						case 'POST':
							switch ($numOfPathParts) {
								case 1:
									$summary = 'Create a new ' . $pathParts[0] . ' object';
									$nickname = 'Post_one_' . $pathParts[0];
									$returnType = $pathParts[0];
									break;
								case 3:
									$summary = 'Create a new ' . $pathParts[2] . 'as a cconection of ' . $pathParts[0];
									$nickname = 'Post_one_' . $pathParts[2];
									$returnType = $pathParts[2] . '_post';
							}
							break;
						case 'PUT':
							switch ($numOfPathParts) {
								case 2:
									$summary = 'Change a particular ' . $pathParts[0];
									$nickname = 'Put_' . $pathParts[0];
									$returnType = $pathParts[0];
							}
							break;
						case 'DELETE':
							switch ($numOfPathParts) {
								case 1:
									$summary = 'Delete all ' . $pathParts[0];
									$nickname = 'Delete_all_' . $pathParts[0];
									$returnType = 'list_' . $pathParts[0];
									break;
								case 2:
									$summary = 'Delete one ' . $pathParts[0];
									$nickname = 'Delete_one_' . $pathParts[0];
									$returnType = 'boolean';
									break;
								case 3:
									$summary = 'Delete all ' . $pathParts[2] . ' connections of ' . $pathParts[0];
									$nickname = 'Delete_all_' . $pathParts[0];
									$returnType = 'boolean';
							}
							break;
					}

					$swaggerJSON->BuildOperation($upper_method, $summary, '', $returnType, $nickname);

					if ($numOfPathParts > 1)
						$swaggerJSON->BuildParameter('id', 'Primary key of resource', true, 'integer', 'body');
					if ($upper_method == 'POST' or $upper_method == 'PUT')
						$swaggerJSON->BuildParameter($pathParts[0], 'Model of resource', true, $pathParts[0] . '_post_put', 'query');

					$swaggerJSON->CloseOperation();

					$swaggerJSON->CloseAPI();
				}

				$swaggerJSON->CloseResource();

				// ALL THE DIFFERENT MODEL TYPES THAT NEED TO BE IMPLEMENTED
				// Meta
				// $pathParts[0] + Meta
				// $pathParts[0] . '_post_put'
				// $pathParts[2] . '_post'
				// 'list_' . $pathParts[0]
				// 'list_' . $pathParts[2]
				// THE MODELS FOR THE CONNECTIONS HAVE TO BE BUILT WHEN THAT PARTICULAR OBJECT COMES IN

				$swaggerJSON->BuildModel('Meta');
				$swaggerJSON->BuildProperty('previous', 'Uri of the previous page relative to the current page settings.', 'string');
				$swaggerJSON->BuildProperty('next', 'Uri of the next page relative to the current page settings.', 'string');
				$swaggerJSON->BuildProperty('total_count', 'Total items count for all the collection.', 'integer');
				$swaggerJSON->BuildProperty('offset', 'Specify the offset to start displaying element on a page.', 'integer');
				$swaggerJSON->BuildProperty('limit', 'Specify the number of element to display per page.', 'integer');
				$swaggerJSON->CloseModel();

				$properties = Properties::findAll(['object' => $object->id]);

				// $pathParts[0] + Meta
				$swaggerJSON->BuildModel($object->name);
				foreach ($properties as $property) {
					$swaggerJSON->BuildProperty($property->name, $property->description, $property->type);
				}
				$swaggerJSON->BuildProperty('meta', '', 'Meta');
				$swaggerJSON->CloseModel();

				// $pathParts[0] . '_post_put'
				$swaggerJSON->BuildModel($object->name . '_post_put');
				foreach ($properties as $property) {
					if ($property->name != 'id')
						$swaggerJSON->BuildProperty($property->name, $property->description, $property->type);
				}
				$swaggerJSON->CloseModel();

				// 'list_' . $pathParts[0]
				$swaggerJSON->BuildModel('Objects_' . $object->name);
				$swaggerJSON->BuildProperty($object->name, '', 'array', $object->name);
				$swaggerJSON->CloseModel();

				$swaggerJSON->BuildModel('list_' . $object->name);
				$swaggerJSON->BuildProperty('meta', '', 'Meta');
				$swaggerJSON->BuildProperty('objects', '', 'Objects_' . $object->name);
				$swaggerJSON->CloseModel();
			}
		}
		$swaggerJSON->CloseJSON();

		$file = new FileManipulation();
		$file->setFilename(ucfirst($api->name) . '/' . $api->name . '.php');
		$file->makeDirectory(ucfirst($api->name) . '/');
		$file->write_file($swaggerJSON->getSwaggerJSON());


		// Actually Publish the API
		$_file = Yii::getAlias('@apisDirectory') . '/' . ucfirst($api->name);
		$swagger = new Swagger($_file);

		$link_parts = explode('/apis/publish', Url::canonical());
		$actual_link = $link_parts[0];


		$writeFiles = new FileManipulation();
		$writeFiles->setFilename(ucfirst($api->name) . '/api-docs.json');
		$writeFiles->write_file($swagger->getResourceList(array('output' => 'json', 'basePath' => $actual_link . '/api-docs/' . ucfirst($api->name))));

		foreach($swagger->registry as $api_name => $api_resource)
		{
			$writeFiles->setFilename(ucfirst($api->name) . '/'. $api_name);
			$writeFiles->write_file($swagger->getResource($api_name, array('output' => 'json')));
		}

		return $this->redirect(['swagger/index', 'url' => ucfirst($api->name)]);
	}

	/**
	 * Proposes an API to the developers.
	 * If proposal is successful, the browser will be redirected to the 'view?id=$model->id' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionPropose($id)
	{
		$model = $this->findModel($id);
		$model->proposed = 1;
		$model->save();

		return $this->redirect(['view', 'id' => $id]);
	}

	/**
	 * Votes up an API.
	 * Immediate return to index.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionVoteup($id)
	{
		$model = $this->findModel($id);
		$model->votes_up = $model->votes_up + 1;
		$model->save();

		return $this->redirect(['index']);
	}

	/**
	 * Votes Down an API.
	 * Immediate return to index.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionVotedown($id)
	{
		$model = $this->findModel($id);
		$model->votes_down = $model->votes_down + 1;
		$model->save();

		return $this->redirect(['index']);
	}

    /**
     * Finds the Apis model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Apis the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Apis::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
