<?php

namespace app\controllers;

use app\helpers\BuildSwaggerAnnotationsOnly;
use app\helpers\ElasticSearchDelete;
use app\helpers\ElasticSearchPut;
use app\helpers\ElasticSearchQuery;
use app\helpers\FileManipulation;
use app\helpers\NotifUserHelper;
use app\helpers\NotifAPIHelper;
use app\models\Categories;
use app\models\Comments;
use app\models\CommentsSearch;
use app\models\FollowUserApi;
use app\models\Objects;
use app\models\Properties;
use app\models\User;
use Yii;
use app\models\Apis;
use app\models\ApisSearch;
use app\models\ObjectsSearch;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Swagger\Swagger;
use yii\web\Request;

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
                        'actions' => ['adminview'],
                        'roles' => ['admin'],
                    ],
                    [
                        'allow' => false,
                        'actions' => ['adminview'],
                        'roles' => ['@'],
                    ],
					[
						'allow' => true,
						'roles' => ['@']
					],
                    [
                        'allow' => true,
                        'actions' => ['swagger', 'hydra', 'raml', 'blueprint', 'wadl'],
                        'roles' => ['?']
                    ]
				]
			],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
					'view' => ['get', 'post'],
                    'delete' => ['post']
                ]
            ]
        ];
    }

    /**
     * Lists all Apis models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ApisSearch();
        $queryParams = array_merge(['ApisSearch' => ['cbs' => 0]], Yii::$app->request->getQueryParams());
        $dataProvider = $searchModel->search($queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'category' => null
        ]);
    }

    /**
     * Lists all Apis models that fit in a Category.
     * @param integer $categoryId
     * @return mixed
     */
    public function actionIndexbycategory($categoryId)
    {
        $searchModel = new ApisSearch();
        $queryParams = array_merge(['ApisSearch' => ['cbs' => 0, 'category' => $categoryId]], Yii::$app->request->getQueryParams());
        $dataProvider = $searchModel->search($queryParams);

        $category = Categories::findOne($categoryId);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'category' => $category
        ]);
    }

    /**
     * Show Categories of APIs
     * @return mixed
     */
    public function actionCategories()
    {
        return $this->render('categories');
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
     * Choose a Category for an API.
     * @param integer $id
     * @return mixed
     */
    public function actionChoosecategory($id)
    {
        $model = $this->findModel($id);
        $categories = Categories::find()->asArray()->all();
        $categoriesList = ArrayHelper::map($categories, 'id', 'name');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        }

        return $this->render('chooseCategory', [
            'model' =>$model ,
            'categoriesList' => $categoriesList
        ]);
    }

    /**
     * Displays a grid containing all Objects of this API.
	 * @param integer $id
	 * @param boolean $propose
	 * @param boolean $followed
	 * @param boolean $followersNotified
     * @return mixed
     */
    public function actionView($id, $propose = false, $followed = null, $followersNotified = null)
    {
		$searchModel = new ObjectsSearch();
		$dataProvider = $searchModel->search([
			'ObjectsSearch' => ['api' => $id]
		]);

		$commentSearchModel = new CommentsSearch();
		$commentsProvider = $commentSearchModel->findCommentsNotReplies([
			'CommentsSearch' => ['api' => $id]
		]);
		$repliesProvider = $commentSearchModel->findReplies([
			'CommentsSearch' => ['api' => $id]
		]);
		$repliesProvider->setPagination(false);
		$commentsModel = new Comments();
		$commentsModel->api = $id;

		if ($commentsModel->load(Yii::$app->request->post())) {
			$commentsModel->save();
		}

		$myId = \Yii::$app->user->id;

		$followUserAPI = FollowUserApi::findOne([
			'follower' => $myId,
			'api' => $id
		]);

		$doIFollow = false;
		if ($followUserAPI)
		{
			$doIFollow = true;

			$followUserAPI->last_seen = date('Y-m-d H:i:s');
			$followUserAPI->changed_name = false;
			$followUserAPI->changed_descr = false;
			$followUserAPI->changed_version = false;
			$followUserAPI->changed_proposed = false;
			$followUserAPI->changed_published = false;
			$followUserAPI->changed_privacy = false;
			$followUserAPI->changed_upvotes = 0;
			$followUserAPI->changed_downvotes = 0;
			$followUserAPI->changed_objects_number = 0;

			$followUserAPI->save();
		}

		$followers = FollowUserApi::find()->where(['api' => $id])->count();

		$this->view->params['followers_notified'] = $followersNotified;
		$this->view->params['propose'] = $propose;
		$this->view->params['followed'] = $followed;

        // Elastic Search Query for Recommendations
        $esq = new ElasticSearchQuery;
        $api = $this->findModel($id);
        $esq->setApi($api);
        $esq->MakeJSON();
        $recommend = $esq->Build();

		return $this->render('view', [
			'model' => $this->findModel($id),
			'searchModel' => $searchModel,
			'dataProvider' => $dataProvider,
			'doIFollow' => $doIFollow,
			'followers' => $followers,
			// For Comment Box
			'commentsProvider' => $commentsProvider,
			'repliesProvider' => $repliesProvider,
			'commentsModel' => $commentsModel,
            'recommend' => $recommend
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

        $model->cbs = 0;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {

			$myId = \Yii::$app->user->id;
			$change = new NotifUserHelper();
			$followersNotified = null;
			$followersNotified = $change->userChangedCreatedApi($myId);

			// Automatically follow the APIs I create
			$followModel = new FollowUserApi();
			$followModel->follower = $myId;
			$followModel->api = $model->id;
			$followModel->save();

            // Elastic Search Insertion
            $esi = new ElasticSearchPut;
            $api = $this->findModel($model->id);
            $esi->setApi($api);
            $esi->MakeJSON();
            $esi->InsertUpdate();

            return $this->redirect(['view', 'id' => $model->id, 'followersNotified' => $followersNotified]);
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
			$change = new NotifAPIHelper();
			$followersNotified = null;
			if ($model->isAttributeChanged('name')) {
                $followersNotified = $change->apiChangedName($id, $model->getOldAttribute('name'));
            }
			if ($model->isAttributeChanged('description')) {
                $followersNotified = $change->apiChangedDescription($id);
            }
			if ($model->isAttributeChanged('version')) {
                $followersNotified = $change->apiChangedVersion($id);
            }
			if ($model->isAttributeChanged('privacy')) {
                $followersNotified = $change->apiChangedPrivacy($id);
            }

            // Elastic Search Update
            $esu = new ElasticSearchPut;
            $esu->setApi($model);
            $esu->MakeJSON();
            $esu->InsertUpdate();

            return $this->redirect(['view', 'id' => $model->id, 'followersNotified' => $followersNotified]);
        } else {
            return $this->render('update', [
                'model' => $model
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
        // Delete actual model
        $model = $this->findModel($id);
        $model->delete();

        // Elastic Search Deletion
        $esd = new ElasticSearchDelete;
        $esd->setId($id);
        $esd->Delete();

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
		$api->published = 1;
		$api->save();
		$apiName = preg_replace('/\s+/', '', $api->name);

		$change = new NotifAPIHelper();
		$followersNotified = $change->apiChangedPublished($id);

        $basePathPart = Url::canonical();

        $basePathPart = explode('swagger', $basePathPart);
        $basePathPart = explode('hydra', $basePathPart[0]);
        $basePathPart = explode('raml', $basePathPart[0]);
        $basePathPart = explode('wadl', $basePathPart[0]);
		$basePath = $basePathPart[0] . $apiName . '/';

		$objects = Objects::findAll(['api' => $id]);

		$swaggerJSON = new BuildSwaggerAnnotationsOnly();
		$swaggerJSON->BuildJSON();
		foreach ($objects as $object)
		{

			$object->methods = explode(',', $object->methods);

			// If this Resource has Methods
			if ($object->methods !== ['']) {
				$swaggerJSON->BuildResource($api->version, '1.2', $basePath, $object->name);

				foreach ($object->methods as $methodName) {
					// $methodParts[method_name, path]
					$tempMethodParts = explode(' ', $methodName);
                    foreach ($tempMethodParts as $key => $methodPart) {
                        if ($key === 0) {
                            $methodParts[$key] = $methodPart;
                            $methodParts[1] = '';
                        }
                        else {
                            $methodParts[1] .= $methodPart;
                        }
                    }
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

					if ($numOfPathParts > 1) {
                        $swaggerJSON->BuildParameter('id', 'Primary key of resource', true, 'integer', 'body');
                    }
					if ($upper_method === 'POST' or $upper_method === 'PUT') {
                        $swaggerJSON->BuildParameter($pathParts[0], 'Model of resource', true, $pathParts[0] . '_post_put', 'query');
                    }

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
					if ($property->type === 'byte') {
						$swaggerJSON->BuildProperty($property->name, $property->description, 'string', '', 'byte');
					}
					else if ($property->type === 'date') {
						$swaggerJSON->BuildProperty($property->name, $property->description, 'string', '', 'date');
					}
					else if ($property->type === 'dateTime') {
						$swaggerJSON->BuildProperty($property->name, $property->description, 'string', '', 'date-format');
					}
					else if ($property->type === 'long') {
						$swaggerJSON->BuildProperty($property->name, $property->description, 'integer', '', 'int64');
					}
					else {
						switch ($property->type) {
							case 'Integer':
							case 'String':
								$property->type = strtolower($property->type);
						}
						$swaggerJSON->BuildProperty($property->name, $property->description, $property->type);
					}
				}
				$swaggerJSON->BuildProperty('meta', '', 'Meta');
				$swaggerJSON->CloseModel();

				// $pathParts[0] . '_post_put'
				$swaggerJSON->BuildModel($object->name . '_post_put');
				foreach ($properties as $property) {
					if ($property->name !== 'id') {
						if ($property->type === 'byte') {
							$swaggerJSON->BuildProperty($property->name, $property->description, 'string', '', 'byte');
						}
						else if ($property->type === 'date') {
							$swaggerJSON->BuildProperty($property->name, $property->description, 'string', '', 'date');
						}
						else if ($property->type === 'dateTime') {
							$swaggerJSON->BuildProperty($property->name, $property->description, 'string', '', 'date-format');
						}
						else if ($property->type === 'long') {
							$swaggerJSON->BuildProperty($property->name, $property->description, 'integer', '', 'int64');
						}
						else {
							switch ($property->type) {
								case 'Integer':
								case 'String':
									$property->type = strtolower($property->type);
							}
							$swaggerJSON->BuildProperty($property->name, $property->description, $property->type);
						}
					}
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
		$file->setFilename(ucfirst($apiName) . '/' . $apiName . '.php');
		$file->makeDirectory(ucfirst($apiName) . '/');
		$file->write_file($swaggerJSON->getSwaggerJSON());


		// Actually Publish the API
		$_file = Yii::getAlias('@apisDirectory') . '/' . ucfirst($apiName);
		$swagger = new Swagger($_file);

        $basePathPart = explode('/apis/', $basePathPart[0]);

		$writeFiles = new FileManipulation();
		$writeFiles->setFilename(ucfirst($apiName) . '/api-docs.json');
		$writeFiles->write_file($swagger->getResourceList(array('output' => 'json', 'basePath' => $basePathPart[0] . '/api-docs/' . ucfirst($apiName))));

		foreach($swagger->registry as $api_name => $api_resource)
		{
			$writeFiles->setFilename(ucfirst($apiName) . '/'. $api_name);
			$writeFiles->write_file($swagger->getResource($api_name, array('output' => 'json')));
		}

		return $apiName;
	}

    public function actionSwagger($id)
    {
        $apiName = $this->actionPublish($id);
        return $this->redirect(['swagger/index', 'url' => ucfirst($apiName)]);
    }

    public function actionHydra($id)
    {
        $apiName = $this->actionPublish($id);

        $basePathPart = Url::canonical();

        $basePathPart = explode('swagger', $basePathPart);
        $basePathPart = explode('hydra', $basePathPart[0]);
        $basePathPart = explode('raml', $basePathPart[0]);
        $basePathPart = explode('wadl', $basePathPart[0]);
        $basePathPart = explode('/apis/', $basePathPart[0]);
        $basePathPart[0] .= '/api-docs/';

        $url = 'http://imagine.epu.ntua.gr:2015/transform/?location=';
        $url .= $basePathPart[0].$apiName.'/api-docs.json';
        $url .= '&original_format=swagger&to_format=hydra';

        $response = Yii::$app->getResponse();
        $response->sendContentAsFile(file_get_contents($url), 'hydra.n3');
        Yii::$app->end();
    }

    public function actionRaml($id)
    {
        $apiName = $this->actionPublish($id);

        $basePathPart = Url::canonical();

        $basePathPart = explode('swagger', $basePathPart);
        $basePathPart = explode('hydra', $basePathPart[0]);
        $basePathPart = explode('raml', $basePathPart[0]);
        $basePathPart = explode('wadl', $basePathPart[0]);
        $basePathPart = explode('/apis/', $basePathPart[0]);
        $basePathPart[0] .= '/api-docs/';

        $url = 'http://imagine.epu.ntua.gr:2015/transform/?location=';
        $url .= $basePathPart[0].$apiName.'/api-docs.json';
        $url .= '&original_format=swagger&to_format=raml';

        $response = Yii::$app->getResponse();
        $response->sendContentAsFile(file_get_contents($url), 'raml.yml');
        Yii::$app->end();
    }

    public function actionBlueprint($id)
    {
        $apiName = $this->actionPublish($id);

        $basePathPart = Url::canonical();

        $basePathPart = explode('swagger', $basePathPart);
        $basePathPart = explode('hydra', $basePathPart[0]);
        $basePathPart = explode('raml', $basePathPart[0]);
        $basePathPart = explode('wadl', $basePathPart[0]);
        $basePathPart = explode('/apis/', $basePathPart[0]);
        $basePathPart[0] .= '/api-docs/';

        $url = 'http://imagine.epu.ntua.gr:2015/transform/?location=';
        $url .= $basePathPart[0].$apiName.'/api-docs.json';
        $url .= '&original_format=swagger&to_format=blueprint';

        $response = Yii::$app->getResponse();
        $response->sendContentAsFile(file_get_contents($url), 'blueprint.md');
        Yii::$app->end();
    }

    public function actionWadl($id)
    {
        $apiName = $this->actionPublish($id);

        $basePathPart = Url::canonical();

        $basePathPart = explode('swagger', $basePathPart);
        $basePathPart = explode('hydra', $basePathPart[0]);
        $basePathPart = explode('raml', $basePathPart[0]);
        $basePathPart = explode('wadl', $basePathPart[0]);
        $basePathPart = explode('/apis/', $basePathPart[0]);
        $basePathPart[0] .= '/api-docs/';

        $url = 'http://imagine.epu.ntua.gr:2015/transform/?location=';
        $url .= $basePathPart[0].$apiName.'/api-docs.json';
        $url .= '&original_format=swagger&to_format=wadl';

        $response = Yii::$app->getResponse();
        $response->sendContentAsFile(file_get_contents($url), 'wadl.xml');
        Yii::$app->end();
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
		$model->status = 'Under Review';
		$model->save();

		$change = new NotifAPIHelper();
		$followersNotified = $change->apiChangedProposed($id);

		return $this->redirect(['view', 'id' => $id, 'propose' => true, 'followersNotified' => $followersNotified]);
	}

	/**
	 * Votes up an API.
	 * Immediate return to index.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionVoteup($id, $redirect = 'index')
	{
		$model = $this->findModel($id);

		$curUser = Yii::$app->getUser();
		$curUser = User::findOne($curUser->id);

		$votes_up = explode(',', $curUser->votes_up_apis);
		$votes_down = explode(',', $curUser->votes_down_apis);

		if (in_array($id, $votes_up, null)) {
            return $this->redirect([$redirect]);
        }

		if (($key = array_search($id, $votes_down, null)) !== false) {
			unset($votes_down[$key]);
			$model->votes_down = $model->votes_down - 1;
			$curUser->votes_down_apis = implode(',', $votes_down);
		}

		$votes_up[] = $id;
		$curUser->votes_up_apis = implode(',', $votes_up);
		$curUser->save();

		$model->votes_up = $model->votes_up + 1;
		$model->save();

		$changeAPI = new NotifAPIHelper();
		$followersNotified = $changeAPI->apiChangedUpvotes($id);

        // Elastic Search Update
        $esu = new ElasticSearchPut;
        $esu->setApi($model);
        $esu->MakeJSON();
        $esu->InsertUpdate();

		$changeUser = new NotifUserHelper();
		$myId = \Yii::$app->user->id;
		$changeUser->userChangedUpvotesApis($myId);

		return $this->redirect([$redirect]);
	}

	/**
	 * Votes Down an API.
	 * Immediate return to index.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionVotedown($id, $redirect = 'index')
	{
		$model = $this->findModel($id);

		$curUser = Yii::$app->getUser();
		$curUser = User::findOne($curUser->id);

		$votes_up = explode(',', $curUser->votes_up_apis);
		$votes_down = explode(',', $curUser->votes_down_apis);

		if (in_array($id, $votes_down, null)) {
            return $this->redirect([$redirect]);
        }

		if (($key = array_search($id, $votes_up, null)) !== false) {
			unset($votes_up[$key]);
			$model->votes_up = $model->votes_up - 1;
			$curUser->votes_up_apis = implode(',', $votes_up);
		}

		$votes_down[] = $id;
		$curUser->votes_down_apis = implode(',', $votes_down);
		$curUser->save();

		$model->votes_down = $model->votes_down + 1;
		$model->save();

		$changeAPI = new NotifAPIHelper();
		$followersNotified = $changeAPI->apiChangedDownvotes($id);

        // Elastic Search Update
        $esu = new ElasticSearchPut;
        $esu->setApi($model);
        $esu->MakeJSON();
        $esu->InsertUpdate();

		$changeUser = new NotifUserHelper();
		$myId = \Yii::$app->user->id;
		$changeUser->userChangedDownvotesApis($myId);

		return $this->redirect([$redirect]);
	}

	/**
	 * Follow an API.
	 * If insertion is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionFollow($id)
	{
		$myId = \Yii::$app->user->id;
		$model = new FollowUserApi();
		$model->follower = $myId;
		$model->api = $id;
		$model->save();
		return $this->redirect(['view', 'id' => $id, 'followed' => true]);
	}

    /**
     * Unfollow an API.
     * If deletion is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUnfollow($id)
    {
        $myId = \Yii::$app->user->id;
        FollowUserApi::deleteAll([
            'follower' => $myId,
            'api' => $id
        ]);
        return $this->redirect(['view', 'id' => $id, 'followed' => false]);
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
