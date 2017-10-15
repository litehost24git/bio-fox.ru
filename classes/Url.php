<?php
/**
 * Created by PhpStorm.
 * User: VvV
 * Date: 28.09.2017
 * Time: 11:21
 */

//namespace app\controllers;
namespace app\classes;
use app\models\Category;
use yii\helpers\ArrayHelper;


class Url
{

    public static function url($arr_url,$p,$alias='')
    {
        if($p!='') {
            do {
                if ($arr_url[$p]['alias'] != '' && $arr_url[$p]['alias'] != '/') {
                    $html = '.html';
                } else {
                    $html = '';
                }
                if (!isset($url)) {
                    if ($alias != '') {
                        $url = $arr_url[$p]['alias'] . '/' . $alias . $html;
                    } else {
                        $url = $arr_url[$p]['alias'] . $html;
                    }
                } else {
                    $url = $arr_url[$p]['alias'] . '/' . $url;
                }
                $p = $arr_url[$p]['parent'];
            } while ($p != "0");

            return '/' . $url;
        }
    }

    public static function crumbs($arr_url,$p,$alias='')
    {

        if($p!='') {
            do {
                if ($arr_url[$p]['name'] != '' && $arr_url[$p]['name'] != '<span class="edgtf-delimiter">&nbsp;/&nbsp;</span>') {
                    $html = '.html';
                } else {
                    $html = '';
                }
                if (!isset($url)) {
                    if ($alias != '') {
                       // $url_a = \app\classes\Url::url(\app\classes\Url::arrayUrl(),$arr_url[$p]['id']); font-family: Raleway,sans-serif;
                        $url = $arr_url[$p]['name']. ' <span class="edgtf-delimiter">&nbsp;/&nbsp;</span> ' . $alias;
                    } else {
                        $url_a = \app\classes\Url::url(\app\classes\Url::arrayUrl(),$arr_url[$p]['id']);
                        $url = '<span class="edgtf-current">'.$arr_url[$p]['name'].'</span>';

                    }
                } else {
                    $url_2 = \app\classes\Url::url(\app\classes\Url::arrayUrl(),$arr_url[$p]['id']);
                    $url = '<a href="'.$url_2.'">'.$arr_url[$p]['name'].'</a>' . ' <span class="edgtf-delimiter">&nbsp;/&nbsp;</span> ' . $url;
                }
                $p = $arr_url[$p]['parent'];
            } while ($p != "0");

            return '<a href="/">Главная</a> <span class="edgtf-delimiter">&nbsp;/&nbsp;</span> ' . $url;

        }



    }





    //вывод каталога с помощью рекурсии
    public static  function view_cat($arr,$parent = 0,$class_ui='',$class_li='') {

//Условия выхода из рекурсии
        if(empty($arr[$parent])) {
            return;
        }
        if($parent=='0'){echo '<ul class="'.$class_ui.'">';}else{echo '<div class="edgtf-menu-second" style="height: 0px;"><div class="edgtf-menu-inner"><ul>';}

        //перебираем в цикле массив и выводим на экран
        for($i = 0; $i < count($arr[$parent]);$i++) {

            if(isset($arr['parent'][$arr[$parent][$i]['id']])){$podmenu = 'edgtf-has-sub';}else{$podmenu='';}

            $url = \app\classes\Url::url(\app\classes\Url::arrayUrl(),$arr[$parent][$i]['id']);

            echo '<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  edgtf-menu-narrow '.$podmenu.'">
           <a href="'.$url.'">
              <span class="edgtf-item-outer">
       <span class="edgtf-item-inner">
           <span class="edgtf-item-text">
               '.$arr[$parent][$i]['name'].'
           </span>
       </span>
       <span class="plus"></span>
   </span>
           </a>';
            //рекурсия - проверяем нет ли дочерних категорий
            \app\classes\Url::view_cat($arr,$arr[$parent][$i]['id']);
            echo '</li>';
        }

        if($parent=='0'){echo '</ul>';}else{echo '</ul></div></div>';}

    }

    //вывод каталога с помощью рекурсии
    public static  function view_cat_mobile($arr,$parent = 0,$class_ui='',$class_li='') {

//Условия выхода из рекурсии
        if(empty($arr[$parent])) {
            return;
        }
        if($parent=='0'){echo '<ul class="'.$class_ui.'">';}else{echo '<ul class="sub_menu">';}

        //перебираем в цикле массив и выводим на экран
        for($i = 0; $i < count($arr[$parent]);$i++) {

            if(isset($arr['parent'][$arr[$parent][$i]['id']])){$podmenu = 'edgtf-has-sub';}else{$podmenu='';}

            $url = \app\classes\Url::url(\app\classes\Url::arrayUrl(),$arr[$parent][$i]['id']);

            echo '<li class=" '.$podmenu.'">
           <a href="'.$url.'">
              <span>'.$arr[$parent][$i]['name'].'</span>
           </a>';
            if(isset($arr['parent'][$arr[$parent][$i]['id']]))
            {
                echo '<span class="mobile_arrow">
               <i class="edgtf-sub-arrow fa fa-angle-right"></i><i class="fa fa-angle-down"></i>
           </span>';
            }
            //рекурсия - проверяем нет ли дочерних категорий
            \app\classes\Url::view_cat_mobile($arr,$arr[$parent][$i]['id']);
            echo '</li>';
        }

        if($parent=='0'){echo '</ul>';}else{echo '</ul>';}

    }



    private static $_category;

    public static function arrayCategory()
    {
        if(self::$_category !== null)
            return self::$_category;
        $arr_cat = array();


        foreach (ArrayHelper::index(Category::find()->orderBy(['position' => SORT_ASC])->all(), 'id') as $kl=>$row)
        {

            if($row['parent']!="0"){$arr_cat['parent'][$row['parent']] = $row['parent'];} //есть ли подменю

           //Формируем массив, где ключами являются адишники на родительские категории
            if(empty($arr_cat[$row['parent']])) {
                $arr_cat[$row['parent']] = array();
            }
            $arr_cat[$row['parent']][] = $row;
        }
            return self::$_category = $arr_cat;
    }

    private static $_urls;

    public static function arrayUrl()
    {
        if(self::$_urls !== null)
            return self::$_urls;

        $arr_url = ArrayHelper::index(Category::find()->all(), 'id');


        return self::$_urls = $arr_url;
    }
}