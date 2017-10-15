<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\HttpException;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use app\models\Content;
use app\models\ContentSearch;



use app\models\Category;
use app\models\CategorySearch;


use yii\web\NotFoundHttpException;


abstract class AdminController extends Controller
{
    //public $layout = 'admin';

    public function behaviors()
    {
        return [

            'access' => [
                'class' => AccessControl::className(),
                //'only' => ['login', 'logout', 'signup'],
                'rules' => [
                    [
                        'allow' => true,
                        //'actions' => ['login', 'signup'],
                        //'roles' => ['@'],
                        'matchCallback' => function($role, $action){
                          if(isset(Yii::$app->user->identity->username)) { return Yii::$app->user->identity->username == 'admin';}
                        }
                    ],
                    [
                        'allow' => true,
                        'actions' => ['login'],
                        'roles' => ['?'],
                    ],

                ],
            ],
        ];
    }

    public function init()
    {
        parent::init();

    }


}
