<?php

namespace app\controllers;

use app\helpers\BuildCoreDBModels;
use app\helpers\BuildSwaggerAnnotationsOnly;
use app\helpers\BuildSwaggerAll;
use app\helpers\FetchSwaggerCore;
use app\helpers\FileManipulation;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;
use Swagger\Swagger;

/**
 * Rebuild Core Schema controller
 */
class RebuildschemaController extends Controller
{
	/**
	 * @inheritdoc
	 */
	public function behaviors()
	{
		return [
			'access' => [
				'class' => AccessControl::className(),
				'only' => ['index, models, swagger, publish'],
				'rules' => [
					[
						'actions' => ['index, models, swagger, publish'],
						'allow' => true,
						'roles' => ['admin'],
					],
				],
			],
		];
	}

	private $_apiDomain = "https://demo2.openi-ict.eu";
//	private $_apiDomain = "http://localhost:1988";
	private $_docPath = "/api/doc/";
	private $_resourcesPath = "resources/";

	private $_core = 'core';
	private $_description = 'This is the Core API Platform';

	public function actionIndex()
	{
		return $this->render('index');
	}

	public function actionModels()
	{
		$coreAPI = new BuildCoreDBModels();
		$coreAPI->setApiName($this->_core);
		$coreAPI->setApiDescription($this->_description);
		$coreAPI->BuildAPI();
		$coreAPI->BuildModels();
	}

	public function actionSwagger()
	{
		$_resourcesPath = $this->_apiDomain . $this->_docPath . $this->_resourcesPath;

		$site = new FetchSwaggerCore();
		if (!$site->setResource($_resourcesPath))
			$message = "Something went wrong!";
		if (!$site->setSchemas())
			$message = "Something went wrong!";

		$_resource = $site->getResource();
		$_schemas = $site->getSchemas();

		$swaggerJSON = new BuildSwaggerAnnotationsOnly();
		$swaggerJSON->BuildJSON();
		foreach ($_schemas as $schema)
		{
			// Build the swagger
			$swaggerJSON->BuildResource($_resource->apiVersion, $_resource->swaggerVersion, $this->_apiDomain, $schema->resource);
			// Make the Object
			//$swaggerJSON->BuildClass($schema->resource);
			foreach ($schema->apis as $api)
			{
				$swaggerJSON->BuildAPI($api->path, NULL);
				foreach ($api->operations as $operation)
				{
					$_notes = property_exists($operation, 'notes') ? ($operation->notes) : "";
					$swaggerJSON->BuildOperation($operation->httpMethod, $operation->summary, $_notes, $operation->responseClass, $operation->nickname);
					foreach ($operation->parameters as $parameter)
					{
						$swaggerJSON->BuildParameter($parameter->name, $parameter->description, $parameter->required, $parameter->dataType, $parameter->paramType);
					}
					$swaggerJSON->CloseOperation();
				}
				$swaggerJSON->CloseAPI();
			}
			$swaggerJSON->CloseResource();

			foreach ($schema->models as $model)
			{
				$swaggerJSON->BuildModel($model->id);
				foreach ($model->properties as $name => $property)
				{
					$swaggerJSON->BuildProperty($name, $property->description, $property->type);
				}
				$swaggerJSON->CloseModel();
			}
		}
		$swaggerJSON->CloseJSON();

		$file = new FileManipulation();
		$file->setFilename(ucfirst($this->_core) . '/' . $this->_core . '.php');
		$file->write_file($swaggerJSON->getSwaggerJSON());
	}

	public function actionPublish()
	{
		//Publish it
		$_file = Yii::getAlias('@apisDirectory') . '/' . ucfirst($this->_core);
		$swagger = new Swagger($_file);

		$actual_link = str_replace('/rebuildschema/publish', '', Url::canonical());


		$writeFiles = new FileManipulation();
		$writeFiles->setFilename(ucfirst($this->_core) . '/api-docs.json');
		$writeFiles->write_file($swagger->getResourceList(array('output' => 'json', 'basePath' => $actual_link . '/apis/Core/')));

		foreach($swagger->registry as $api_name => $api)
		{
			$writeFiles->setFilename(ucfirst($this->_core) . '/'.$api_name);
			$writeFiles->write_file($swagger->getResource($api_name, array('output' => 'json')));
		}
	}

//	public function actionCreate()
//	{
//		$_resourcesPath = $this->_apiDomain . $this->_docPath . $this->_resourcesPath;
//
//		$newApi = new FileManipulation();
//		$newApi->setApiName('Core');
//
//		$site = new FetchSwaggerCore();
//		if (!$site->setResource($_resourcesPath))
//			$message = "Something went wrong!";
//		if (!$site->setSchemas())
//			$message = "Something went wrong!";
//
//		$_resource = $site->getResource();
//		$_schemas = $site->getSchemas();
//
//		$swagger = new BuildSwaggerAll();
//
//		$swagger->BuildPartialResponses();
//		$_partial = $swagger->getPartialAnnotations();
//		$newApi->writePartialFile($_partial);
//
//		$swagger->BuildPartialResponses();
//		$_partial = $swagger->getPartialAnnotations();
//		$newApi->writePartialFile($_partial);
//
//		$swagger->BuildPartialResponses();
//		$_partial = $swagger->getPartialAnnotations();
//		$newApi->writePartialFile($_partial);
//
//		foreach ($_schemas as $schema)
//		{
//			$newApi->setObjectName($schema->resource);
//			$swagger->setObjectName($schema->resource);
//			$swagger->BuildResource('0.1', '');
//
//			foreach ($schema->apis as $api)
//			{
//				$swagger->BuildAPI($api->path, NULL);
//				foreach ($api->operations as $operation)
//				{
//					$_notes = property_exists($operation, 'notes') ? ($operation->notes) : "";
//					$swaggerJSON->BuildOperation($operation->httpMethod, $operation->summary, $_notes, $operation->responseClass, $operation->nickname);
//					foreach ($operation->parameters as $parameter)
//					{
//						$swaggerJSON->BuildParameter($parameter->name, $parameter->description, $parameter->required, $parameter->dataType, $parameter->paramType);
//					}
//					$swaggerJSON->CloseOperation();
//				}
//				$swaggerJSON->CloseAPI();
//			}
//			$swaggerJSON->CloseResource();
//
//			foreach ($schema->models as $model)
//			{
//				$swaggerJSON->BuildModel($model->id);
//				foreach ($model->properties as $name => $property)
//				{
//					$swaggerJSON->BuildProperty($name, $property->description, $property->type);
//				}
//				$swaggerJSON->CloseModel();
//			}
//		}
//		$swaggerJSON->CloseJSON();
//
//		$newApi->writeFile($swaggerJSON->getSwaggerJSON());

//		$helper->setFilename('\example.txt');
//		$helper->write_file($json);
//		echo $helper->get_md5();

//		return $this->render('index', [
//			'response' => $response
//		]);
//	}
}