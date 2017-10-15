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
use app\classes\Url;



use app\models\Category;
use app\models\CategorySearch;


use yii\web\NotFoundHttpException;


class PageController extends Controller
{
    public $layout = 'main';



    public function actionMain($alias = '')
    {
        $arrayUrl = Url::arrayUrl();
//echo $alias; die;
        $category = Category::findOne(['alias' => $alias]);

        $url = $_SERVER['REQUEST_URI'];
        if(strpos($url, '?') !== false)
        {
            //улаляем гет запрос
            $url = strtok($_SERVER["REQUEST_URI"],'?');
        }

        if($category)
        {

        // echo   $url != Url::url($arrayUrl,$category->id);die;
            if($url != Url::url($arrayUrl,$category->id) && $_SERVER['REQUEST_URI'] != '/')
            {
                return $this->redirect(Url::url($arrayUrl,$category->id), 301);
            }
           // echo $category->route; die;
            return Yii::$app->runAction($category->route.'-list', ['category' => $category]);


        }
        else
        {
            $content = Content::findOne(['alias' => $alias]);// ищем в таблице сontent
            if($content)
            {

                if($url == Url::url($arrayUrl,$content->category_id,$alias))
                {
                   // echo 'site/'.$content->type; die;
                    return Yii::$app->runAction('site/'.$content->type, ['content' => $content]); //отправляем на контроллер в параметрах строка публикации
                }
                else
                {
                    return $this->redirect(Url::url($arrayUrl,$content->category_id,$alias), 301);
                }

            }
            else
            {
              //  $category = Category::findOne(['alias' => '']);
              //  return Yii::$app->runAction('site/no-page', ['category' => $category]); //отправляем на контроллер

                throw new HttpException(404);
            }
        }

    }


}
