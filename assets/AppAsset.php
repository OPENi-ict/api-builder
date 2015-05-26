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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
	public $css = [
		'css/ripples.min.css',
		'css/material-wfont.min.css',
		'css/lavish-bootstrap.css',
//		'css/snackbar.min.css',
		'css/site.css',
		'css/comments.css',
	];
	public $js = [
//		'js/snackbar.min.js',
        'js/reflow-objects-recommended.js'
	];
    public $depends = [
        'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\timeago\TimeAgoAsset',
//		'romdim\bootstrap\material\BootMaterialCssAsset',
		'romdim\bootstrap\material\BootMaterialJsAsset',
		'romdim\snackbarjs\SnackbarJsNoMatAsset'
    ];
}
