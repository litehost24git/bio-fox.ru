<?php
/**
 * Created by PhpStorm.
 * User: VvV
 * Date: 10.10.2017
 * Time: 14:16
 */

namespace app\classes;
use yii;

class ContentFunction
{
    static public function image_top($content)
    {
        $ar = str_replace("mini", "full", $content->image);
        preg_match_all('#<img.*src="(.*)".*>#isU', $ar, $image);
        $zn = explode("<br />",$ar); //делим по <br />
        ?>
        <div class="edgtf-title edgtf-standard-type edgtf-has-background edgtf-content-center-alignment edgtf-title-medium-text-size edgtf-animation-no edgtf-title-image-not-responsive edgtf-title-without-border edgtf-title-with-gradient" style="height:523px;background-image:url(<?= $image[1][0] ?>);" data-height="523" data-background-width="&quot;1920&quot;">
            <div class="edgtf-title-image"><img src="<?= $image[1][0] ?>" alt="&nbsp;"> </div>
            <div class="edgtf-title-holder">
                <div class="edgtf-container clearfix">
                    <div class="edgtf-container-inner">
                        <div class="edgtf-title-subtitle-holder" style="">
                            <div class="edgtf-title-subtitle-holder-inner">
                                <span class="edgtf-subtitle"><span><?php if(isset($zn[1])){ echo$zn[1];}?></span></span>
                                <h1 style="color:#ffffff;"><span><?php if(isset($zn[2])){ echo$zn[2];}?>
                                        <?=\app\classes\Admin::admin($content)?></span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    static public function about_text($content)
    {
        preg_match_all('#<img.*src="(.*)".*>#isU', $content->image, $image);

        if($content->id-1 & 1)
        {
            ?>
            <div class="vc_row wpb_row vc_row-fluid edgtf-section vc_custom_1462960676454 edgtf-content-aligment-left edgtf-grid-section"
                 style="background-color: #f7f7f7 !important;">
                <div class="clearfix edgtf-section-inner">
                    <div class="edgtf-section-inner-margin clearfix">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="edgtf-elements-holder edgtf-two-columns edgtf-responsive-mode-1024">
                                        <div class="edgtf-elements-holder-item ">
                                            <div class="edgtf-elements-holder-item-inner">
                                                <div class="edgtf-elements-holder-item-content edgtf-elements-holder-custom-641378"
                                                     style="padding: 21.2% 0% 21% 0%">
                                                    <style type="text/css" data-type="edgtf-elements-custom-padding"
                                                           scoped="">

                                                        @media only screen and (min-width: 1280px) and (max-width: 1439px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-641378 {
                                                                padding: !important;
                                                            }
                                                        }

                                                        @media only screen and (min-width: 1024px) and (max-width: 1280px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-641378 {
                                                                padding: o !important;
                                                            }
                                                        }

                                                        @media only screen and (min-width: 768px) and (max-width: 1024px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-641378 {
                                                                padding: 16% 0 0 0 !important;
                                                            }
                                                        }

                                                        @media only screen and (min-width: 600px) and (max-width: 768px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-641378 {
                                                                padding: 16% 0 0 0 !important;
                                                            }
                                                        }

                                                        @media only screen and (min-width: 480px) and (max-width: 600px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-641378 {
                                                                padding: 21.2% 0% 0% 0% !important;
                                                            }
                                                        }

                                                        @media only screen and (max-width: 480px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-641378 {
                                                                padding: 21.2% 0% 0% 0% !important;
                                                            }
                                                        }
                                                    </style>

                                                    <div class="wpb_single_image wpb_content_element vc_align_right">

                                                        <figure class="wpb_wrapper vc_figure">
                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                <img src="<?= $image[1][0] ?>"
                                                                     class="vc_single_image-img attachment-full"
                                                                     alt="d"
                                                                     srcset="<?= $image[1][0] ?> 800w, <?= $image[1][0] ?> 300w, <?= $image[1][0] ?> 768w"
                                                                     sizes="(max-width: 800px) 100vw, 800px"
                                                                     width="800" height="589"></div>
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="edgtf-elements-holder-item ">
                                            <div class="edgtf-elements-holder-item-inner">
                                                <div class="edgtf-elements-holder-item-content edgtf-elements-holder-custom-825907"
                                                     style="padding: 11% 3% 16% 7%">
                                                    <style type="text/css" data-type="edgtf-elements-custom-padding"
                                                           scoped="">

                                                        @media only screen and (min-width: 1280px) and (max-width: 1439px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-825907 {
                                                                padding: !important;
                                                            }
                                                        }

                                                        @media only screen and (min-width: 1024px) and (max-width: 1280px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-825907 {
                                                                padding: 18% 0 20% 5% !important;
                                                            }
                                                        }

                                                        @media only screen and (min-width: 768px) and (max-width: 1024px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-825907 {
                                                                padding: 9% 0 14% 0 !important;
                                                            }
                                                        }

                                                        @media only screen and (min-width: 600px) and (max-width: 768px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-825907 {
                                                                padding: 9% 0 14% 0 !important;
                                                            }
                                                        }

                                                        @media only screen and (min-width: 480px) and (max-width: 600px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-825907 {
                                                                padding: 11% 0 21% 0 !important;
                                                            }
                                                        }

                                                        @media only screen and (max-width: 480px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-825907 {
                                                                padding: 11% 0 21% 0 !important;
                                                            }
                                                        }
                                                    </style>
                                                    <div class="vc_empty_space" style="height: 14px"><span
                                                            class="vc_empty_space_inner"></span></div>

                                                    <p class="edgtf-section-subtitle" style="text-align:left">
                                                        Creative Elements</p>
                                                    <div class="vc_empty_space" style="height: 10px"><span
                                                            class="vc_empty_space_inner"></span></div>

                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <h2><?=$content->name?></h2>

                                                        </div>
                                                    </div>
                                                    <div class="vc_empty_space" style="height: 24px"><span
                                                            class="vc_empty_space_inner"></span></div>

                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <?=$content->text?>
                                                            <?=\app\classes\Admin::admin($content)?>

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
            <?php
        }
        else
        {
            ?>
            <div class="vc_row wpb_row vc_row-fluid edgtf-section edgtf-content-aligment-left edgtf-grid-section"
                 style="">
                <div class="clearfix edgtf-section-inner">
                    <div class="edgtf-section-inner-margin clearfix">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="edgtf-elements-holder edgtf-two-columns edgtf-responsive-mode-1024">
                                        <div class="edgtf-elements-holder-item ">
                                            <div class="edgtf-elements-holder-item-inner">
                                                <div class="edgtf-elements-holder-item-content edgtf-elements-holder-custom-738315"
                                                     style="padding: 14% 3% 16% 7%">
                                                    <style type="text/css" data-type="edgtf-elements-custom-padding"
                                                           scoped="">

                                                        @media only screen and (min-width: 1280px) and (max-width: 1439px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-738315 {
                                                                padding: !important;
                                                            }
                                                        }

                                                        @media only screen and (min-width: 1024px) and (max-width: 1280px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-738315 {
                                                                padding: 18% 0 20% 5% !important;
                                                            }
                                                        }

                                                        @media only screen and (min-width: 768px) and (max-width: 1024px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-738315 {
                                                                padding: 9% 0 0% 0 !important;
                                                            }
                                                        }

                                                        @media only screen and (min-width: 600px) and (max-width: 768px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-738315 {
                                                                padding: 9% 0 0% 0 !important;
                                                            }
                                                        }

                                                        @media only screen and (min-width: 480px) and (max-width: 600px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-738315 {
                                                                padding: 11% 0 0 0 !important;
                                                            }
                                                        }

                                                        @media only screen and (max-width: 480px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-738315 {
                                                                padding: 11% 0 0 0 !important;
                                                            }
                                                        }
                                                    </style>
                                                    <div class="vc_empty_space" style="height: 45px"><span
                                                            class="vc_empty_space_inner"></span></div>

                                                    <p class="edgtf-section-subtitle" style="text-align:left">
                                                        Easy Import</p>
                                                    <div class="vc_empty_space" style="height: 10px"><span
                                                            class="vc_empty_space_inner"></span></div>

                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <h2><?=$content->name?></h2>

                                                        </div>
                                                    </div>
                                                    <div class="vc_empty_space" style="height: 24px"><span
                                                            class="vc_empty_space_inner"></span></div>

                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <?=$content->text?>
                                                            <?=\app\classes\Admin::admin($content)?>
                                                        </div>
                                                    </div>
                                                    <div class="edgtf-separator-holder clearfix  edgtf-separator-center edgtf-separator-full-width">
                                                        <div class="edgtf-separator"
                                                             style="border-color: #bfbfbf;border-bottom-width: 1px;margin-top: 42px;margin-bottom: 18px"></div>
                                                    </div>
<!--                                                    <div data-edgtf-parallax-speed="1"-->
<!--                                                         class="vc_row wpb_row vc_inner vc_row-fluid edgtf-section edgtf-content-aligment-left"-->
<!--                                                         style="">-->
<!--                                                        <div class="edgtf-full-section-inner">-->
<!--                                                            <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-4 vc_col-md-4">-->
<!--                                                                <div class="vc_column-inner ">-->
<!--                                                                    <div class="wpb_wrapper">-->
<!--                                                                        <div class="edgtf-counter-holder ">-->
<!--                                                                            <div class="edgtf-counter-holder-inner">-->
<!--                                                                                <div class="edgtf-counter-number-holder">-->
<!--                                                                                        <span class="edgtf-counter zero"-->
<!--                                                                                              style="font-size: 70px;color: #7e7e7e">24</span>-->
<!--                                                                                </div>-->
<!--                                                                                <h6 class="edgtf-counter-title"-->
<!--                                                                                    style="color: #7e7e7e">-->
<!--                                                                                    New Designs </h6>-->
<!--                                                                            </div>-->
<!---->
<!--                                                                        </div>-->
<!--                                                                        <div class="vc_empty_space"-->
<!--                                                                             style="height: 40px"><span-->
<!--                                                                                class="vc_empty_space_inner"></span>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                            <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-4 vc_col-md-4">-->
<!--                                                                <div class="vc_column-inner ">-->
<!--                                                                    <div class="wpb_wrapper">-->
<!--                                                                        <div class="edgtf-counter-holder ">-->
<!--                                                                            <div class="edgtf-counter-holder-inner">-->
<!--                                                                                <div class="edgtf-counter-number-holder">-->
<!--                                                                                        <span class="edgtf-counter zero"-->
<!--                                                                                              style="font-size: 70px;color: #7e7e7e">45</span>-->
<!--                                                                                </div>-->
<!--                                                                                <h6 class="edgtf-counter-title"-->
<!--                                                                                    style="color: #7e7e7e">-->
<!--                                                                                    Team Members </h6>-->
<!--                                                                            </div>-->
<!---->
<!--                                                                        </div>-->
<!--                                                                        <div class="vc_empty_space"-->
<!--                                                                             style="height: 40px"><span-->
<!--                                                                                class="vc_empty_space_inner"></span>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                            <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-4 vc_col-md-4">-->
<!--                                                                <div class="vc_column-inner ">-->
<!--                                                                    <div class="wpb_wrapper">-->
<!--                                                                        <div class="edgtf-counter-holder ">-->
<!--                                                                            <div class="edgtf-counter-holder-inner">-->
<!--                                                                                <div class="edgtf-counter-number-holder">-->
<!--                                                                                        <span class="edgtf-counter zero"-->
<!--                                                                                              style="font-size: 70px;color: #7e7e7e">76</span>-->
<!--                                                                                </div>-->
<!--                                                                                <h6 class="edgtf-counter-title"-->
<!--                                                                                    style="color: #7e7e7e">-->
<!--                                                                                    Current Clients </h6>-->
<!--                                                                            </div>-->
<!---->
<!--                                                                        </div>-->
<!--                                                                        <div class="vc_empty_space"-->
<!--                                                                             style="height: 40px"><span-->
<!--                                                                                class="vc_empty_space_inner"></span>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="edgtf-elements-holder-item ">
                                            <div class="edgtf-elements-holder-item-inner">
                                                <div class="edgtf-elements-holder-item-content edgtf-elements-holder-custom-370686"
                                                     style="padding: 16.5% 0% 21% 3.5%">
                                                    <style type="text/css" data-type="edgtf-elements-custom-padding"
                                                           scoped="">

                                                        @media only screen and (min-width: 1280px) and (max-width: 1439px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-370686 {
                                                                padding: !important;
                                                            }
                                                        }

                                                        @media only screen and (min-width: 1024px) and (max-width: 1280px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-370686 {
                                                                padding: 0% 0 3% 4% !important;
                                                            }
                                                        }

                                                        @media only screen and (min-width: 768px) and (max-width: 1024px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-370686 {
                                                                padding: 3% 0 14% 0 !important;
                                                            }
                                                        }

                                                        @media only screen and (min-width: 600px) and (max-width: 768px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-370686 {
                                                                padding: 3% 0 14% 0 !important;
                                                            }
                                                        }

                                                        @media only screen and (min-width: 480px) and (max-width: 600px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-370686 {
                                                                padding: 0 0% 24% 0% !important;
                                                            }
                                                        }

                                                        @media only screen and (max-width: 480px) {
                                                            .edgtf-elements-holder .edgtf-elements-holder-item-content.edgtf-elements-holder-custom-370686 {
                                                                padding: 0 0% 24% 0% !important;
                                                            }
                                                        }
                                                    </style>

                                                    <div class="wpb_single_image wpb_content_element vc_align_right">

                                                        <figure class="wpb_wrapper vc_figure">
                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                <img src="<?= $image[1][0] ?>"
                                                                     class="vc_single_image-img attachment-full"
                                                                     alt="h"
                                                                     srcset="<?= $image[1][0] ?> 800w, <?= $image[1][0] ?> 300w, <?= $image[1][0] ?> 768w"
                                                                     sizes="(max-width: 800px) 100vw, 800px"
                                                                     width="800" height="589">
                                                            </div>
                                                        </figure>
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
            <?php
        }

    }

}