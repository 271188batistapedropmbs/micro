<?php

namespace micro\controllers;

use yii\rest\ActiveController;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;

class PostController extends ActiveController
{
    public $modelClass = 'micro\models\Post';
    public $enableCsrfValidation=false;

    public function behaviors()
    {
      
      return array_merge(
        parent::behaviors(),[
        'corsFilter'=>[
          'class'=> \yii\filters\Cors::className(),
          'cors'=>[
              'Origin' => static::allowedDomains(),
              'Access-Control-Request-Method'=>['GET','POST','PUT','DELETE'],
              //'Access-Control-Request-Headers'=>['*'],
              'Access-Control-Allow-Credentials'=>true,
              'Access-Control-Max-Age'=>3600
          ],
        ],
    ]);
    }
  
    public static function allowedDomains()
    {
      return [
        'http://localhost:4200',
        'http://localhost/micro/web/post'
      ];
    }
}
