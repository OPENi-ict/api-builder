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

//	private $api_path = "https://demo1.openi-ict.eu:1988/api/doc/";
	private $_apiPath = "http://localhost:1988/api/doc/";
	private $_resourcesPath = "resources/";
	private $_schemaPath = "schema";

	public function actionIndex()
	{
		$_resourcesPath = $this->_apiPath . $this->_resourcesPath;
		$_schemaPath = $this->_apiPath . $this->_schemaPath;

		$site = new FetchSwaggerCore();
		if (!$site->setResource($_resourcesPath))
			$message = "Something went wrong!";
		if (!$site->setSchemas($_schemaPath))
			$message = "Something went wrong!";

		$_resource = $site->getResource();
		$_schemas = $site->getSchemas();

		$swaggerJSON = new BuildSwaggerJSON();
		$swaggerJSON->BuildResource($_resource->apiVersion, $_resource->swaggerVersion, $_resource->basePath);
		foreach ($_schemas as $schema)
		{
			//$swaggerJSON->BuildClass($schema->resource);
			foreach ($schema->apis as $api)
			{
				foreach ($api->operations as $operation)
				{
					$swaggerJSON->BuildAPI($api->path, NULL, $operation->httpMethod, $operation->summary, $operation->notes, $operation->responseClass, $operation->nickname);
					foreach ($operation->parameters as $parameter)
					{
						$swaggerJSON->BuildParameter($parameter->name, $parameter->description, $parameter->required, $parameter->dataType, $parameter->paramType);
					}
				}
			}

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

		$file = new FileManipulation();
		$file->setFilename('\example.txt');
		$file->write_file($swaggerJSON->getSwaggerJSON());

//		$helper->setFilename('\example.txt');
//		$helper->write_file($json);
//		echo $helper->get_md5();

//		return $this->render('index', [
//			'response' => $response
//		]);
	}
}