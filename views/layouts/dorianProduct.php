<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAssetDorianProduct;
use app\assets\AppAssetDorianProductEnd;
use app\models\Category;

AppAssetDorianProduct::register($this);
AppAssetDorianProductEnd::register($this);
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
        <?php $this->head() ?>


        <link rel="profile" href="http://gmpg.org/xfn/11"/>
        <link rel="pingback" href="http://dorian.edge-themes.com/xmlrpc.php"/>


        <script type="application/javascript">var edgtCoreAjaxUrl = "http://dorian.edge-themes.com/wp-admin/admin-ajax.php"</script>
        <script type="application/javascript">var EdgefAjaxUrl = "http://dorian.edge-themes.com/wp-admin/admin-ajax.php"</script>
        <link rel="alternate" type="application/rss+xml" title="Dorian &raquo; Feed"
              href="http://dorian.edge-themes.com/feed/"/>
        <link rel="alternate" type="application/rss+xml" title="Dorian &raquo; Comments Feed"
              href="http://dorian.edge-themes.com/comments/feed/"/>
        <link rel="alternate" type="application/rss+xml" title="Dorian &raquo; Products Feed"
              href="http://dorian.edge-themes.com/shop/feed/"/>
        <script type="text/javascript">
            window._wpemojiSettings = {
                "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/72x72\/",
                "ext": ".png",
                "source": {"concatemoji": "http:\/\/dorian.edge-themes.com\/wp-includes\/js\/wp-emoji-release.min.js"}
            };
            !function (a, b, c) {
                function d(a) {
                    var c, d, e, f = b.createElement("canvas"), g = f.getContext && f.getContext("2d"),
                        h = String.fromCharCode;
                    if (!g || !g.fillText)return !1;
                    switch (g.textBaseline = "top", g.font = "600 32px Arial", a) {
                        case"flag":
                            return g.fillText(h(55356, 56806, 55356, 56826), 0, 0), f.toDataURL().length > 3e3;
                        case"diversity":
                            return g.fillText(h(55356, 57221), 0, 0), c = g.getImageData(16, 16, 1, 1).data, d = c[0] + "," + c[1] + "," + c[2] + "," + c[3], g.fillText(h(55356, 57221, 55356, 57343), 0, 0), c = g.getImageData(16, 16, 1, 1).data, e = c[0] + "," + c[1] + "," + c[2] + "," + c[3], d !== e;
                        case"simple":
                            return g.fillText(h(55357, 56835), 0, 0), 0 !== g.getImageData(16, 16, 1, 1).data[0];
                        case"unicode8":
                            return g.fillText(h(55356, 57135), 0, 0), 0 !== g.getImageData(16, 16, 1, 1).data[0]
                    }
                    return !1
                }

                function e(a) {
                    var c = b.createElement("script");
                    c.src = a, c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
                }

                var f, g, h, i;
                for (i = Array("simple", "flag", "unicode8", "diversity"), c.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, h = 0; h < i.length; h++)c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], "flag" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]);
                c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function () {
                    c.DOMReady = !0
                }, c.supports.everything || (g = function () {
                    c.readyCallback()
                }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function () {
                    "complete" === b.readyState && c.readyCallback()
                })), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
            }(window, document, window._wpemojiSettings);
        </script>
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
        <script type="text/javascript">
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', '__gaTracker');

            __gaTracker('create', 'UA-77410298-1', 'auto');
            __gaTracker('set', 'forceSSL', true);
            __gaTracker('send', 'pageview');

        </script>
        <!-- / Google Analytics by MonsterInsights -->

        <script type='text/javascript'>
            /* <![CDATA[ */
            var wc_add_to_cart_params = {
                "ajax_url": "\/wp-admin\/admin-ajax.php",
                "wc_ajax_url": "\/shop\/page\/1\/?wc-ajax=%%endpoint%%",
                "i18n_view_cart": "View Cart",
                "cart_url": "http:\/\/dorian.edge-themes.com\/cart\/",
                "is_cart": "",
                "cart_redirect_after_add": "no"
            };
            /* ]]> */
        </script>


        <link rel='https://api.w.org/' href='http://dorian.edge-themes.com/wp-json/'/>
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://dorian.edge-themes.com/xmlrpc.php?rsd"/>
        <link rel="wlwmanifest" type="application/wlwmanifest+xml"
              href="http://dorian.edge-themes.com/wp-includes/wlwmanifest.xml"/>


        <link rel="alternate" type="application/rss+xml" title="New products"
              href="http://dorian.edge-themes.com/shop/feed/"/>
        <style type="text/css"></style>
        <meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
        <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css"
              href="http://dorian.edge-themes.com/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css"
              media="screen"><![endif]--><!--[if IE  8]>
        <link rel="stylesheet" type="text/css"
              href="http://dorian.edge-themes.com/wp-content/plugins/js_composer/assets/css/vc-ie8.min.css"
              media="screen"><![endif]-->
        <meta name="generator"
              content="Powered by Slider Revolution 5.1.6 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface."/>


        <noscript>
            <style type="text/css"> .wpb_animate_when_almost_visible {
                    opacity: 1;
                }</style>
        </noscript>
    </head>

    <body class="archive post-type-archive post-type-archive-product edgt-core-1.0 woocommerce woocommerce-page dorian-ver-1.0.1 edgtf-smooth-page-transitions edgtf-mimic-ajax edgtf-blog-installed edgtf-header-standard edgtf-fixed-on-scroll edgtf-default-mobile-header edgtf-sticky-up-mobile-header edgtf-dropdown-default edgtf-fullscreen-search edgtf-search-fade edgtf-side-menu-slide-from-right edgtf-woocommerce-page edgtf-woocommerce-columns-4 wpb-js-composer js-comp-ver-4.11.2.1 vc_responsive">
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
                         data-navigation="no" data-pagination="yes">
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
                add social icons linking to your social media pages and make sure that they are always just one click
                away.
            </div>
        </div>
        <div id="nav_menu-3" class="widget edgtf-sidearea widget_nav_menu">
            <div class="menu-sidearea-menu-container">
                <ul id="menu-sidearea-menu" class="menu">
                    <li id="menu-item-5697"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5697"><a
                                href="http://dorian.edge-themes.com/landing/">Landing</a></li>
                    <li id="menu-item-2489"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2489"><a
                                href="http://dorian.edge-themes.com/business-home/">Business Home</a></li>
                    <li id="menu-item-2493"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2493"><a
                                href="http://dorian.edge-themes.com/left-menu/">Left Menu</a></li>
                    <li id="menu-item-2491"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2491"><a
                                href="http://dorian.edge-themes.com/portfolio-pinterest/">Portfolio Pinterest</a></li>
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
                                               class="edgtf-search-field" autocomplete="off"/>
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
            <header class="edgtf-page-header" style="margin-bottom:85px">
                <div class="edgtf-fixed-wrapper">
                    <div class="edgtf-menu-area" style=";">
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
                                        <?php
                                        $arr_cat = \app\classes\Url::arrayCategory();
                                        \app\classes\Url::view_cat($arr_cat, 0, 'clearfix');
                                        ?>
                                        <!--                                        <ul id="menu-main-menu" class="clearfix">-->
                                        <!--                                            <li id="nav-menu-item-15"-->
                                        <!--                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children edgtf-has-sub edgtf-menu-wide">-->
                                        <!--                                                <a href="#"><span class="edgtf-item-outer"><span-->
                                        <!--                                                                class="edgtf-item-inner"><span class="edgtf-item-text">Home</span></span><span-->
                                        <!--                                                                class="plus"></span></span></a>-->
                                        <!--                                                <div class="edgtf-menu-second">-->
                                        <!--                                                    <div class="edgtf-menu-inner">-->
                                        <!--                                                        <ul>-->
                                        <!--                                                            <li id="nav-menu-item-4192"-->
                                        <!--                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children edgtf-sub">-->
                                        <!--                                                                <ul>-->
                                        <!--                                                                    <li id="nav-menu-item-69"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Main Home</span></span><span-->
                                        <!--                                                                                        class="edgtf-featured-icon icon_star"></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-328"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/left-menu/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Left Menu</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-219"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/simple-home/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Simple Home</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-489"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/classic-home/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Classic Home</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-4326"-->
                                        <!--                                                                        class="menu-item menu-item-type-custom menu-item-object-custom">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/dorian1/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">One Page Home</span></span><span-->
                                        <!--                                                                                        class="edgtf-featured-icon icon_star"></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-2522"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/wedding-home/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Wedding Home</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                </ul>-->
                                        <!--                                                            </li>-->
                                        <!--                                                            <li id="nav-menu-item-4193"-->
                                        <!--                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children edgtf-sub">-->
                                        <!--                                                                <ul>-->
                                        <!--                                                                    <li id="nav-menu-item-68"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/business-home/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Business Home</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-138"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/creative-studio/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Creative Studio</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-3428"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/photo-studio/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Photo Studio</span></span><span-->
                                        <!--                                                                                        class="edgtf-featured-icon icon_star"></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-2523"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/artisan-home/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Artisan Home</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-3738"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/app-home/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">App Home</span></span><span-->
                                        <!--                                                                                        class="edgtf-featured-icon icon_star"></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-4325"-->
                                        <!--                                                                        class="menu-item menu-item-type-custom menu-item-object-custom">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/dorian2"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Restaurant Home</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                </ul>-->
                                        <!--                                                            </li>-->
                                        <!--                                                            <li id="nav-menu-item-4194"-->
                                        <!--                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children edgtf-sub">-->
                                        <!--                                                                <ul>-->
                                        <!--                                                                    <li id="nav-menu-item-2985"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/blog-home/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Blog Home</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-429"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/metro-blog/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Metro Blog</span></span><span-->
                                        <!--                                                                                        class="edgtf-featured-icon icon_star"></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-2417"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/portfolio-masonry/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Portfolio Masonry</span></span><span-->
                                        <!--                                                                                        class="edgtf-featured-icon icon_star"></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1553"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/portfolio-pinterest/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Portfolio Pinterest</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-2903"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/shop-home/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Shop Home</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-2953"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/shop-masonry-home/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Shop Masonry Home</span></span><span-->
                                        <!--                                                                                        class="edgtf-featured-icon icon_star"></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                </ul>-->
                                        <!--                                                            </li>-->
                                        <!--                                                            <li id="nav-menu-item-4195"-->
                                        <!--                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children edgtf-sub">-->
                                        <!--                                                                <ul>-->
                                        <!--                                                                    <li id="nav-menu-item-398"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/split-screen/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Split Screen</span></span><span-->
                                        <!--                                                                                        class="edgtf-featured-icon icon_star"></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-3297"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/product-showcase/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Product Showcase</span></span><span-->
                                        <!--                                                                                        class="edgtf-featured-icon icon_star"></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-476"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/jigsaw-home/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Jigsaw Home</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-5477"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/landing/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Landing</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                </ul>-->
                                        <!--                                                            </li>-->
                                        <!--                                                        </ul>-->
                                        <!--                                                    </div>-->
                                        <!--                                                </div>-->
                                        <!--                                            </li>-->
                                        <!--                                            <li id="nav-menu-item-16"-->
                                        <!--                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children edgtf-has-sub edgtf-menu-narrow">-->
                                        <!--                                                <a href="#"><span class="edgtf-item-outer"><span-->
                                        <!--                                                                class="edgtf-item-inner"><span class="edgtf-item-text">Pages</span></span><span-->
                                        <!--                                                                class="plus"></span></span></a>-->
                                        <!--                                                <div class="edgtf-menu-second">-->
                                        <!--                                                    <div class="edgtf-menu-inner">-->
                                        <!--                                                        <ul>-->
                                        <!--                                                            <li id="nav-menu-item-3177"-->
                                        <!--                                                                class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                <a href="http://dorian.edge-themes.com/about-me/"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">About Me</span></span><span-->
                                        <!--                                                                                class="plus"></span></span></a></li>-->
                                        <!--                                                            <li id="nav-menu-item-3176"-->
                                        <!--                                                                class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                <a href="http://dorian.edge-themes.com/about-us/"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">About Us</span></span><span-->
                                        <!--                                                                                class="plus"></span></span></a></li>-->
                                        <!--                                                            <li id="nav-menu-item-3175"-->
                                        <!--                                                                class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                <a href="http://dorian.edge-themes.com/what-we-do/"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">What We Do</span></span><span-->
                                        <!--                                                                                class="plus"></span></span></a></li>-->
                                        <!--                                                            <li id="nav-menu-item-3351"-->
                                        <!--                                                                class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                <a href="http://dorian.edge-themes.com/our-process/"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Our Process</span></span><span-->
                                        <!--                                                                                class="edgtf-featured-icon icon_star"></span><span-->
                                        <!--                                                                                class="plus"></span></span></a></li>-->
                                        <!--                                                            <li id="nav-menu-item-3174"-->
                                        <!--                                                                class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                <a href="http://dorian.edge-themes.com/meet-the-team/"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Meet The Team</span></span><span-->
                                        <!--                                                                                class="plus"></span></span></a></li>-->
                                        <!--                                                            <li id="nav-menu-item-3350"-->
                                        <!--                                                                class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                <a href="http://dorian.edge-themes.com/services-pricing/"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Services &#038; Pricing</span></span><span-->
                                        <!--                                                                                class="edgtf-featured-icon icon_star"></span><span-->
                                        <!--                                                                                class="plus"></span></span></a></li>-->
                                        <!--                                                            <li id="nav-menu-item-3449"-->
                                        <!--                                                                class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                <a href="http://dorian.edge-themes.com/our-skills/"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Our Skills</span></span><span-->
                                        <!--                                                                                class="edgtf-featured-icon icon_star"></span><span-->
                                        <!--                                                                                class="plus"></span></span></a></li>-->
                                        <!--                                                            <li id="nav-menu-item-3353"-->
                                        <!--                                                                class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                <a href="http://dorian.edge-themes.com/contact-page/"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Contact Page</span></span><span-->
                                        <!--                                                                                class="plus"></span></span></a></li>-->
                                        <!--                                                            <li id="nav-menu-item-3354"-->
                                        <!--                                                                class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                <a href="http://dorian.edge-themes.com/contact-page-2/"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Contact Page 2</span></span><span-->
                                        <!--                                                                                class="plus"></span></span></a></li>-->
                                        <!--                                                            <li id="nav-menu-item-3352"-->
                                        <!--                                                                class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                <a href="http://dorian.edge-themes.com/contact-page-3/"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Contact Page 3</span></span><span-->
                                        <!--                                                                                class="plus"></span></span></a></li>-->
                                        <!--                                                            <li id="nav-menu-item-3349"-->
                                        <!--                                                                class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                <a href="http://dorian.edge-themes.com/frequently-asked-questions/"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">FAQ</span></span><span-->
                                        <!--                                                                                class="plus"></span></span></a></li>-->
                                        <!--                                                            <li id="nav-menu-item-4929"-->
                                        <!--                                                                class="menu-item menu-item-type-custom menu-item-object-custom">-->
                                        <!--                                                                <a href="http://dorian.edge-themes.com/404-page"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">404 Page</span></span><span-->
                                        <!--                                                                                class="plus"></span></span></a></li>-->
                                        <!--                                                        </ul>-->
                                        <!--                                                    </div>-->
                                        <!--                                                </div>-->
                                        <!--                                            </li>-->
                                        <!--                                            <li id="nav-menu-item-20"-->
                                        <!--                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children edgtf-has-sub edgtf-menu-wide">-->
                                        <!--                                                <a href="#"><span class="edgtf-item-outer"><span-->
                                        <!--                                                                class="edgtf-item-inner"><span class="edgtf-item-text">Elements</span></span><span-->
                                        <!--                                                                class="plus"></span></span></a>-->
                                        <!--                                                <div class="edgtf-menu-second">-->
                                        <!--                                                    <div class="edgtf-menu-inner">-->
                                        <!--                                                        <ul>-->
                                        <!--                                                            <li id="nav-menu-item-910"-->
                                        <!--                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children edgtf-sub">-->
                                        <!--                                                                <a href="#" class="edgtf-no-link"-->
                                        <!--                                                                   style="cursor: default;"-->
                                        <!--                                                                   onclick="JavaScript: return false;"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Interactive</span></span><span-->
                                        <!--                                                                                class="edgtf-featured-icon icon_star"></span><span-->
                                        <!--                                                                                class="plus"></span><i-->
                                        <!--                                                                                class="edgtf-menu-arrow arrow_carrot-right"></i></span></a>-->
                                        <!--                                                                <ul>-->
                                        <!--                                                                    <li id="nav-menu-item-5790"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/expanding-images/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Expanding Images</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-5791"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/cascading-images/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Cascading Images</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-2225"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/item-showcase/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Item Showcase</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1760"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/icon-showcase/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Icon Showcase</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-4955"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/video-button/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Video Button</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1976"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/icon-chain/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Icon Chain</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1910"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/carousel/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Carousel</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1911"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/testimonials/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Testimonials</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1937"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/team/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Team</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                </ul>-->
                                        <!--                                                            </li>-->
                                        <!--                                                            <li id="nav-menu-item-909"-->
                                        <!--                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children edgtf-sub">-->
                                        <!--                                                                <a href="#" class="edgtf-no-link"-->
                                        <!--                                                                   style="cursor: default;"-->
                                        <!--                                                                   onclick="JavaScript: return false;"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Classic</span></span><span-->
                                        <!--                                                                                class="plus"></span><i-->
                                        <!--                                                                                class="edgtf-menu-arrow arrow_carrot-right"></i></span></a>-->
                                        <!--                                                                <ul>-->
                                        <!--                                                                    <li id="nav-menu-item-1712"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/accordions/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Accordions &#038; Toggles</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1714"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/buttons/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Buttons</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1713"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/tabs/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Tabs</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-2071"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/separators/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Separators</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1936"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/restaurant-menu/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Restaurant Menu</span></span><span-->
                                        <!--                                                                                        class="edgtf-featured-icon icon_star"></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1912"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/blog-posts/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Blog Posts</span></span><span-->
                                        <!--                                                                                        class="edgtf-featured-icon icon_star"></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-4027"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/call-to-action/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Call To Action</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1935"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/contact-form-7/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Contact Form 7</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1772"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/google-maps/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Google Maps</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                </ul>-->
                                        <!--                                                            </li>-->
                                        <!--                                                            <li id="nav-menu-item-908"-->
                                        <!--                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children edgtf-sub">-->
                                        <!--                                                                <a href="#" class="edgtf-no-link"-->
                                        <!--                                                                   style="cursor: default;"-->
                                        <!--                                                                   onclick="JavaScript: return false;"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Charts &#038; Diagrams</span></span><span-->
                                        <!--                                                                                class="plus"></span><i-->
                                        <!--                                                                                class="edgtf-menu-arrow arrow_carrot-right"></i></span></a>-->
                                        <!--                                                                <ul>-->
                                        <!--                                                                    <li id="nav-menu-item-1333"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/pricing-tables/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Pricing Tables</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1334"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/progress-bars/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Progress Bars</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1332"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/counters/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Counters</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1490"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/pie-charts/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Pie Charts</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-2101"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/process/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Process</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1491"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/message-boxes/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Message Boxes</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1349"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/icon-with-text/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Icon With Text</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1715"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/countdown/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Countdown</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                </ul>-->
                                        <!--                                                            </li>-->
                                        <!--                                                            <li id="nav-menu-item-907"-->
                                        <!--                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children edgtf-sub">-->
                                        <!--                                                                <a href="#" class="edgtf-no-link"-->
                                        <!--                                                                   style="cursor: default;"-->
                                        <!--                                                                   onclick="JavaScript: return false;"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Typography</span></span><span-->
                                        <!--                                                                                class="plus"></span><i-->
                                        <!--                                                                                class="edgtf-menu-arrow arrow_carrot-right"></i></span></a>-->
                                        <!--                                                                <ul>-->
                                        <!--                                                                    <li id="nav-menu-item-1105"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/headings/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Headings</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1104"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/columns/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Columns</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1226"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/title/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Title</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1106"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/highlights/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Highlights</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1230"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/dropcaps/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Dropcaps</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1229"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/blockquote/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Blockquote</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1227"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/custom-font/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Custom Font</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1228"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/lists/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Lists</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                </ul>-->
                                        <!--                                                            </li>-->
                                        <!--                                                        </ul>-->
                                        <!--                                                    </div>-->
                                        <!--                                                </div>-->
                                        <!--                                            </li>-->
                                        <!--                                            <li id="nav-menu-item-17"-->
                                        <!--                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children edgtf-has-sub edgtf-menu-narrow">-->
                                        <!--                                                <a href="#"><span class="edgtf-item-outer"><span-->
                                        <!--                                                                class="edgtf-item-inner"><span class="edgtf-item-text">Blog</span></span><span-->
                                        <!--                                                                class="plus"></span></span></a>-->
                                        <!--                                                <div class="edgtf-menu-second">-->
                                        <!--                                                    <div class="edgtf-menu-inner">-->
                                        <!--                                                        <ul>-->
                                        <!--                                                            <li id="nav-menu-item-5650"-->
                                        <!--                                                                class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                <a href="http://dorian.edge-themes.com/standard/"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Standard</span></span><span-->
                                        <!--                                                                                class="plus"></span></span></a></li>-->
                                        <!--                                                            <li id="nav-menu-item-302"-->
                                        <!--                                                                class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                <a href="http://dorian.edge-themes.com/blog-standard/"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Standard Right Sidebar</span></span><span-->
                                        <!--                                                                                class="plus"></span></span></a></li>-->
                                        <!--                                                            <li id="nav-menu-item-315"-->
                                        <!--                                                                class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                <a href="http://dorian.edge-themes.com/standard-left-sidebar/"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Standard Left Sidebar</span></span><span-->
                                        <!--                                                                                class="plus"></span></span></a></li>-->
                                        <!--                                                            <li id="nav-menu-item-463"-->
                                        <!--                                                                class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                <a href="http://dorian.edge-themes.com/blog-masonry-grid/"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Masonry Grid</span></span><span-->
                                        <!--                                                                                class="plus"></span></span></a></li>-->
                                        <!--                                                            <li id="nav-menu-item-5676"-->
                                        <!--                                                                class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                <a href="http://dorian.edge-themes.com/home-masonry-wide/"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Home Masonry Wide</span></span><span-->
                                        <!--                                                                                class="edgtf-featured-icon icon_star"></span><span-->
                                        <!--                                                                                class="plus"></span></span></a></li>-->
                                        <!--                                                            <li id="nav-menu-item-4623"-->
                                        <!--                                                                class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                <a href="http://dorian.edge-themes.com/masonry-gallery/"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Masonry Gallery</span></span><span-->
                                        <!--                                                                                class="edgtf-featured-icon icon_star"></span><span-->
                                        <!--                                                                                class="plus"></span></span></a></li>-->
                                        <!--                                                            <li id="nav-menu-item-316"-->
                                        <!--                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children edgtf-sub">-->
                                        <!--                                                                <a href="#" class="edgtf-no-link"-->
                                        <!--                                                                   style="cursor: default;"-->
                                        <!--                                                                   onclick="JavaScript: return false;"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Post Types</span></span><span-->
                                        <!--                                                                                class="plus"></span><i-->
                                        <!--                                                                                class="edgtf-menu-arrow arrow_carrot-right"></i></span></a>-->
                                        <!--                                                                <ul>-->
                                        <!--                                                                    <li id="nav-menu-item-317"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-post">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/virtual-dreamtime-3/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Standard</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-320"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-post">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/passion-dedication/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Gallery</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-318"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-post">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/success-groove-2/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Audio</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-322"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-post">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/the-joy-of-art/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Video</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-319"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-post">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/lewis-howes-2/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Quote</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-321"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-post">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/life-in-every-stitch-2/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Link</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                </ul>-->
                                        <!--                                                            </li>-->
                                        <!--                                                        </ul>-->
                                        <!--                                                    </div>-->
                                        <!--                                                </div>-->
                                        <!--                                            </li>-->
                                        <!--                                            <li id="nav-menu-item-18"-->
                                        <!--                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children edgtf-has-sub edgtf-menu-wide">-->
                                        <!--                                                <a href="#"><span class="edgtf-item-outer"><span-->
                                        <!--                                                                class="edgtf-item-inner"><span class="edgtf-item-text">Portfolio</span></span><span-->
                                        <!--                                                                class="plus"></span></span></a>-->
                                        <!--                                                <div class="edgtf-menu-second">-->
                                        <!--                                                    <div class="edgtf-menu-inner">-->
                                        <!--                                                        <ul>-->
                                        <!--                                                            <li id="nav-menu-item-1038"-->
                                        <!--                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children edgtf-sub">-->
                                        <!--                                                                <a href="#" class="edgtf-no-link"-->
                                        <!--                                                                   style="cursor: default;"-->
                                        <!--                                                                   onclick="JavaScript: return false;"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Standard</span></span><span-->
                                        <!--                                                                                class="plus"></span><i-->
                                        <!--                                                                                class="edgtf-menu-arrow arrow_carrot-right"></i></span></a>-->
                                        <!--                                                                <ul>-->
                                        <!--                                                                    <li id="nav-menu-item-1049"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/standard-two-columns-grid/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Two Columns</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1074"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/standard-three-columns-grid/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Three Columns</span></span><span-->
                                        <!--                                                                                        class="edgtf-featured-icon icon_star"></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1073"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/standard-three-columns-wide/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Three Columns Wide</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1072"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/standard-four-columns-grid/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Four Columns</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1071"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/standard-four-columns-wide/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Four Columns Wide</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1070"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/standard-five-columns-wide/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Five Columns Wide</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                </ul>-->
                                        <!--                                                            </li>-->
                                        <!--                                                            <li id="nav-menu-item-1039"-->
                                        <!--                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children edgtf-sub">-->
                                        <!--                                                                <a href="#" class="edgtf-no-link"-->
                                        <!--                                                                   style="cursor: default;"-->
                                        <!--                                                                   onclick="JavaScript: return false;"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Gallery</span></span><span-->
                                        <!--                                                                                class="plus"></span><i-->
                                        <!--                                                                                class="edgtf-menu-arrow arrow_carrot-right"></i></span></a>-->
                                        <!--                                                                <ul>-->
                                        <!--                                                                    <li id="nav-menu-item-1089"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/gallery-three-columns-grid/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Three Columns Joined</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1088"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/gallery-three-columns-wide/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Three Columns Joined/Wide</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1087"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/gallery-four-columns-grid/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Four Columns Joined</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1086"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/gallery-four-columns-wide/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Four Columns Joined/Wide</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1103"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/gallery-three-columns-grid-space/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Three Columns</span></span><span-->
                                        <!--                                                                                        class="edgtf-featured-icon icon_star"></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1100"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/gallery-four-columns-wide-space/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Four Columns Wide</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                </ul>-->
                                        <!--                                                            </li>-->
                                        <!--                                                            <li id="nav-menu-item-1040"-->
                                        <!--                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children edgtf-sub">-->
                                        <!--                                                                <a href="#" class="edgtf-no-link"-->
                                        <!--                                                                   style="cursor: default;"-->
                                        <!--                                                                   onclick="JavaScript: return false;"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Masonry &#038; Pinterest</span></span><span-->
                                        <!--                                                                                class="plus"></span><i-->
                                        <!--                                                                                class="edgtf-menu-arrow arrow_carrot-right"></i></span></a>-->
                                        <!--                                                                <ul>-->
                                        <!--                                                                    <li id="nav-menu-item-2379"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/masonry-grid/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Masonry</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-2380"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/masonry-wide/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Masonry Wide</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1751"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/pinterest-4-columns-grid/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Pinterest &#8211; 4 Columns</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1750"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/pinterest-4-columns-wide/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Pinterest &#8211; 4 Columns/Wide</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1723"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/pinterest-5-columns-wide/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Pinterest &#8211; 5 Columns/Wide</span></span><span-->
                                        <!--                                                                                        class="edgtf-featured-icon icon_star"></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                </ul>-->
                                        <!--                                                            </li>-->
                                        <!--                                                            <li id="nav-menu-item-1041"-->
                                        <!--                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children edgtf-sub">-->
                                        <!--                                                                <a href="#" class="edgtf-no-link"-->
                                        <!--                                                                   style="cursor: default;"-->
                                        <!--                                                                   onclick="JavaScript: return false;"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Portfolio Single</span></span><span-->
                                        <!--                                                                                class="plus"></span><i-->
                                        <!--                                                                                class="edgtf-menu-arrow arrow_carrot-right"></i></span></a>-->
                                        <!--                                                                <ul>-->
                                        <!--                                                                    <li id="nav-menu-item-1042"-->
                                        <!--                                                                        class="menu-item menu-item-type-custom menu-item-object-custom">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/portfolio-item/follow-your-office/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Small Images</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1043"-->
                                        <!--                                                                        class="menu-item menu-item-type-custom menu-item-object-custom">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/portfolio-item/strategy-makes-your-day/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Small Slider</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1044"-->
                                        <!--                                                                        class="menu-item menu-item-type-custom menu-item-object-custom">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/portfolio-item/the-team-community/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Big Images</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1045"-->
                                        <!--                                                                        class="menu-item menu-item-type-custom menu-item-object-custom">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/portfolio-item/where-coffee-is-a-pleasure/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Big Slider</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1046"-->
                                        <!--                                                                        class="menu-item menu-item-type-custom menu-item-object-custom">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/portfolio-item/lightening-the-studio/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Gallery</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1047"-->
                                        <!--                                                                        class="menu-item menu-item-type-custom menu-item-object-custom">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/portfolio-item/have-design-your-way/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Masonry Narrow</span></span><span-->
                                        <!--                                                                                        class="edgtf-featured-icon icon_star"></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-1048"-->
                                        <!--                                                                        class="menu-item menu-item-type-custom menu-item-object-custom">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/portfolio-item/trends-the-revolution/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Masonry Wide</span></span><span-->
                                        <!--                                                                                        class="edgtf-featured-icon icon_star"></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                </ul>-->
                                        <!--                                                            </li>-->
                                        <!--                                                        </ul>-->
                                        <!--                                                    </div>-->
                                        <!--                                                </div>-->
                                        <!--                                            </li>-->
                                        <!--                                            <li id="nav-menu-item-19"-->
                                        <!--                                                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children edgtf-has-sub edgtf-menu-narrow edgtf-active-item">-->
                                        <!--                                                <a href="#" class="current"><span class="edgtf-item-outer"><span-->
                                        <!--                                                                class="edgtf-item-inner"><span class="edgtf-item-text">Shop</span></span><span-->
                                        <!--                                                                class="plus"></span></span></a>-->
                                        <!--                                                <div class="edgtf-menu-second">-->
                                        <!--                                                    <div class="edgtf-menu-inner">-->
                                        <!--                                                        <ul>-->
                                        <!--                                                            <li id="nav-menu-item-3680"-->
                                        <!--                                                                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item">-->
                                        <!--                                                                <a href="http://dorian.edge-themes.com/shop/page/1/"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Shop With Sidebar</span></span><span-->
                                        <!--                                                                                class="plus"></span></span></a></li>-->
                                        <!--                                                            <li id="nav-menu-item-3120"-->
                                        <!--                                                                class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                <a href="http://dorian.edge-themes.com/shop-three-columns/"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Shop Three Columns</span></span><span-->
                                        <!--                                                                                class="plus"></span></span></a></li>-->
                                        <!--                                                            <li id="nav-menu-item-3119"-->
                                        <!--                                                                class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                <a href="http://dorian.edge-themes.com/shop-four-colums/"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Shop Four Colums</span></span><span-->
                                        <!--                                                                                class="plus"></span></span></a></li>-->
                                        <!--                                                            <li id="nav-menu-item-3118"-->
                                        <!--                                                                class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                <a href="http://dorian.edge-themes.com/shop-full-width/"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Shop Full Width</span></span><span-->
                                        <!--                                                                                class="plus"></span></span></a></li>-->
                                        <!--                                                            <li id="nav-menu-item-2952"-->
                                        <!--                                                                class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                <a href="http://dorian.edge-themes.com/shop-masonry/"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Shop Masonry</span></span><span-->
                                        <!--                                                                                class="edgtf-featured-icon icon_star"></span><span-->
                                        <!--                                                                                class="plus"></span></span></a></li>-->
                                        <!--                                                            <li id="nav-menu-item-3135"-->
                                        <!--                                                                class="menu-item menu-item-type-custom menu-item-object-custom">-->
                                        <!--                                                                <a href="http://dorian.edge-themes.com/product/trendy-sneakers/"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Single Product</span></span><span-->
                                        <!--                                                                                class="edgtf-featured-icon icon_star"></span><span-->
                                        <!--                                                                                class="plus"></span></span></a></li>-->
                                        <!--                                                            <li id="nav-menu-item-5874"-->
                                        <!--                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children edgtf-sub">-->
                                        <!--                                                                <a href="#" class="edgtf-no-link"-->
                                        <!--                                                                   style="cursor: default;"-->
                                        <!--                                                                   onclick="JavaScript: return false;"><span-->
                                        <!--                                                                            class="edgtf-item-outer"><span-->
                                        <!--                                                                                class="edgtf-item-inner"><span-->
                                        <!--                                                                                    class="edgtf-item-text">Pages</span></span><span-->
                                        <!--                                                                                class="plus"></span><i-->
                                        <!--                                                                                class="edgtf-menu-arrow arrow_carrot-right"></i></span></a>-->
                                        <!--                                                                <ul>-->
                                        <!--                                                                    <li id="nav-menu-item-5876"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/my-account/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">My Account</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-5875"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/cart/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Cart</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                    <li id="nav-menu-item-5877"-->
                                        <!--                                                                        class="menu-item menu-item-type-post_type menu-item-object-page">-->
                                        <!--                                                                        <a href="http://dorian.edge-themes.com/checkout/"><span-->
                                        <!--                                                                                    class="edgtf-item-outer"><span-->
                                        <!--                                                                                        class="edgtf-item-inner"><span-->
                                        <!--                                                                                            class="edgtf-item-text">Checkout</span></span><span-->
                                        <!--                                                                                        class="plus"></span></span></a>-->
                                        <!--                                                                    </li>-->
                                        <!--                                                                </ul>-->
                                        <!--                                                            </li>-->
                                        <!--                                                        </ul>-->
                                        <!--                                                    </div>-->
                                        <!--                                                </div>-->
                                        <!--                                            </li>-->
                                        <!--                                        </ul>-->
                                    </nav>

                                </div>
                            </div>
                            <div class="edgtf-position-right">
                                <div class="edgtf-position-right-inner">

                                    <a data-color=#00000 data-hover-color=3b3b3b data-icon-close-same-position="yes"
                                       style="color: #00000" class="edgtf-search-opener" href="javascript:void(0)">
                                        <span class="edgtf-icon-ico-moon icomoon-icon-search "></span> </a>
                                    <div class="edgtf-shopping-cart-outer">
                                        <div class="edgtf-shopping-cart-inner">
                                            <div class="edgtf-shopping-cart-header">
                                                <a class="edgtf-header-cart" href="http://dorian.edge-themes.com/cart/">
                                                    <i class="icon_bag_alt"></i>
                                                    <span class="edgtf-cart-amount">0</span>
                                                </a>

                                                <div class="edgtf-shopping-cart-dropdown">
                                                    <ul>


                                                        <li class="edgtf-empty-cart">No products in the cart.</li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="edgtf-side-menu-button-opener normal" style="color: #000000"
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
                            <?= \app\classes\Url::view_cat_mobile(\app\classes\Url::arrayCategory(), 0, 'clearfix'); ?>

                        </div>
                    </nav>

                </div>
            </header> <!-- close .edgtf-mobile-header -->


            <a id='edgtf-back-to-top' href='#'>
                <span class="edgtf-icon-stack">
                    <span aria-hidden="true" class="edgtf-icon-font-elegant arrow_up "></span>                </span>
            </a>

            <div class="edgtf-content">
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
                                    <div class="textwidget">© 2016 Edge Theme. All rights reserved</div>
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
        var _wpcf7 = {
            "loaderUrl": "http:\/\/dorian.edge-themes.com\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif",
            "recaptchaEmpty": "Please verify that you are not a robot.",
            "sending": "Sending ..."
        };
        /* ]]> */
    </script>


    <script type='text/javascript'>
        /* <![CDATA[ */
        var mejsL10n = {
            "language": "en-US",
            "strings": {
                "Close": "Close",
                "Fullscreen": "Fullscreen",
                "Download File": "Download File",
                "Download Video": "Download Video",
                "Play\/Pause": "Play\/Pause",
                "Mute Toggle": "Mute Toggle",
                "None": "None",
                "Turn off Fullscreen": "Turn off Fullscreen",
                "Go Fullscreen": "Go Fullscreen",
                "Unmute": "Unmute",
                "Mute": "Mute",
                "Captions\/Subtitles": "Captions\/Subtitles"
            }
        };
        var _wpmejsSettings = {"pluginPath": "\/wp-includes\/js\/mediaelement\/"};
        /* ]]> */
    </script>


    <script type='text/javascript' src='//maps.googleapis.com/maps/api/js'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var edgtfGlobalVars = {
            "vars": {
                "edgtfAddForAdminBar": 0,
                "edgtfElementAppearAmount": -150,
                "edgtfFinishedMessage": "No more posts",
                "edgtfMessage": "Loading new posts...",
                "edgtfTopBarHeight": 0,
                "edgtfStickyHeaderHeight": 0,
                "edgtfStickyHeaderTransparencyHeight": 60,
                "edgtfStickyScrollAmount": 0,
                "edgtfLogoAreaHeight": 0,
                "edgtfMenuAreaHeight": 85,
                "edgtfMobileHeaderHeight": 75
            }
        };
        var edgtfPerPageVars = {
            "vars": {
                "edgtfStickyScrollAmount": 0,
                "edgtfPassepartout": 0,
                "edgtfHeaderTransparencyHeight": 85
            }
        };
        /* ]]> */
    </script>


    <script type='text/javascript'>
        /* <![CDATA[ */
        var edgtfLike = {"ajaxurl": "http:\/\/dorian.edge-themes.com\/wp-admin\/admin-ajax.php"};
        /* ]]> */
    </script>


    <script type='text/javascript'>
        /* <![CDATA[ */
        var woocommerce_price_slider_params = {
            "currency_symbol": "$",
            "currency_pos": "left",
            "min_price": "",
            "max_price": ""
        };
        /* ]]> */
    </script>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>