<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Cardetails;

class CarsController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $this->layout ="auto-main";
        return $this->render('home');

    }

    public function actionView($id)
    {
        $this->layout ="auto-main";

		// find cra by id
        $carz = Cardetails::find()
        ->where(['id' => $id])
        ->one();

        return $this->render('single', [
            'carz' => $carz,
        ]);

    }

       

    public function actionHome()
    {
        $this->layout ="auto-main";

        $cars_limited = Cardetails::find()
        ->limit(6)
        ->all();
        return $this->render('home', [
            'cars_limited' => $cars_limited,
        ]);
    }
}
