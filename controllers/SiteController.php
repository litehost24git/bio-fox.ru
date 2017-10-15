<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;




use app\models\Content;

use app\models\Category;



class SiteController extends Controller
{
    public $layout = "dorian";
    /**
     * @inheritdoc
     */
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

    /**
     * @inheritdoc
     */
    public function actions()
    {
        $this->layout = 'dorianProduct';
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

    /**
     * Displays homepage. Standard
     *
     * @return string
     */
    public function actionIndexList(Category $category)
    {
        $this->layout = 'dorian';
        // print_r(func_get_args()); die;

        $content  = Content::find()->where("category_id = {$category->id}")->all();

        // $searchModel = new ContentSearch();
        // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            // 'searchModel' => $searchModel,
            //'dataProvider' => $dataProvider,
            'content' => $content,
            'meta' => $category,
        ]);
    }



    public function actionAboutList(Category $category)
    {
        $this->layout = 'dorian';
        //  echo func_get_args()[0]['name'];
        //print_r(func_get_args()); die;
        // foreach(func_get_args() as $zn)
        //  {
        //     // echo $zn->name.'<br>';
        // }
        // return $this->render('about');
        $content  = Content::find()->where("category_id = {$category->id}")->all();
        return $this->render('about', [

            'content' => $content,
            'meta' => $category,

        ]);
    }

    public function actionWhiteList(Category $category)
    {
        $this->layout = 'dorianProduct';

        $content  = Content::find()->where("category_id = {$category->id}")->all();
        return $this->render('white', [

            'content' => $content,
            'meta' => $category,

        ]);
    }


    public function actionProduct(Category $category)
    {
        $this->layout = 'dorianProduct';

        return $this->render('Product', [
            'content' => $category,
            'meta' => $category,
        ]);
    }

    public function actionProductList(Category $category)
    {
        $this->layout = 'dorianProduct';
        $query = Content::find()->where(['category_id' => $category->id, 'type' => 'Product']);
        // делаем копию выборки

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
       // $dataProvider->pagination->pageSize = 2;

        // $content  = Content::find()->where("category = {$category->id}")->all();
        return $this->render('ProductList', [
            //'content' => $content,
            'dataProvider' => $dataProvider,
            'meta' => $category,

        ]);

    }

    public function actionBlogList(Category $category)
    {

        return $this->render('blog', [
            'content' => $category,
            'meta' => $category,
        ]);
    }
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $this->layout = 'main';

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContactList(Category $category)
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
            'meta' => $category,
        ]);
    }


    public function actionNoPage(Category $category)
    {
        $this->layout = 'dorianProduct';

        return $this->render('NoPage', [
            'meta' => $category,
        ]);
    }
    /**
     * Displays about page.
     *
     * @return string
     */
  //  public function actionAbout()
   // {
  //      return $this->render('about');
   // }
}
