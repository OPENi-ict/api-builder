<?php

namespace app\controllers;

use app\helpers\BuildFromSwagger;
use app\helpers\FetchSwagger;
use app\models\ApiFromSwagger;
use app\models\ObjectFromSwagger;
use app\models\Swagger;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

/**
 * Swagger controller
 */
class SwaggerController extends Controller
{
	public function actionIndex()
	{
		$this->layout = 'swagger';
		return $this->render('index');
	}

    /**
     * Reads a Swagger Json and creates a new Apis model.
     * If reading is successful, the browser will be redirected to the 'createapi' page.
     * @return mixed
     */
    public function actionRead()
    {
        $swaggerAPI = new ApiFromSwagger;
        if ($swaggerAPI->load(Yii::$app->request->post())) {
            $message = '';
            $site = new FetchSwagger();
            $site->setUrl($swaggerAPI->swagger_url);
            $site->setResource();
            $resource = $site->getResource();

            $buildFromSwagger = new BuildFromSwagger();
            if (property_exists($resource, 'info')) {
                if (property_exists($resource->info, 'title')) {
                    $swaggerAPI->name = $resource->info->title;
                }
                if (property_exists($resource->info, 'description')) {
                    $swaggerAPI->description = $resource->info->description;
                }
                if (property_exists($resource->info, 'version')) {
                    $swaggerAPI->version = $resource->info->version;
                }
                // Check if there is already an API with same version by me. If there is, display a message.
                $message = $buildFromSwagger->CheckAPIs() ? 'Overwrite already existing API?' : '';
            }

            $swaggerAPI->save();

            if (property_exists($resource, 'paths')) {
                foreach ($resource->paths as $pathKey => $pathValue) {
                    $swaggerObject = new ObjectFromSwagger;
                    $swaggerObject->api_from_swagger = $swaggerAPI->getPrimaryKey();
                    $swaggerObject->name = substr($pathKey, 1);
                    $swaggerObject->methods = '';

                    foreach ($pathValue as $operationKey => $operationValue) {
                        // If there is a tag connected to this object, keep its description.
                        if (property_exists($operationValue, 'tags') and property_exists($resource, 'tags')) {
                            foreach ($resource->tags as $tag) {
                                if (property_exists($tag, 'name') and property_exists($tag, 'description') and ($tag->name === $operationValue->tags[0])) {
                                    $swaggerObject->description = $tag->description;
                                }
                            }
                        }
                        // Keep track of the methods used. Only: get, post, put, delete. No: $ref, options, head, patch, parameters
                        switch ($operationKey) {
                            case 'get':
                            case 'post':
                            case 'put':
                            case 'delete':
                                $swaggerObject->methods .= $operationKey . ' ';
                                break;
                        }
                    }

                    $swaggerObject->save();
                }
            }

            return $this->redirect(['createapi', 'swaggerId' => $swaggerAPI->getPrimaryKey(), 'message' => $message]);
        }
        return $this->render('read', [
            'model' => $swaggerAPI
        ]);
    }

    /**
     * Creates a new Apis model from a swagger url.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @param integer $swaggerId
     * @param string $message
     * @return mixed
     */
    public function actionCreateapi($swaggerId, $message)
    {
        $swaggerAPI = $this->findModel($swaggerId);

        $query = ObjectFromSwagger::find();
        $query->where(['api_from_swagger' => $swaggerId]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        $swagger = new Swagger();
        if ($swagger->load(Yii::$app->request->post())) {
            if ($swagger->swagger_file) {
                $swagger = UploadedFile::getInstance($swagger, 'swagger_file');
            }
            else {
                $swagger_url = $swagger->swagger_url;
                $site = new FetchSwaggerCore();
                if (!$site->setResource($swagger_url)) {
                    $message = 'Something went wrong!';
                }
                if (!$site->setSchemas()) {
                    $message = 'Something went wrong!';
                }
                $resource = $site->getResource();
                $schemas = $site->getSchemas();

                $buildFromSwagger = new BuildFromSwagger();
                $buildFromSwagger->setApiName($swagger->name);
                $buildFromSwagger->setApiDescription($swagger->description);
                if ($resource->apiVersion !== 'Unknown') {
                    $buildFromSwagger->setApiVersion($resource->apiVersion);
                }

                // Check if there is already an API with same version by me.
                $checkAPIs = $buildFromSwagger->CheckAPIs();


            }
        }
        return $this->render('createapi', [
            'model' => $swaggerAPI,
            'dataProvider' => $dataProvider,
            'message' => $message
        ]);
    }

    /**
     * Finds the ApiFromSwagger model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ApiFromSwagger the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ApiFromSwagger::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}