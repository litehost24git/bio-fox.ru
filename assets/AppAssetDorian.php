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
class AppAssetDorian extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
      //  'css/site.css',
        'dorian/files/dashicons.min.css',
        'dorian/files/jquery-ui-dialog.min.css',
        'dorian/files/dorianwp/styles.css',
        'dorian/files/settings.css',
        'dorian/files/linea-icons/style.css',
        'dorian/files/plugins.min.css',
        'dorian/files/modules.min.css',
        'dorian/files/font-awesome.min.css',
        'dorian/files/style.min.css',
        'dorian/files/ionicons.min.css',
        'dorian/files/style.css',
        'dorian/files/icomoon.css',
        'dorian/files/woocommerce.min.css',
        'dorian/files/woocommerce-responsive.min.css',
        'dorian/files/style_dynamic.css',
        'dorian/files/modules-responsive.min.css',
        'dorian/files/blog-responsive.min.css',
        'dorian/files/style_dynamic_responsive.css',
        'dorian/files/js_composer.min.css',
        'dorian/files/blog.min.css'

    ];
    public $js = [
        'dorian/files/jquery.js',
        'dorian/files/jquery-migrate.min.js',
        'dorian/files/jquery.themepunch.tools.min.js',
        'dorian/files/jquery.themepunch.revolution.min.js',
        'dorian/files/add-to-cart.min.js',
        'dorian/files/woocommerce-add-to-cart.js',

    ];
    public $depends = [
      //  'yii\web\YiiAsset',
       // 'yii\bootstrap\BootstrapAsset',
    ];
}
