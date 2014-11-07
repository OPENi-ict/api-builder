<?php

namespace app\controllers;

use Yii;
use yii\base\Controller;
use yii\filters\AccessControl;
use yii\rbac\DbManager;

/**
 * Admin controller
 */
class AdminController extends Controller
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

	/**
	 * This is to be called only once at the initialization
	 * by commenting out the behaviors first.
	 */
	public function actionAdmin()
	{
		$r = new DbManager;
		$r->init();
		$test = $r->createRole('admin');
		$r->add($test);
		$r->assign($test, Yii::$app->user->id);
	}
} 