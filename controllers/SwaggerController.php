<?php

namespace app\controllers;

use app\helpers\BuildFromSwagger;
use app\helpers\FetchSwagger;
use app\helpers\NotifUserHelper;
use app\models\ApiFromSwagger;
use app\models\Apis;
use app\models\ObjectFromSwagger;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

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
     *
     * @return mixed
     */
    public function actionRead()
    {
        $swaggerAPI = new ApiFromSwagger;
        if ($swaggerAPI->load(Yii::$app->request->post())) {
            $buildFromSwagger = new BuildFromSwagger();
            $buildFromSwagger->setUrl($swaggerAPI->swagger_url);
            $buildFromSwagger->setResource();
            $buildFromSwagger->buildSwaggerAPI();
            $buildFromSwagger->buildSwaggerObjects();

            return $this->redirect(['createapi', 'swaggerId' => $buildFromSwagger->getSwaggerAPIId()]);
        }
        return $this->render('read', [
            'model' => $swaggerAPI
        ]);
    }

    /**
     * Creates a new Apis model from a swagger url.
     * If creation is successful, the browser will be redirected to the 'view' page.
     *
     * @param integer $swaggerId
     *
     * @return mixed
     */
    public function actionCreateapi($swaggerId)
    {
        $swaggerAPI = $this->findModel($swaggerId);

        $myId = \Yii::$app->user->id;

        $query = ObjectFromSwagger::find();
        $query->where(['api_from_swagger' => $swaggerId]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        if ($swaggerAPI->load(Yii::$app->request->post()) && $swaggerAPI->save()) {
            if (Apis::find()->where(['name' => $swaggerAPI->name, ['not', ['created_by' => $myId]]])->one() === null) {
                $buildFromSwagger = new BuildFromSwagger();
                $buildFromSwagger->setSwaggerAPI($swaggerId);
                if ($buildFromSwagger->BuildAPI()) {


                    // Notify users who follow me!
                    $myId = \Yii::$app->user->id;
                    $change = new NotifUserHelper();
                    $followersNotified = $change->userChangedCreatedApi($myId);

                    return $this->redirect(['view', 'id' => $model->id, 'followersNotified' => $followersNotified]);
                }
            }
        }

        // Check if there is already an API with same version by me. If there is, display a message.
        $message = Apis::find()->where(['name' => $swaggerAPI->name, 'created_by' => $myId])->one() === null ? '' : 'Overwrite already existing API?';
        $message = Apis::find()->where(['name' => $swaggerAPI->name, ['not', ['created_by' => $myId]]])->one() === null ? $message : 'This API name is already taken. Another one should be provided!';

        return $this->render('createapi', [
            'model' => $swaggerAPI,
            'dataProvider' => $dataProvider,
            'message' => $message
        ]);
    }

    /**
     * Finds the ApiFromSwagger model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     *
     * @param integer $id
     *
     * @return ApiFromSwagger the loaded model
     *
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