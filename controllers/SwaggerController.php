<?php

namespace app\controllers;

use yii\web\Controller;

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
}