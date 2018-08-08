<?php
return [
    'id' => 'micro-app',
    // the basePath of the application will be the `micro-app` directory
    'basePath' => __DIR__,
    // this is where the application will find all controllers
    'controllerNamespace' => 'micro\controllers',
    // set an alias to enable autoloading of classes from the 'micro' namespace
    'aliases' => [
        '@micro' => __DIR__,
    ],
	'components' => [
    	'db' => [
        'class' => 'yii\db\Connection',
    	'dsn' => 'mysql:host=localhost;dbname=micro',
    	'username' => 'root',
    	'password' => '271188pmbs',
    	'charset' => 'utf8',
    ],

	'request' => [
    'parsers' => [
        'application/json' => 'yii\web\JsonParser',
    ]
],
    'urlManager' => [
    'enablePrettyUrl' => true,
    'enableStrictParsing' => true,
    'showScriptName' => false,
    'rules' => [
        ['class' => 'yii\rest\UrlRule', 'controller' => 'post'],
    ],
]
],
];
