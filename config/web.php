<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'api-builder',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'ED3gwz0pE1evYZeGiENoyCiTL0rOLHqm',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,
//			'rules' => [
//				['class' => 'yii\rest\UrlRule', 'controller' => 'user'],
//			],
		],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
		//'db' => require(__DIR__ . '/sqlite.php'),
    ],
	'modules' => [
		'gridview' =>  [
			'class' => '\kartik\grid\Module'
			// enter optional module parameters below - only if you need to
			// use your own export download action or custom translation
			// message source
			// 'downloadAction' => 'gridview/export/download',
			// 'i18n' => []
		],
		'datecontrol' =>  [
			'class' => 'kartik\datecontrol\Module',

			// format settings for displaying each date attribute
			'displaySettings' => [
				'date' => 'd-m-Y',
				'time' => 'H:i:s A',
				'datetime' => 'd-m-Y H:i:s A',
			],

			// format settings for saving each date attribute
			'saveSettings' => [
				'date' => 'Y-m-d',
				'time' => 'H:i:s',
				'datetime' => 'Y-m-d H:i:s',
			],



			// automatically use kartik\widgets for each of the above formats
			'autoWidget' => true,

		],
		'crud' => [
			'class' => 'c006\crud\Module',
		],
		'utility' => [
			'class' => 'c006\utility\migration\Module',
		],
	],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii']['class'] = 'yii\gii\Module';

	$config['modules']['gii']['generators'] = [
		'kartikgii-crud' => ['class' => 'warrence\kartikgii\crud\Generator'],
	];
}

return $config;
