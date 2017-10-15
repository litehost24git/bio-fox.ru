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
class AppAssetDorianEnd extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $jsOptions = ['position' => \yii\web\View::POS_END];
    public $css = [
        //'css/site.css',
        //'custom_theme/css/dashicons.min.css',
    ];
    public $js = [
        // 'custom_theme/js/accordion.min.js',
        'dorian/files/core.min.js',
        'dorian/files/widget.min.js',
        'dorian/files/mouse.min.js',
        'dorian/files/resizable.min.js',
        'dorian/files/draggable.min.js',
        'dorian/files/button.min.js',
        'dorian/files/position.min.js',
        'dorian/files/dialog.min.js',
        'dorian/files/wpdialog.min.js',
        'dorian/files/jquery.form.min.js',
        'dorian/files/scripts.js',
        'dorian/files/jquery.blockUI.min.js',
        'dorian/files/woocommerce.min.js',
        'dorian/files/jquery.cookie.min.js',
        'dorian/files/cart-fragments.min.js',
        'dorian/files/tabs.min.js',
        'dorian/files/accordion.min.js',
        'dorian/files/mediaelement-and-player.min.js',
        'dorian/files/wp-mediaelement.min.js',
        'dorian/files/third-party.min.js',
        'dorian/files/isotope.pkgd.min.js',
        'dorian/files/modules.min.js',
        'dorian/files/comment-reply.min.js',
        'dorian/files/js_composer_front.min.js',
        'dorian/files/like.js',
        'dorian/files/wp-embed.min.js'

    ];
}
