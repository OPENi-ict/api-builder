<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class SwaggerAsset extends AssetBundle
{
	public $basePath = '@webroot';
	public $baseUrl = '@web';
	public $css = [
		// Swagger-Specific
		'css/swagger/reset.css',
		'css/swagger/screen.css',
		'http://fonts.googleapis.com/css?family=Droid+Sans:400,700',

		'css/ripples.min.css',
//		'css/material-wfont.min.css',
		'css/lavish-bootstrap.css',
		'css/site.css',
	];
	public $js = [
		// Swagger-Specific
		'js/swagger/shred.bundle.js',
		'js/swagger/jquery-1.8.0.min.js',
		'js/swagger/jquery.slideto.min.js',
		'js/swagger/jquery.wiggle.min.js',
		'js/swagger/jquery.ba-bbq.min.js',
		'js/swagger/handlebars-1.0.0.js',
		'js/swagger/underscore-min.js',
		'js/swagger/backbone-min.js',
		'js/swagger/swagger.js',
		'js/swagger/swagger-client.js',
		'js/swagger/swagger-ui.min.js',
		'js/swagger/highlight.7.3.pack.js',
		'js/swagger/site.js'
	];
	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'romdim\bootstrap\material\BootMaterialJsAsset',
		'romdim\snackbarjs\SnackbarJsNoMatAsset'
	];
}
