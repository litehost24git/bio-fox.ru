<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAssetDorian;
use app\assets\AppAssetDorianEnd;




AppAssetDorian::register($this);
AppAssetDorianEnd::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>


        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">


        <style type="text/css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 .07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>


        <style id='rs-plugin-settings-inline-css' type='text/css'>
            .wpb_revslider_element .edgtf-appeared .edgtf-item-content {
                padding-left: 32px !important;
                opacity: 1 !important;
                -webkit-transition-delay: .8s !important;
                transition-delay: .8s !important
            }
        </style>

        <style id='dorian_edge_modules-inline-css' type='text/css'>
            .page-id-4803 .edgtf-ptf-standard.edgtf-ptf-three-columns .mix {
                margin-bottom: 56px;
                width: calc(33.33% - 94px * 2 / 3);
            }

            .page-id-4803 .edgtf-item-title {
                text-align: center;
                font-size: 11px;
                font-weight: 600;
                color: #b5b5b5;
            }

            .page-id-4803 .edgtf-ptf-category-holder {
                display: none;
            }

            .page-id-4803 .edgtf-portfolio-filter-holder {
                margin-bottom: 41px;
            }

            @media only screen and (max-width: 1024px) {
                .page-id-4803 .vc_custom_1460115566303 {
                    margin-top: 25px !important;
                }

                .page-id-4803 .edgtf-portfolio-filter-holder .edgtf-portfolio-filter-holder-inner {
                    text-align: center;
                }
            }

            .edgtf-vertical-align-containers .edgtf-position-center:before, .edgtf-vertical-align-containers .edgtf-position-left:before, .edgtf-vertical-align-containers .edgtf-position-right:before {
                margin-right: 0;
            }
        </style>


        <link rel='stylesheet' id='dorian_edge_google_fonts-css'
              href='http://fonts.googleapis.com/css?family=Raleway%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRaleway%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;subset=latin%2Clatin-ext'
              type='text/css' media='all'/>
        <!-- This site uses the Google Analytics by MonsterInsights plugin v5.5 - Universal enabled - https://www.monsterinsights.com/ -->


        <style type="text/css"> /* generated in /www/sites/dorian.edge-themes.com/files/html/wp-content/themes/dorianwp/functions.php dorian_edge_page_padding function */
            .page-id-481 .edgtf-content .edgtf-content-inner > .edgtf-container > .edgtf-container-inner, .page-id-481 .edgtf-content .edgtf-content-inner > .edgtf-full-width > .edgtf-full-width-inner {
                padding: 0;
            }

            /* generated in /www/sites/dorian.edge-themes.com/files/html/wp-content/themes/dorianwp/framework/modules/header/filter-functions.php dorian_edge_get_top_bar_styles function */
            .page-id-481 .edgtf-top-bar {
                background-color: rgba(25, 25, 25, 1);
                border-bottom-color: rgba(221, 221, 221, 0.08);
            }

        </style>

        <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css"
              href="http://dorian.edge-themes.com/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css"
              media="screen"><![endif]--><!--[if IE  8]>
        <link rel="stylesheet" type="text/css"
              href="http://dorian.edge-themes.com/wp-content/plugins/js_composer/assets/css/vc-ie8.min.css"
              media="screen">
        <![endif]-->


        <style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1458725716530 {
                padding-top: 131px !important;
                padding-bottom: 22px !important;
            }

            .vc_custom_1459936359732 {
                padding-bottom: 111px !important;
            }

            .vc_custom_1460126155283 {
                padding-top: 69px !important;
                padding-bottom: 34px !important;
                background-image: url(http://dorian.edge-themes.com/wp-content/uploads/2016/03/home-7-counter-background.jpg?id=558) !important;
            }

            .vc_custom_1458310608247 {
                padding-top: 137px !important;
            }

            .vc_custom_1458819742074 {
                padding-bottom: 89px !important;
            }

            .vc_custom_1458909829701 {
                padding-top: 6.3% !important;
                padding-bottom: 5.9% !important;
            }

            .vc_custom_1460365157915 {
                padding-right: 18% !important;
            }

            .vc_custom_1460365166009 {
                padding-right: 18% !important;
            }

            .vc_custom_1460365171889 {
                padding-right: 18% !important;
            }

            .vc_custom_1460365178457 {
                padding-right: 18% !important;
            }

            .vc_custom_1458215457338 {
                padding-right: 10% !important;
            }</style>
        <noscript>
            <style type="text/css"> .wpb_animate_when_almost_visible {
                    opacity: 1;
                }</style>
        </noscript>
        <?php $this->head() ?>
    </head>

    <body class="page page-id-481 page-template page-template-full-width page-template-full-width-php edgt-core-1.0 dorian-ver-1.0.1 edgtf-smooth-page-transitions edgtf-mimic-ajax edgtf-header-standard edgtf-sticky-header-on-scroll-down-up edgtf-default-mobile-header edgtf-sticky-up-mobile-header edgtf-top-bar-enabled edgtf-dropdown-default edgtf-light-header edgtf-top-bar-light edgtf-fullscreen-search edgtf-search-fade edgtf-side-menu-slide-from-right wpb-js-composer js-comp-ver-4.11.2.1 vc_responsive">
    <?php $this->beginBody() ?>
    <section class="edgtf-side-menu right">
        <div class="edgtf-close-side-menu-holder">
            <div class="edgtf-close-side-menu-holder-inner">
                <a href="#" target="_self" class="edgtf-close-side-menu">
                    <span aria-hidden="true" class="icon_close"></span>
                </a>
            </div>
        </div>
        <div id="text-14" class="widget edgtf-sidearea widget_text">
            <div class="textwidget">
                <div class="edgtf-image-gallery">
                    <div class="edgtf-image-gallery-slider" data-autoplay="3" data-animation="slide"
                         data-navigation="no"
                         data-pagination="yes">
                        <img width="600" height="405"
                             src="http://dorian.edge-themes.com/wp-content/uploads/2016/03/sidearea-image-1.jpg"
                             class="attachment-large size-large" alt="a"
                             srcset="http://dorian.edge-themes.com/wp-content/uploads/2016/03/sidearea-image-1.jpg 600w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/sidearea-image-1-300x203.jpg 300w"
                             sizes="(max-width: 600px) 100vw, 600px"/> <img width="600" height="405"
                                                                            src="http://dorian.edge-themes.com/wp-content/uploads/2016/03/sidearea-image-2.jpg"
                                                                            class="attachment-large size-large" alt="a"
                                                                            srcset="http://dorian.edge-themes.com/wp-content/uploads/2016/03/sidearea-image-2.jpg 600w, http://dorian.edge-themes.com/wp-content/uploads/2016/03/sidearea-image-2-300x203.jpg 300w"
                                                                            sizes="(max-width: 600px) 100vw, 600px"/>
                    </div>
                </div>


                <div class="vc_empty_space" style="height: 15px"><span class="vc_empty_space_inner"></span></div>


                Populate the side area with widgets, images, navigation links and whatever else comes to mind. Easily
                add
                social icons linking to your social media pages and make sure that they are always just one click away.
            </div>
        </div>
        <div id="nav_menu-3" class="widget edgtf-sidearea widget_nav_menu">
            <div class="menu-sidearea-menu-container">
                <ul id="menu-sidearea-menu" class="menu">
                    <li id="menu-item-5697"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5697">
                        <a href="http://dorian.edge-themes.com/landing/">Landing</a></li>
                    <li id="menu-item-2489"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2489">
                        <a href="http://dorian.edge-themes.com/business-home/">Business Home</a></li>
                    <li id="menu-item-2493"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2493">
                        <a href="http://dorian.edge-themes.com/left-menu/">Left Menu</a></li>
                    <li id="menu-item-2491"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2491">
                        <a href="http://dorian.edge-themes.com/portfolio-pinterest/">Portfolio Pinterest</a></li>
                </ul>
            </div>
        </div>
        <div id="text-15" class="widget edgtf-sidearea widget_text">
            <div class="textwidget">
    <span class="edgtf-icon-shortcode normal" style="margin: 0 8px 0 0 " data-hover-color="#ffffff"
          data-color="#6f6f6f">
                    <a href="https://www.instagram.com/" target="_blank">

        <span aria-hidden="true" class="edgtf-icon-font-elegant social_facebook_circle edgtf-icon-element"
              style="color: #6f6f6f;font-size:20px"></span>
                    </a>
            </span>


                <span class="edgtf-icon-shortcode normal" style="margin: 0 8px 0 0 " data-hover-color="#ffffff"
                      data-color="#6f6f6f">
                    <a href="https://www.instagram.com/" target="_blank">

        <span aria-hidden="true" class="edgtf-icon-font-elegant social_twitter_circle edgtf-icon-element"
              style="color: #6f6f6f;font-size:20px"></span>
                    </a>
            </span>


                <span class="edgtf-icon-shortcode normal" style="margin: 0 8px 0 0 " data-hover-color="#ffffff"
                      data-color="#6f6f6f">
                    <a href="https://www.instagram.com/" target="_blank">

        <span aria-hidden="true" class="edgtf-icon-font-elegant social_tumblr_circle edgtf-icon-element"
              style="color: #6f6f6f;font-size:20px"></span>
                    </a>
            </span>


                <span class="edgtf-icon-shortcode normal" style="margin: 0 8px 0 0 " data-hover-color="#ffffff"
                      data-color="#6f6f6f">
                    <a href="https://www.instagram.com/" target="_blank">

        <span aria-hidden="true" class="edgtf-icon-font-elegant social_pinterest_circle edgtf-icon-element"
              style="color: #6f6f6f;font-size:20px"></span>
                    </a>
            </span>

            </div>
        </div>
    </section>


    <div class="edgtf-smooth-transition-loader edgtf-mimic-ajax">
        <div class="edgtf-st-loader">
            <div class="edgtf-st-loader1">
                <div class="circle_side"></div>
            </div>
        </div>
    </div>

    <div class="edgtf-wrapper">
        <div class="edgtf-wrapper-inner">
            <div class="edgtf-fullscreen-search-holder">
                <div class="edgtf-fullscreen-search-close-container">
                    <div class="edgtf-search-close-holder">
                        <a class="edgtf-fullscreen-search-close" href="javascript:void(0)">
                            <span class="edgtf-icon-ico-moon icomoon-icon-cross "></span> </a>
                    </div>
                </div>
                <div class="edgtf-fullscreen-search-table">
                    <div class="edgtf-fullscreen-search-cell">
                        <div class="edgtf-fullscreen-search-inner">
                            <form action="http://dorian.edge-themes.com/" class="edgtf-fullscreen-search-form"
                                  method="get">
                                <div class="edgtf-form-holder">
                                    <div class="edgtf-field-holder">
                                        <input type="text" placeholder="Start typing..." name="s"
                                               class="edgtf-search-field"
                                               autocomplete="off"/>
                                        <div class="edgtf-line"></div>
                                    </div>
                                    <input type="submit" class="edgtf-search-submit" value="&#x55;"/>
                                    <div class="edgtf-search-label-holder">
                                        <div class="edgtf-search-label-holder-inner">
                                            <span class="edgtf-search-label">Press enter to begin your search</span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="edgtf-top-bar">
                <div class="edgtf-vertical-align-containers edgtf-30-30-30">
                    <div class="edgtf-position-left">
                  <!--      <div class="edgtf-position-left-inner">-->
                            <div id="text-7" class="widget widget_text edgtf-top-bar-widget">
                                <div class="textwidget"><?= \app\classes\TextBlock::textBlock('TextBlock_1','ok') ?></div>
                            </div>
                            <div id="text-8" class="widget widget_text edgtf-top-bar-widget">
                                <div class="textwidget"><?= \app\classes\TextBlock::textBlock('TextBlock_2','ok') ?></div>
                            </div>
                            <div id="text-9" class="widget widget_text edgtf-top-bar-widget">
                              <!--  <div class="textwidget">
    <span class="edgtf-icon-shortcode normal" style="margin: 0 15px 0 0 " data-hover-color="#000000"
          data-color="#858585">
                    <a href="https://www.instagram.com/" target="_blank">

        <span class="edgtf-icon-ico-moon icomoon-icon-instagram edgtf-icon-element"
              style="color: #858585;font-size:11px"></span>
                    </a>
            </span>


                                    <span class="edgtf-icon-shortcode normal" style="margin: 0 11px 0 0 "
                                          data-hover-color="#000000" data-color="#858585">
                    <a href="https://twitter.com/" target="_blank">

        <span class="edgtf-icon-ico-moon icomoon-icon-twitter edgtf-icon-element"
              style="color: #858585;font-size:11px"></span>
                    </a>
            </span>


                                    <span class="edgtf-icon-shortcode normal" style="margin: 0 9px 0 0 "
                                          data-hover-color="#000000" data-color="#858585">
                    <a href="https://www.facebook.com/" target="_blank">

        <span class="edgtf-icon-ico-moon icomoon-icon-facebook edgtf-icon-element"
              style="color: #858585;font-size:11px"></span>
                    </a>
            </span>


                                    <span class="edgtf-icon-shortcode normal" style="margin: 0 15px 0 0 "
                                          data-hover-color="#000000" data-color="#858585">
                    <a href="https://www.tumblr.com/" target="_blank">

        <span class="edgtf-icon-ico-moon icomoon-icon-tumblr edgtf-icon-element"
              style="color: #858585;font-size:11px"></span>
                    </a>
            </span>

                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="edgtf-position-center">
                        <div class="edgtf-position-center-inner">
                        </div>
                    </div>
                    <div class="edgtf-position-right">
                        <div class="edgtf-position-right-inner">
                            <div id="text-10" class="widget widget_text edgtf-top-bar-widget">
                                <div class="textwidget"><a href="http://dorian.edge-themes.com/my-account"
                                                           style="color: #888888;">My Account</a></div>
                            </div>
                            <div id="text-11" class="widget widget_text edgtf-top-bar-widget">
                                <div class="textwidget">
                                    <div id="lang_sel">
                                        <ul>
                                            <li>
                                                <a href="#" class="lang_sel_sel icl-en">
                                                    English
                                                </a>
                                                <ul>
                                                    <li class="icl-fr">
                                                        <a rel="alternate" hreflang="fr" href="#">
                                                            French
                                                        </a>
                                                    </li>
                                                    <li class="icl-de">
                                                        <a rel="alternate" hreflang="de" href="#">
                                                            German
                                                        </a>
                                                    </li>
                                                    <li class="icl-it">
                                                        <a rel="alternate" hreflang="it" href="#">
                                                            Italian
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <header class="edgtf-page-header">
                <div class="edgtf-menu-area"
                     style="background-color:rgba(0, 0, 0, 0.3);border-bottom-color:rgba(221, 221, 221, 0.08)">
                    <div class="edgtf-vertical-align-containers">
                        <div class="edgtf-position-left">
                            <div class="edgtf-position-left-inner">

                                <div class="edgtf-logo-wrapper">
                                    <a href="http://dorian.edge-themes.com/" style="height: 31px;">
                                        <img class="edgtf-normal-logo"
                                             src="http://dorian.edge-themes.com/wp-content/uploads/2016/05/logo-dark-b.png"
                                             alt="logo"/>
                                        <img class="edgtf-dark-logo"
                                             src="http://dorian.edge-themes.com/wp-content/uploads/2016/05/logo-dark-b.png"
                                             alt="dark logoo"/> <img class="edgtf-light-logo"
                                                                     src="/dorian/files/logo-light-b.png"
                                                                     alt="light logo"/> </a>
                                </div>

                            </div>
                        </div>
                        <div class="edgtf-position-center">
                            <div class="edgtf-position-center-inner">
                                <nav class="edgtf-main-menu edgtf-drop-down edgtf-default-nav">

                                   <?=\app\classes\Url::view_cat(\app\classes\Url::arrayCategory(),0,'clearfix');?>

                                </nav>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="edgtf-sticky-header">
                    <div class="edgtf-sticky-holder">
                        <div class=" edgtf-vertical-align-containers">
                            <div class="edgtf-position-left">
                                <div class="edgtf-position-left-inner">

                                    <div class="edgtf-logo-wrapper">
                                        <a href="http://dorian.edge-themes.com/" style="height: 31px;">
                                            <img class="edgtf-normal-logo"
                                                 src="http://dorian.edge-themes.com/wp-content/uploads/2016/05/logo-dark-b.png"
                                                 alt="logo"/>
                                            <img class="edgtf-dark-logo"
                                                 src="http://dorian.edge-themes.com/wp-content/uploads/2016/05/logo-dark-b.png"
                                                 alt="dark logoo"/> <img class="edgtf-light-logo"
                                                                         src="/dorian/files/logo-light-b.png"
                                                                         alt="light logo"/> </a>
                                    </div>

                                </div>
                            </div>
                            <div class="edgtf-position-center">
                                <div class="edgtf-position-center-inner">

                                    <nav class="edgtf-main-menu edgtf-drop-down edgtf-sticky-nav">
                                        <?= \app\classes\Url::view_cat(\app\classes\Url::arrayCategory(),0,'clearfix');?>
                                    </nav>
                                </div>
                            </div>
                            <div class="edgtf-position-right">
                                <div class="edgtf-position-right-inner">

                                    <a data-color=#777777 data-hover-color=#3b3b3b data-icon-close-same-position="yes"
                                       style="font-size: 15px;color: #777777" class="edgtf-search-opener"
                                       href="javascript:void(0)">
                                        <span class="edgtf-icon-ico-moon icomoon-icon-search "></span> </a>
                                    <a class="edgtf-side-menu-button-opener normal" style="color: #777777"
                                       href="javascript:void(0)">
                                        <span aria-hidden="true" class="edgtf-icon-font-elegant icon_menu "></span> </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </header>


            <header class="edgtf-mobile-header">
                <div class="edgtf-mobile-header-inner">
                    <div class="edgtf-mobile-header-holder">
                        <div class="edgtf-grid">
                            <div class="edgtf-vertical-align-containers">
                                <div class="edgtf-mobile-menu-opener">
                                    <a href="javascript:void(0)">
                    <span class="edgtf-mobile-opener-icon-holder">
                        <i class="edgtf-icon-font-awesome fa fa-bars "></i>                    </span>
                                    </a>
                                </div>
                                <div class="edgtf-position-center">
                                    <div class="edgtf-position-center-inner">

                                        <div class="edgtf-mobile-logo-wrapper">
                                            <a href="http://dorian.edge-themes.com/" style="height: 31px">
                                                <img src="http://dorian.edge-themes.com/wp-content/uploads/2016/05/logo-dark-b.png"
                                                     alt="mobile logo"/>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="edgtf-position-right">
                                    <div class="edgtf-position-right-inner">
                                    </div>
                                </div>
                            </div> <!-- close .edgtf-vertical-align-containers -->
                        </div>
                    </div>
                    <nav class="edgtf-mobile-nav">
                        <div class="edgtf-grid">
                            <?= \app\classes\Url::view_cat_mobile(\app\classes\Url::arrayCategory(),0,'clearfix');?>

                        </div>
                    </nav>
                </div>
            </header> <!-- close .edgtf-mobile-header -->


            <a id='edgtf-back-to-top' href='#'>
                <span class="edgtf-icon-stack">
                    <span aria-hidden="true" class="edgtf-icon-font-elegant arrow_up "></span>                </span>
            </a>

            <div class="edgtf-content" style="margin-top: -125px">
                <div class="edgtf-content-inner">
                    <?= $content ?>
                </div> <!-- close div.content_inner -->
            </div>  <!-- close div.content -->

            <footer>
                <div class="edgtf-footer-inner clearfix">


                    <div class="edgtf-footer-top-holder">
                        <div class="edgtf-footer-top edgtf-footer-top-full edgtf-footer-top-aligment-left">
                            <div class="edgtf-four-columns clearfix">
                                <div class="edgtf-four-columns-inner">
                                    <div class="edgtf-column">
                                        <div class="edgtf-column-inner">
                                            <div id="text-4" class="widget edgtf-footer-column-1 widget_text">
                                                <?= \app\classes\TextBlock::textBlock('textBlock_3') ?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="edgtf-column">
                                        <div class="edgtf-column-inner">
                                            <div id="recent-posts-3"
                                                 class="widget edgtf-footer-column-2 widget_recent_entries">
                                                <?= \app\classes\TextBlock::textBlock('textBlock_4') ?>

                                            </div>
                                            <div id="text-16" class="widget edgtf-footer-column-2 widget_text">
                                                <div class="textwidget">
                                                    <div class="vc_empty_space" style="height: 20px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="edgtf-column">
                                        <div class="edgtf-column-inner">
                                            <div id="nav_menu-2" class="widget edgtf-footer-column-3 widget_nav_menu">
                                                <?= \app\classes\TextBlock::textBlock('textBlock_5') ?>
                                            </div>
                                            <div id="text-17" class="widget edgtf-footer-column-3 widget_text">
                                                <div class="textwidget">
                                                    <div class="vc_empty_space" style="height: 20px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="edgtf-column">
                                        <div class="edgtf-column-inner">
                                            <?//= \app\classes\TextBlock::textBlock('textBlock_6') ?>
                                            <div id="text-5" class="widget edgtf-footer-column-4 widget_text">

                                                <h6
                                                        class="edgtf-footer-widget-title">FOLLOW US</h6>
                                                <div class="textwidget"></div>
                                            </div>
                                            <div id="edgtf_instagram_widget-3"
                                                 class="widget edgtf-footer-column-4 widget_edgtf_instagram_widget"><h6
                                                        class="edgtf-footer-widget-title"></h6>
                                                <ul class="edgtf-instagram-feed clearfix edgtf-col-3">
                                                    <li>
                                                        <a href="https://www.instagram.com/p/BFdvG-BrQfL/"
                                                           target="_blank">
                                                            <img class="thumbnail"
                                                                 src="https://scontent.cdninstagram.com/t51.2885-15/s150x150/e35/13188003_951581578273158_74745382_n.jpg"
                                                                 alt="#EdgeThemesEscher" width="150" height="150"/> </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.instagram.com/p/BFdvEArLQfF/"
                                                           target="_blank">
                                                            <img class="thumbnail"
                                                                 src="https://scontent.cdninstagram.com/t51.2885-15/s150x150/e35/13108711_852458064860667_1777184781_n.jpg"
                                                                 alt="#EdgeThemesEscher" width="150" height="150"/> </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.instagram.com/p/BFdvCCbLQfC/"
                                                           target="_blank">
                                                            <img class="thumbnail"
                                                                 src="https://scontent.cdninstagram.com/t51.2885-15/s150x150/e35/13181414_1007782502591511_466936757_n.jpg"
                                                                 alt="#EdgeThemesEscher" width="150" height="150"/> </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.instagram.com/p/BFdu_u1rQe7/"
                                                           target="_blank">
                                                            <img class="thumbnail"
                                                                 src="https://scontent.cdninstagram.com/t51.2885-15/s150x150/e35/13151306_1681296265465207_575116656_n.jpg"
                                                                 alt="#EdgeThemesEscher" width="150" height="150"/> </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.instagram.com/p/BFdu92CrQe2/"
                                                           target="_blank">
                                                            <img class="thumbnail"
                                                                 src="https://scontent.cdninstagram.com/t51.2885-15/s150x150/e35/13109116_1732344280346763_1063914731_n.jpg"
                                                                 alt="#EdgeThemesEscher" width="150" height="150"/> </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.instagram.com/p/BFdu757LQe0/"
                                                           target="_blank">
                                                            <img class="thumbnail"
                                                                 src="https://scontent.cdninstagram.com/t51.2885-15/s150x150/e35/13181479_611155499037177_1621156665_n.jpg"
                                                                 alt="#EdgeThemesEscher" width="150" height="150"/> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="edgtf-footer-bottom-holder">
                        <div class="edgtf-footer-bottom-holder-inner">
                            <div class="edgtf-column-inner">
                                <div id="text-6" class="widget edgtf-footer-text widget_text">
                                    <div class="textwidget">© 2017 <?= \app\classes\TextBlock::textBlock('textBlock_6') ?>
                                        <?= \app\classes\admin::inputOutput()?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </footer>

        </div> <!-- close div.edgtf-wrapper-inner  -->
    </div> <!-- close div.edgtf-wrapper -->


    <script type='text/javascript'>
        /* <![CDATA[ */
        var edgtfGlobalVars = {
            "vars": {
                "edgtfAddForAdminBar": 0,
                "edgtfElementAppearAmount": -150,
                "edgtfFinishedMessage": "No more posts",
                "edgtfMessage": "Loading new posts...",
                "edgtfTopBarHeight": 40,
                "edgtfStickyHeaderHeight": 60,
                "edgtfStickyHeaderTransparencyHeight": 60,
                "edgtfStickyScrollAmount": 0,
                "edgtfLogoAreaHeight": 0,
                "edgtfMenuAreaHeight": 125,
                "edgtfMobileHeaderHeight": 75
            }
        };
        var edgtfPerPageVars = {
            "vars": {
                "edgtfStickyScrollAmount": 760,
                "edgtfPassepartout": 0,
                "edgtfHeaderTransparencyHeight": 0
            }
        };
        /* ]]> */
    </script>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>