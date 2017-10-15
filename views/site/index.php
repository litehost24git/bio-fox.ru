<?php

use app\classes\MySlider;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ContentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->registerMetaTag([
    'name' => 'title',
    'content' => $meta['title']
]);

$this->registerMetaTag([
    'name' => 'description',
    'content' => $meta['description']
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => $meta['keywords']
]);

$this->title = $meta['title'];
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="edgtf-content" style="margin-top: -125px">
    <div class="edgtf-content-inner">

        <?php



        foreach ($content as $z) {
            if ($z->type == 'slider') {
                echo \app\classes\Slider::sliderWidget($z);
            }
        }
        ?>

        <div class="edgtf-full-width">
            <div class="edgtf-full-width-inner">
                <div class="vc_row wpb_row vc_row-fluid edgtf-section vc_custom_1458725716530 edgtf-content-aligment-left edgtf-grid-section"
                     style="">
                    <div class="clearfix edgtf-section-inner">
                        <div class="edgtf-section-inner-margin clearfix">
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="edgtf-numbered-title">
                                            <div class="edgtf-nt-number">
		<span>
			01		</span>
                                            </div>
                                            <div class="edgtf-nt-title-subtitle-holder">
		<span class="edgtf-nt-subtitle">
			Easy-to-Use		</span>
                                                <h3>
                                                    Company Analysis </h3>
                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 23px"><span
                                                    class="vc_empty_space_inner"></span></div>

                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>Alienum phaedrum torquatos nec eu, vis detraxit periculis ex,
                                                    nihil expetendis in mei. Mei an pericula euripidis, hinc
                                                    partem ei est. Eos ei nisl graecis, vix aperiri consequat
                                                    an. Eius lorem tincidunt vix at, vel pertinax sensibus id,
                                                    error</p>

                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 40px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="edgtf-numbered-title">
                                            <div class="edgtf-nt-number">
		<span>
			02		</span>
                                            </div>
                                            <div class="edgtf-nt-title-subtitle-holder">
		<span class="edgtf-nt-subtitle">
			Easy Import		</span>
                                                <h3>
                                                    Creative Elements </h3>
                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 23px"><span
                                                    class="vc_empty_space_inner"></span></div>

                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>Alienum phaedrum torquatos nec eu, vis detraxit periculis ex,
                                                    nihil expetendis in mei. Mei an pericula euripidis, hinc
                                                    partem ei est. Eos ei nisl graecis, vix aperiri consequat
                                                    an. Eius lorem tincidunt vix at, vel pertinax sensibus id,
                                                    error</p>

                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 40px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="edgtf-numbered-title">
                                            <div class="edgtf-nt-number">
		<span>
			03		</span>
                                            </div>
                                            <div class="edgtf-nt-title-subtitle-holder">
		<span class="edgtf-nt-subtitle">
			Creative Elements		</span>
                                                <h3>
                                                    Loads of Layouts </h3>
                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 23px"><span
                                                    class="vc_empty_space_inner"></span></div>

                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>Alienum phaedrum torquatos nec eu, vis detraxit periculis ex,
                                                    nihil expetendis in mei. Mei an pericula euripidis, hinc
                                                    partem ei est. Eos ei nisl graecis, vix aperiri consequat
                                                    an. Eius lorem tincidunt vix at, vel pertinax sensibus id,
                                                    error</p>

                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 40px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid edgtf-section edgtf-content-aligment-left edgtf-grid-section"
                     style="">
                    <div class="clearfix edgtf-section-inner">
                        <div class="edgtf-section-inner-margin clearfix">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="edgtf-separator-holder clearfix  edgtf-separator-center edgtf-separator-full-width">
                                            <div class="edgtf-separator"
                                                 style="border-color: rgba(191,191,191,0.79);border-bottom-width: 1px;margin-top: 50px;margin-bottom: 100px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid edgtf-section vc_custom_1459936359732 edgtf-content-aligment-left edgtf-grid-section"
                     style="">
                    <div class="clearfix edgtf-section-inner">
                        <div class="edgtf-section-inner-margin clearfix">
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="vc_empty_space" style="height: 33px"><span
                                                    class="vc_empty_space_inner"></span></div>

                                        <p class="edgtf-section-subtitle" style="text-align:left">
                                            Easy Import</p>
                                        <div class="vc_empty_space" style="height: 10px"><span
                                                    class="vc_empty_space_inner"></span></div>

                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <h2>Get inspired</h2>

                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 60px"><span
                                                    class="vc_empty_space_inner"></span></div>

                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <h5>Creating a Strategy</h5>

                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 8px"><span
                                                    class="vc_empty_space_inner"></span></div>

                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>Alienum phaedrum torquatos nec eu, vis detraxit periculis ex,
                                                    nihil expetendis in mei. <span
                                                            style="text-decoration: underline; color: #000000;">Mei an pericula euripidis</span>,
                                                    hinc partem ei est. Eos ei nisl graecis, vix aperiri
                                                    consequat an.</p>

                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 65px"><span
                                                    class="vc_empty_space_inner"></span></div>

                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <h5>Catalogue Illustrator</h5>

                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 8px"><span
                                                    class="vc_empty_space_inner"></span></div>

                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>Alienum phaedrum torquatos nec eu, vis detraxit periculis ex,
                                                    nihil expetendis in mei. Mei an pericula euripidis, hinc
                                                    partem ei est. Eos ei nisl graecis, vix aperiri consequat
                                                    an.</p>

                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 65px"><span
                                                    class="vc_empty_space_inner"></span></div>

                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <h5>Attention to Detail</h5>

                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 8px"><span
                                                    class="vc_empty_space_inner"></span></div>

                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>Alienum phaedrum torquatos nec eu, vis detraxit periculis ex,
                                                    nihil expetendis in mei. <span
                                                            style="text-decoration: underline; color: #000000;">Mei an pericula euripidis</span>,
                                                    hinc partem ei est. Eos ei nisl graecis, vix aperiri
                                                    consequat an.</p>

                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 40px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-8 vc_col-md-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="edgtf-elements-holder edgtf-responsive-mode-768">
                                            <div class="edgtf-elements-holder-item ">
                                                <div class="edgtf-elements-holder-item-inner">
                                                    <div class="edgtf-elements-holder-item-content edgtf-elements-holder-custom-458224"
                                                         style="padding: 0% 0% 0% 15% ">
                                                        <style type="text/css"
                                                               data-type="edgtf-elements-custom-padding" scoped>

                                                            @media only screen and (min-width: 1280px) and (max-width: 1439px) {
                                                                .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-458224 {
                                                                    padding: !important;
                                                                }
                                                            }

                                                            @media only screen and (min-width: 1024px) and (max-width: 1280px) {
                                                                .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-458224 {
                                                                    padding: 7% !important;
                                                                }
                                                            }

                                                            @media only screen and (min-width: 768px) and (max-width: 1024px) {
                                                                .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-458224 {
                                                                    padding: 8% !important;
                                                                }
                                                            }

                                                            @media only screen and (min-width: 600px) and (max-width: 768px) {
                                                                .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-458224 {
                                                                    padding: 4% !important;
                                                                }
                                                            }

                                                            @media only screen and (min-width: 480px) and (max-width: 600px) {
                                                                .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-458224 {
                                                                    padding: 0% !important;
                                                                }
                                                            }

                                                            @media only screen and (max-width: 480px) {
                                                                .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-458224 {
                                                                    padding: 0% !important;
                                                                }
                                                            }
                                                        </style>
                                                        <div class="edgtf-int-icon-showcase edgtf-autoplay"
                                                             data-interval="3000">
                                                            <div class="edgtf-int-icon-showcase-inner">
                                                                <div class="edgtf-showcase-item-holder">
                                                                    <div class="edgtf-showcase-icon">

    <span class="edgtf-icon-shortcode circle ">

        <span aria-hidden="true" class="edgtf-icon-font-elegant icon_briefcase edgtf-icon-element" style=""></span>
            </span>

                                                                    </div>
                                                                    <div class="edgtf-showcase-content">
                                                                        <div class="edgtf-showcase-content-table">
                                                                            <div class="edgtf-showcase-content-cell">

                                                                                <p class="edgtf-section-subtitle"
                                                                                   style="text-align:center">
                                                                                    checkout our</p><h4>Company
                                                                                    analysis</h4>
                                                                                <div class="edgtf-showcase-content-inner">
                                                                                    Lorem ipsum dolor sit amet,
                                                                                    consectetur adipiscing elit.
                                                                                    Aenean feugiat dictum lacus,
                                                                                    ut hendrerit mi pulvinar
                                                                                    vel.<span
                                                                                            style="text-decoration: underline;color: #000000"> Fusce id nibh at neque</span>
                                                                                    eleifend tristique at sit
                                                                                    amet libero.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="edgtf-showcase-item-holder">
                                                                    <div class="edgtf-showcase-icon">

    <span class="edgtf-icon-shortcode circle ">

        <span aria-hidden="true" class="edgtf-icon-font-elegant icon_lock edgtf-icon-element" style=""></span>
            </span>

                                                                    </div>
                                                                    <div class="edgtf-showcase-content">
                                                                        <div class="edgtf-showcase-content-table">
                                                                            <div class="edgtf-showcase-content-cell">

                                                                                <p class="edgtf-section-subtitle"
                                                                                   style="text-align:center">
                                                                                    retina ready</p><h4>
                                                                                    Attention to Detail</h4>
                                                                                <div class="edgtf-showcase-content-inner">
                                                                                    Interdum et malesuada fames
                                                                                    ac ante ipsum primis in
                                                                                    faucibus. Quisque at tellus
                                                                                    felis. Sed fringilla, tellus
                                                                                    non congue porttitor, dui
                                                                                    eros faucibus augue, id
                                                                                    lobortis tellus felis ut
                                                                                    ligula.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="edgtf-showcase-item-holder">
                                                                    <div class="edgtf-showcase-icon">

    <span class="edgtf-icon-shortcode circle ">

        <span aria-hidden="true" class="edgtf-icon-font-elegant icon_lightbulb edgtf-icon-element" style=""></span>
            </span>

                                                                    </div>
                                                                    <div class="edgtf-showcase-content">
                                                                        <div class="edgtf-showcase-content-table">
                                                                            <div class="edgtf-showcase-content-cell">

                                                                                <p class="edgtf-section-subtitle"
                                                                                   style="text-align:center">
                                                                                    easy to use</p><h4>loads of
                                                                                    layouts</h4>
                                                                                <div class="edgtf-showcase-content-inner">
                                                                                    Cras scelerisque ligula sed
                                                                                    finibus fringilla. Nulla
                                                                                    mollis ex nunc, at
                                                                                    pellentesque elit finibus
                                                                                    ac. Quisque vitae dui
                                                                                    vulputate, convallis nisi
                                                                                    interdum, bibendum mauris.
                                                                                    Nulla a dolor eget ex
                                                                                    mollis.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="edgtf-showcase-item-holder">
                                                                    <div class="edgtf-showcase-icon">

    <span class="edgtf-icon-shortcode circle ">

        <span aria-hidden="true" class="edgtf-icon-font-elegant icon_book edgtf-icon-element" style=""></span>
            </span>

                                                                    </div>
                                                                    <div class="edgtf-showcase-content">
                                                                        <div class="edgtf-showcase-content-table">
                                                                            <div class="edgtf-showcase-content-cell">

                                                                                <p class="edgtf-section-subtitle"
                                                                                   style="text-align:center">
                                                                                    no coding</p><h4>Highly
                                                                                    Customizable</h4>
                                                                                <div class="edgtf-showcase-content-inner">
                                                                                    Nam fermentum vel felis at
                                                                                    laoreet. Cras semper
                                                                                    pulvinar tristique. Cras
                                                                                    vitae pulvinar velit, <span
                                                                                            style="color: #000000"><span
                                                                                                style="text-decoration: underline">vitae elementum risus</span>.</span>
                                                                                    Nullam nulla arcu, gravida
                                                                                    sed libero sit amet,
                                                                                    facilisis tincidunt quam.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="edgtf-showcase-item-holder">
                                                                    <div class="edgtf-showcase-icon">

    <span class="edgtf-icon-shortcode circle ">

        <span aria-hidden="true" class="edgtf-icon-font-elegant icon_search-2 edgtf-icon-element" style=""></span>
            </span>

                                                                    </div>
                                                                    <div class="edgtf-showcase-content">
                                                                        <div class="edgtf-showcase-content-table">
                                                                            <div class="edgtf-showcase-content-cell">

                                                                                <p class="edgtf-section-subtitle"
                                                                                   style="text-align:center">
                                                                                    fully responsive </p><h4>
                                                                                    Choose an Icon Pack</h4>
                                                                                <div class="edgtf-showcase-content-inner">
                                                                                    Alienum phaedrum torquatos
                                                                                    nec eu, vis detraxit
                                                                                    periculis ex, nihil
                                                                                    expetendis in mei. <span
                                                                                            style="text-decoration: underline"><span
                                                                                                style="color: #000000;text-decoration: underline">Mei an pericula euripidis</span></span>,
                                                                                    hinc partem ei est. Eos ei
                                                                                    nisl graecis, vix aperiri
                                                                                    consequat an.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="edgtf-showcase-item-holder">
                                                                    <div class="edgtf-showcase-icon">

    <span class="edgtf-icon-shortcode circle ">

        <span aria-hidden="true" class="edgtf-icon-font-elegant icon_datareport edgtf-icon-element" style=""></span>
            </span>

                                                                    </div>
                                                                    <div class="edgtf-showcase-content">
                                                                        <div class="edgtf-showcase-content-table">
                                                                            <div class="edgtf-showcase-content-cell">

                                                                                <p class="edgtf-section-subtitle"
                                                                                   style="text-align:center">
                                                                                    inventive infographics</p>
                                                                                <h4>creative elements</h4>
                                                                                <div class="edgtf-showcase-content-inner">
                                                                                    Integer tincidunt diam urna,
                                                                                    vitae dignissim tellus
                                                                                    imperdiet ut. Nunc nec porta
                                                                                    magna. Pellentesque
                                                                                    facilisis ante vel dolor
                                                                                    posuere, id sagittis eros
                                                                                    laoreet. Sed a lacinia
                                                                                    justo.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="edgtf-showcase-item-holder">
                                                                    <div class="edgtf-showcase-icon">

    <span class="edgtf-icon-shortcode circle ">

        <span aria-hidden="true" class="edgtf-icon-font-elegant icon_mug edgtf-icon-element" style=""></span>
            </span>

                                                                    </div>
                                                                    <div class="edgtf-showcase-content">
                                                                        <div class="edgtf-showcase-content-table">
                                                                            <div class="edgtf-showcase-content-cell">

                                                                                <p class="edgtf-section-subtitle"
                                                                                   style="text-align:center">
                                                                                    countless options</p><h4>
                                                                                    tons of shortcodes</h4>
                                                                                <div class="edgtf-showcase-content-inner">
                                                                                    Alienum phaedrum torquatos
                                                                                    nec eu, vis detraxit
                                                                                    periculis ex, nihil
                                                                                    expetendis in mei. <span
                                                                                            style="text-decoration: underline"><span
                                                                                                style="color: #000000;text-decoration: underline">Mei an pericula euripidis</span></span>,
                                                                                    hinc partem ei est. Eos ei
                                                                                    nisl graecis, vix aperiri
                                                                                    consequat an.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="edgtf-showcase-item-holder">
                                                                    <div class="edgtf-showcase-icon">

    <span class="edgtf-icon-shortcode circle ">

        <span aria-hidden="true" class="edgtf-icon-font-elegant icon_chat_alt edgtf-icon-element" style=""></span>
            </span>

                                                                    </div>
                                                                    <div class="edgtf-showcase-content">
                                                                        <div class="edgtf-showcase-content-table">
                                                                            <div class="edgtf-showcase-content-cell">

                                                                                <p class="edgtf-section-subtitle"
                                                                                   style="text-align:center">
                                                                                    easy import</p><h4>loads of
                                                                                    layouts</h4>
                                                                                <div class="edgtf-showcase-content-inner">
                                                                                    . Morbi vel luctus dui.
                                                                                    Maecenas faucibus dignissim
                                                                                    ante, et sollicitudin eros
                                                                                    rutrum viverra. Sed viverra
                                                                                    leo eget aliquam ultricies.
                                                                                    Lorem ipsum dolor sit amet,
                                                                                    consectetur adipiscing elit.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="edgtf-int-icon-circle"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid edgtf-section edgtf-content-aligment-left" style="">
                    <div class="clearfix edgtf-full-section-inner">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="edgtf-elements-holder edgtf-two-columns edgtf-responsive-mode-1024">
                                        <div class="edgtf-elements-holder-item edgtf-horizontal-alignment-right"
                                             style="background-image: url(http://dorian.edge-themes.com/wp-content/uploads/2016/03/home-7-holder-image.jpg)">
                                            <div class="edgtf-elements-holder-item-inner">
                                                <div class="edgtf-elements-holder-item-content edgtf-elements-holder-custom-858167"
                                                     style="padding: 12.7% 12.4% 13.7% 32.5%">
                                                    <style type="text/css"
                                                           data-type="edgtf-elements-custom-padding" scoped>

                                                        @media only screen and (min-width: 1280px) and (max-width: 1439px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-858167 {
                                                                padding: !important;
                                                            }
                                                        }

                                                        @media only screen and (min-width: 1024px) and (max-width: 1280px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-858167 {
                                                                padding: 9% 11% 10% 17% !important;
                                                            }
                                                        }

                                                        @media only screen and (min-width: 768px) and (max-width: 1024px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-858167 {
                                                                padding: 7% 11% 7% 29% !important;
                                                            }
                                                        }

                                                        @media only screen and (min-width: 600px) and (max-width: 768px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-858167 {
                                                                padding: 7% 3% 7% 8% !important;
                                                            }
                                                        }

                                                        @media only screen and (min-width: 480px) and (max-width: 600px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-858167 {
                                                                padding: 7% 4% 7% 10% !important;
                                                            }
                                                        }

                                                        @media only screen and (max-width: 480px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-858167 {
                                                                padding: 20% 9% 20% 9% !important;
                                                            }
                                                        }
                                                    </style>

                                                    <p class="edgtf-section-subtitle"
                                                       style="text-align:right;color:#ffffff">
                                                        Our Office</p>
                                                    <div class="vc_empty_space" style="height: 9px"><span
                                                                class="vc_empty_space_inner"></span></div>

                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <h2><span
                                                                        style="color: #ffffff;">Annie Bullock</span>
                                                            </h2>

                                                        </div>
                                                    </div>
                                                    <div class="vc_empty_space" style="height: 26px"><span
                                                                class="vc_empty_space_inner"></span></div>

                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <p>Alienum phaedrum torquatos nec eu, vis detraxit
                                                                periculis ex, nihil expetendis in mei. Mei an
                                                                pericula euripidis, hinc partem ei est. Eos ei
                                                                nisl graecis, vix aperiri consequat an. Eius
                                                                lorem tincidunt vix at, vel pertinax sensibus
                                                                id, error epicurei mea et. Mea facilisis
                                                                urbanitas moderatius id. Vis ei rationibus
                                                                definiebas, eu</p>

                                                        </div>
                                                    </div>
                                                    <div class="vc_empty_space" style="height: 30px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                    <a href="#" target="_self"
                                                       class="edgtf-btn edgtf-btn-medium edgtf-btn-solid-light edgtf-btn-custom-hover-bg edgtf-btn-custom-border-hover edgtf-btn-custom-hover-color"
                                                       data-hover-bg-color="#e2e2e2" data-hover-color="#000000"
                                                       data-hover-border-color="#e2e2e2">
                                                        <span class="edgtf-btn-text">view more</span></a></div>
                                            </div>
                                        </div>
                                        <div class="edgtf-elements-holder-item "
                                             style="background-image: url(http://dorian.edge-themes.com/wp-content/uploads/2016/03/home-7-holder-image-2.jpg)">
                                            <div class="edgtf-elements-holder-item-inner">
                                                <div class="edgtf-elements-holder-item-content edgtf-elements-holder-custom-420077"
                                                     style="padding: 0% 0% 0% 0% ">
                                                    <div class="vc_empty_space" style="height: 324px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid edgtf-section vc_custom_1460126155283 edgtf-content-aligment-center edgtf-grid-section"
                     style="">
                    <div class="clearfix edgtf-section-inner">
                        <div class="edgtf-section-inner-margin clearfix">
                            <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-6 vc_col-xs-6">
                                <div class="vc_column-inner vc_custom_1460365157915">
                                    <div class="wpb_wrapper">
                                        <div class="edgtf-counter-holder ">
                                            <div class="edgtf-counter-holder-inner">
                                                <div class="edgtf-counter-number-holder">
			<span class="edgtf-counter zero" style="color: #b6b6b6">
				204			</span>
                                                </div>
                                                <h6 class="edgtf-counter-title" style="color: #ffffff">
                                                    Completed Designs </h6>
                                            </div>

                                        </div>
                                        <div class="vc_empty_space" style="height: 40px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-6 vc_col-xs-6">
                                <div class="vc_column-inner vc_custom_1460365166009">
                                    <div class="wpb_wrapper">
                                        <div class="edgtf-counter-holder ">
                                            <div class="edgtf-counter-holder-inner">
                                                <div class="edgtf-counter-number-holder">
			<span class="edgtf-counter zero" style="color: #b6b6b6">
				321			</span>
                                                </div>
                                                <h6 class="edgtf-counter-title" style="color: #ffffff">
                                                    Current Projects </h6>
                                            </div>

                                        </div>
                                        <div class="vc_empty_space" style="height: 40px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-6 vc_col-xs-6">
                                <div class="vc_column-inner vc_custom_1460365171889">
                                    <div class="wpb_wrapper">
                                        <div class="edgtf-counter-holder ">
                                            <div class="edgtf-counter-holder-inner">
                                                <div class="edgtf-counter-number-holder">
			<span class="edgtf-counter zero" style="color: #b6b6b6">
				985			</span>
                                                </div>
                                                <h6 class="edgtf-counter-title" style="color: #ffffff">
                                                    Satisfied Clients </h6>
                                            </div>

                                        </div>
                                        <div class="vc_empty_space" style="height: 40px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-6 vc_col-xs-6">
                                <div class="vc_column-inner vc_custom_1460365178457">
                                    <div class="wpb_wrapper">
                                        <div class="edgtf-counter-holder ">
                                            <div class="edgtf-counter-holder-inner">
                                                <div class="edgtf-counter-number-holder">
			<span class="edgtf-counter zero" style="color: #b6b6b6">
				657			</span>
                                                </div>
                                                <h6 class="edgtf-counter-title" style="color: #ffffff">
                                                    Created Features </h6>
                                            </div>

                                        </div>
                                        <div class="vc_empty_space" style="height: 40px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid edgtf-section vc_custom_1458310608247 edgtf-content-aligment-left edgtf-grid-section"
                     style="">
                    <div class="clearfix edgtf-section-inner">
                        <div class="edgtf-section-inner-margin clearfix">
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="edgtf-iwt clearfix edgtf-iwt-icon-left edgtf-iwt-icon-tiny">
                                            <div class="edgtf-iwt-icon-holder">

    <span class="edgtf-icon-shortcode normal" data-hover-color="#313131" data-color="rgba(27,1,1,0.4)">


            </span>

                                            </div>
                                            <div class="edgtf-iwt-content-holder">
                                                <div class="edgtf-iwt-title-holder">
                                                    <h5>Development</h5>
                                                </div>
                                                <div class="edgtf-iwt-text-holder">
                                                    <p>Alienum phaedrum torquatos nec eu, vis detraxit periculis
                                                        ex, nihil expetendis in mei. Mei an pericula euripidis,
                                                        hinc partem ei est. Eos ei nisl graecis, vix </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 32px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                        <div class="edgtf-iwt clearfix edgtf-iwt-icon-left edgtf-iwt-icon-tiny">
                                            <div class="edgtf-iwt-icon-holder">

    <span class="edgtf-icon-shortcode normal" data-hover-color="#313131" data-color="rgba(27,1,1,0.4)">


            </span>

                                            </div>
                                            <div class="edgtf-iwt-content-holder">
                                                <div class="edgtf-iwt-title-holder">
                                                    <h5>Retina Ready</h5>
                                                </div>
                                                <div class="edgtf-iwt-text-holder">
                                                    <p>Alienum phaedrum torquatos nec eu, vis detraxit periculis
                                                        ex, nihil expetendis in mei. Mei an pericula euripidis,
                                                        hinc partem ei est. Eos ei nisl graecis, vix </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 40px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="edgtf-iwt clearfix edgtf-iwt-icon-left edgtf-iwt-icon-tiny">
                                            <div class="edgtf-iwt-icon-holder">

    <span class="edgtf-icon-shortcode normal" data-hover-color="#313131" data-color="rgba(27,1,1,0.4)">


            </span>

                                            </div>
                                            <div class="edgtf-iwt-content-holder">
                                                <div class="edgtf-iwt-title-holder">
                                                    <h5>Creating a Strategy</h5>
                                                </div>
                                                <div class="edgtf-iwt-text-holder">
                                                    <p>Alienum phaedrum torquatos nec eu, vis detraxit periculis
                                                        ex, nihil expetendis in mei. Mei an pericula euripidis,
                                                        hinc partem ei est. Eos ei nisl graecis, vix </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 32px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                        <div class="edgtf-iwt clearfix edgtf-iwt-icon-left edgtf-iwt-icon-tiny">
                                            <div class="edgtf-iwt-icon-holder">

    <span class="edgtf-icon-shortcode normal" data-hover-color="#313131" data-color="rgba(27,1,1,0.4)">


            </span>

                                            </div>
                                            <div class="edgtf-iwt-content-holder">
                                                <div class="edgtf-iwt-title-holder">
                                                    <h5>New Shortcodes</h5>
                                                </div>
                                                <div class="edgtf-iwt-text-holder">
                                                    <p>Alienum phaedrum torquatos nec eu, vis detraxit periculis
                                                        ex, nihil expetendis in mei. Mei an pericula euripidis,
                                                        hinc partem ei est. Eos ei nisl graecis, vix </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 40px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="edgtf-iwt clearfix edgtf-iwt-icon-left edgtf-iwt-icon-tiny">
                                            <div class="edgtf-iwt-icon-holder">

    <span class="edgtf-icon-shortcode normal" data-hover-color="#313131" data-color="rgba(27,1,1,0.4)">


            </span>

                                            </div>
                                            <div class="edgtf-iwt-content-holder">
                                                <div class="edgtf-iwt-title-holder">
                                                    <h5>Revolution Slider</h5>
                                                </div>
                                                <div class="edgtf-iwt-text-holder">
                                                    <p>Alienum phaedrum torquatos nec eu, vis detraxit periculis
                                                        ex, nihil expetendis in mei. Mei an pericula euripidis,
                                                        hinc partem ei est. Eos ei nisl graecis, vix </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 32px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                        <div class="edgtf-iwt clearfix edgtf-iwt-icon-left edgtf-iwt-icon-tiny">
                                            <div class="edgtf-iwt-icon-holder">

    <span class="edgtf-icon-shortcode normal" data-hover-color="#313131" data-color="rgba(27,1,1,0.4)">


            </span>

                                            </div>
                                            <div class="edgtf-iwt-content-holder">
                                                <div class="edgtf-iwt-title-holder">
                                                    <h5>About Us</h5>
                                                </div>
                                                <div class="edgtf-iwt-text-holder">
                                                    <p>Alienum phaedrum torquatos nec eu, vis detraxit periculis
                                                        ex, nihil expetendis in mei. Mei an pericula euripidis,
                                                        hinc partem ei est. Eos ei nisl graecis, vix </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 40px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid edgtf-section edgtf-content-aligment-left edgtf-grid-section"
                     style="">
                    <div class="clearfix edgtf-section-inner">
                        <div class="edgtf-section-inner-margin clearfix">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="edgtf-separator-holder clearfix  edgtf-separator-center edgtf-separator-full-width">
                                            <div class="edgtf-separator"
                                                 style="border-color: rgba(191,191,191,0.79);border-bottom-width: 1px;margin-top: 47px;margin-bottom: 108px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid edgtf-section vc_custom_1458819742074 edgtf-content-aligment-left edgtf-grid-section"
                     style="">
                    <div class="clearfix edgtf-section-inner">
                        <div class="edgtf-section-inner-margin clearfix">
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
                                <div class="vc_column-inner vc_custom_1458215457338">
                                    <div class="wpb_wrapper">
                                        <p class="edgtf-section-subtitle">
                                            Retina Ready</p>
                                        <div class="vc_empty_space" style="height: 10px"><span
                                                    class="vc_empty_space_inner"></span></div>

                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <h2>Headline Skills</h2>

                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 23px"><span
                                                    class="vc_empty_space_inner"></span></div>

                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>Alienum phaedrum torquatos nec eu, vis detraxit periculis ex,
                                                    nihil expetendis in mei. Mei an pericula euripidis, hinc
                                                    partem ei est. Eos ei nisl graecis, vix aperiri consequat
                                                    an. Eius lorem tincidunt vix at, vel pertinax sensibus id,
                                                    error epicurei mea et. Mea facilisis urbanitas moderatius
                                                    id. Vis ei rationibus definiebas, eu qui purto zril
                                                    laoreet.</p>

                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 23px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="vc_empty_space" style="height: 42px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                        <div class="edgtf-progress-bar">
                                            <h6 class="edgtf-progress-title-holder clearfix">
                                                <span class="edgtf-progress-title">Design</span>
                                                <span class="edgtf-progress-number-wrapper edgtf-floating ">
			<span class="edgtf-progress-number">
				<span class="edgtf-percent">0</span>
			</span>
		</span>
                                            </h6>
                                            <div class="edgtf-progress-content-outer">
                                                <div data-percentage=85 class="edgtf-progress-content"></div>
                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 14px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                        <div class="edgtf-progress-bar">
                                            <h6 class="edgtf-progress-title-holder clearfix">
                                                <span class="edgtf-progress-title">Development</span>
                                                <span class="edgtf-progress-number-wrapper edgtf-floating ">
			<span class="edgtf-progress-number">
				<span class="edgtf-percent">0</span>
			</span>
		</span>
                                            </h6>
                                            <div class="edgtf-progress-content-outer">
                                                <div data-percentage=76 class="edgtf-progress-content"></div>
                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 14px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                        <div class="edgtf-progress-bar">
                                            <h6 class="edgtf-progress-title-holder clearfix">
                                                <span class="edgtf-progress-title">Strategy</span>
                                                <span class="edgtf-progress-number-wrapper edgtf-floating ">
			<span class="edgtf-progress-number">
				<span class="edgtf-percent">0</span>
			</span>
		</span>
                                            </h6>
                                            <div class="edgtf-progress-content-outer">
                                                <div data-percentage=91 class="edgtf-progress-content"></div>
                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 40px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-edgtf-parallax-speed="1"
                     class="vc_row wpb_row vc_row-fluid edgtf-section vc_custom_1458909829701 edgtf-content-aligment-left edgtf-parallax-section-holder edgtf-parallax-section-holder-touch-disabled edgtf-grid-section"
                     style="background-image:url(http://dorian.edge-themes.com/wp-content/uploads/2016/03/home-7-testimonials-parallax.jpg);">
                    <div class="clearfix edgtf-section-inner">
                        <div class="edgtf-section-inner-margin clearfix">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="edgtf-testimonials-holder clearfix">
                                            <div class="edgtf-slick-slider-navigation-style edgtf-testimonials edgtf-testimonials-type-carousel edgtf-testimonials-dark"
                                                 data-arrows-navigation="false">
                                                <div class="edgtf-testimonial-content edgtf-testimonials3608">
                                                    <div class="edgtf-testimonial-content-inner">
                                                        <div class="edgtf-testimonial-text-holder">
                                                            <div class="edgtf-testimonial-text-inner">
                                                                <p class="edgtf-testimonial-text">’’Tellus elit
                                                                    posuere aenean arcu parturient at vestibulum
                                                                    dis. Dapibus sapien donec ultrices ante
                                                                    pellentesque quam aliquet lacus. Ultrices
                                                                    dolor integer nunc erat nunc. Quam duis leo
                                                                    justo duis mauris. Mattis pharetra
                                                                    elementum.’’</p>
                                                            </div>
                                                            <span class="edgtf-testimonial-arrow"></span>
                                                        </div>
                                                        <div class="edgtf-testimonial-carousel-bottom">
                                                            <div class="edgtf-testimonial-image-holder">
                                                                <img width="82" height="82"
                                                                     src="http://dorian.edge-themes.com/wp-content/uploads/2016/03/testimonials-image-3.png"
                                                                     class="attachment-3608 size-3608 wp-post-image"
                                                                     alt="p"/></div>
                                                            <div class="edgtf-testimonial-author">
                                                                <h4 class="edgtf-testimonial-author-text">
                                                                    Vivian Ann Murray </h4>
                                                                <span class="edgtf-testimonials-job">Manager</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="edgtf-testimonial-content edgtf-testimonials3607">
                                                    <div class="edgtf-testimonial-content-inner">
                                                        <div class="edgtf-testimonial-text-holder">
                                                            <div class="edgtf-testimonial-text-inner">
                                                                <p class="edgtf-testimonial-text">’’Odio
                                                                    vestibulum nulla augue eget et. Pellentesque
                                                                    orci et. Eget nam purus. Vehicula lacus
                                                                    orci. Nam saepe curabitur sit commodo
                                                                    libero. Id dui viverra. Nulla aliquet
                                                                    pellentesque. Eros semper erat venenatis
                                                                    risus enim. Eget nunc vivamus.’’</p>
                                                            </div>
                                                            <span class="edgtf-testimonial-arrow"></span>
                                                        </div>
                                                        <div class="edgtf-testimonial-carousel-bottom">
                                                            <div class="edgtf-testimonial-image-holder">
                                                                <img width="82" height="82"
                                                                     src="http://dorian.edge-themes.com/wp-content/uploads/2016/03/testimonials-image-2.png"
                                                                     class="attachment-3607 size-3607 wp-post-image"
                                                                     alt="p"/></div>
                                                            <div class="edgtf-testimonial-author">
                                                                <h4 class="edgtf-testimonial-author-text">
                                                                    Matthew Carroll </h4>
                                                                <span class="edgtf-testimonials-job">Designer</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="edgtf-testimonial-content edgtf-testimonials3605">
                                                    <div class="edgtf-testimonial-content-inner">
                                                        <div class="edgtf-testimonial-text-holder">
                                                            <div class="edgtf-testimonial-text-inner">
                                                                <p class="edgtf-testimonial-text">’’Ipsum lorem
                                                                    ad sea, in reque bonorum definiebas mei. Ius
                                                                    causae conclusionemque in. Sea ex nemore
                                                                    eirmod delicatissimi, bonorum disputationi
                                                                    pri cu, ad usu nobis omnes. No ius labore
                                                                    sanctus. Mea unum zril te’’</p>
                                                            </div>
                                                            <span class="edgtf-testimonial-arrow"></span>
                                                        </div>
                                                        <div class="edgtf-testimonial-carousel-bottom">
                                                            <div class="edgtf-testimonial-image-holder">
                                                                <img width="82" height="82"
                                                                     src="http://dorian.edge-themes.com/wp-content/uploads/2016/03/testimonials-image-1.png"
                                                                     class="attachment-3605 size-3605 wp-post-image"
                                                                     alt="p"/></div>
                                                            <div class="edgtf-testimonial-author">
                                                                <h4 class="edgtf-testimonial-author-text">
                                                                    Daniel Goldenberg </h4>
                                                                <span class="edgtf-testimonials-job">Founder </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="edgtf-testimonial-content edgtf-testimonials373">
                                                    <div class="edgtf-testimonial-content-inner">
                                                        <div class="edgtf-testimonial-text-holder">
                                                            <div class="edgtf-testimonial-text-inner">
                                                                <p class="edgtf-testimonial-text">‘’Nec detraxit
                                                                    periculis ex, nihil expetendis in mei. Mei
                                                                    an pericula euripidis, hinc partem ei est.
                                                                    Alienum phaedrum torquatos.’’</p>
                                                            </div>
                                                            <span class="edgtf-testimonial-arrow"></span>
                                                        </div>
                                                        <div class="edgtf-testimonial-carousel-bottom">
                                                            <div class="edgtf-testimonial-image-holder">
                                                                <img width="82" height="82"
                                                                     src="http://dorian.edge-themes.com/wp-content/uploads/2016/03/testimonials-image-1.png"
                                                                     class="attachment-373 size-373 wp-post-image"
                                                                     alt="p"/></div>
                                                            <div class="edgtf-testimonial-author">
                                                                <h4 class="edgtf-testimonial-author-text">
                                                                    Daniel Goldenberg </h4>
                                                                <span class="edgtf-testimonials-job">Founder </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- close div.content_inner -->
</div>  <!-- close div.content -->
