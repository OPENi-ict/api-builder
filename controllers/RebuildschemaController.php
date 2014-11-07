<?php

namespace app\controllers;
use app\helpers\BuildSwaggerJSON;
use app\helpers\FetchSwaggerCore;
use app\helpers\FileManipulation;
use yii\filters\AccessControl;
use yii\web\Controller;

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
				'only' => ['admin'],
				'rules' => [
					[
						'actions' => ['admin'],
						'allow' => true,
						'roles' => ['admin'],
					],
				],
			],
		];
	}

//	private $_apiPath = "https://demo1.openi-ict.eu:1988/api/doc/";
	private $_apiDomain = "http://localhost:1988";
	private $_docPath = "/api/doc/";
	private $_resourcesPath = "resources/";

	public function actionIndex()
	{
		$_resourcesPath = $this->_apiDomain . $this->_docPath . $this->_resourcesPath;

		$site = new FetchSwaggerCore();
		if (!$site->setResource($_resourcesPath))
			$message = "Something went wrong!";
		if (!$site->setSchemas())
			$message = "Something went wrong!";

		$_resource = $site->getResource();
		$_schemas = $site->getSchemas();

		$swaggerJSON = new BuildSwaggerJSON();
		$swaggerJSON->BuildJSON();
		foreach ($_schemas as $schema)
		{
			//$_resource->basePath
			$swaggerJSON->BuildResource($_resource->apiVersion, $_resource->swaggerVersion, $this->_apiDomain, $schema->resource);
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
		$file->setFilename('\example.php');
		$file->write_file($swaggerJSON->getSwaggerJSON());

//		$helper->setFilename('\example.txt');
//		$helper->write_file($json);
//		echo $helper->get_md5();

//		return $this->render('index', [
//			'response' => $response
//		]);
	}
}