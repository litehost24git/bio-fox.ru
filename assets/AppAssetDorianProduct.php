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
class AppAssetDorianProduct extends AssetBundle
{


    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
    public $css = [
        // // 'files/site.files',
      // // 'dorianProduct/files/blog.min.files',
        'dorianProduct/files/dashicons.min.css',
        'dorianProduct/files/jquery-ui-dialog.min.css',
        'dorianProduct/files/styles.css',
        'dorianProduct/files/settings.css',
        'dorianProduct/files/linea-icons/style.css',
        'dorianProduct/files/plugins.min.css',
        'dorianProduct/files/modules.min.css',
        'dorianProduct/files/font-awesome.min.css',
        'dorianProduct/files/style.min.css',
        'dorianProduct/files/ionicons.min.css',
        'dorianProduct/files/dorianwp/style.css',
        'dorianProduct/files/icomoon.css',
        'dorianProduct/files/blog.min.css',
        'dorianProduct/files/mediaelementplayer.min.css',
        'dorianProduct/files/wp-mediaelement.min.css',
        'dorianProduct/files/woocommerce.min.css',
        'dorianProduct/files/woocommerce-responsive.min.css',
        'dorianProduct/files/style_dynamic.css',
        'dorianProduct/files/modules-responsive.min.css',
        'dorianProduct/files/blog-responsive.min.css',
        'dorianProduct/files/style_dynamic_responsive.css',
        'dorianProduct/files/js_composer.min.css',

    ];
    public $js = [
          'dorianProduct/files/jquery.js',
        'dorianProduct/files/jquery-migrate.min.js',
        'dorianProduct/files/jquery.themepunch.tools.min.js',
        'dorianProduct/files/jquery.themepunch.revolution.min.js',
        'dorianProduct/files/add-to-cart.min.js',
        'dorianProduct/files/woocommerce-add-to-cart.js',
    ];
    public $depends = [
        // // 'yii\web\YiiAsset',
        // // 'yii\bootstrap\BootstrapAsset',
        //'app\assets\AppAssetEnd',
    ];
}
