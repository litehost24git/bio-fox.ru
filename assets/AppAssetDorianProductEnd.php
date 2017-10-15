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
class AppAssetDorianProductEnd extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $jsOptions = ['position' => \yii\web\View::POS_END];
    public $css = [
        //'css/site.css',
        //'dorianProduct/css/dashicons.min.css',
    ];
    public $js = [
        // 'dorianProduct/js/accordion.min.js',
        'dorianProduct/files/core.min.js',
        'dorianProduct/files/widget.min.js',
        'dorianProduct/files/mouse.min.js',
        'dorianProduct/files/resizable.min.js',
        'dorianProduct/files/draggable.min.js',
        'dorianProduct/files/button.min.js',
        'dorianProduct/files/position.min.js',
        'dorianProduct/files/dialog.min.js',
        'dorianProduct/files/wpdialog.min.js',
        'dorianProduct/files/jquery.form.min.js',
        'dorianProduct/files/scripts.js',
        'dorianProduct/files/jquery.blockUI.min.js',
        'dorianProduct/files/woocommerce.min.js',
        'dorianProduct/files/jquery.cookie.min.js',
        'dorianProduct/files/cart-fragments.min.js',
        'dorianProduct/files/tabs.min.js',
        'dorianProduct/files/accordion.min.js',
        'dorianProduct/files/mediaelement-and-player.min.js',
        'dorianProduct/files/wp-mediaelement.min.js',
        'dorianProduct/files/third-party.min.js',
        'dorianProduct/files/isotope.pkgd.min.js',
        'dorianProduct/files/modules.min.js',
        'dorianProduct/files/blog.min.js',
        'dorianProduct/files/js_composer_front.min.js',
        'dorianProduct/files/like.js',
        'dorianProduct/files/wp-embed.min.js',
        'dorianProduct/files/slider.min.js',
        'dorianProduct/files/jquery-ui-touch-punch.min.js',
        'dorianProduct/files/price-slider.min.js',

    ];
}
