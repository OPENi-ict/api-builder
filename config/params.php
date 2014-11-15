<?php

Yii::setAlias('@rootDirectory', realpath(dirname(__FILE__).'/../'));
Yii::setAlias('@apisDirectory', realpath(dirname(__FILE__).'/../apis/'));

return [
    'adminEmail' => 'rom-dim@hotmail.com',
	'api_url' => 'https://demo1.openi-ict.eu/',
	'api_resources' => 'api/doc/resources',
];
