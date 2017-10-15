<?php
/**
 * Created by PhpStorm.
 * User: VvV
 * Date: 25.09.2017
 * Time: 16:15
 */

namespace app\classes;


use app\models\Content;
use yii;
use yii\base\Widget;

class Slider extends Widget
{
   public static function sliderWidget($content){

       ?>
       <div class="edgtf-slider">
           <div class="edgtf-slider-inner">
               <div id="edgtf-classic-home"
                    class="carousel slide edgtf-slide  edgtf-responsive-height edgtf-has-height edgtf-auto-start    "
                    data-slide_animation_timeout="6000" data-height='760' data-parallax="yes"
                    style="height: 760px;">
                   <div class="edgtf-slider-preloader">
                       <div class="edgtf-st-loader">
                           <div class="edgtf-st-loader1">
                               <div class="circle_side"></div>
                           </div>
                       </div>
                   </div>
                   <div class="carousel-inner " style="height: 100%;" data-start="transform: translateY(0px);"
                        data-1440="transform: translateY(-500px);">
                       <?php
                       $ar = str_replace("mini", "full", $content->image); //
                       $ar = explode("</p>",$ar,3); //делим на параграфы

                       foreach($ar as $zn)
                       {
                           $zn = str_replace("<p>", "", $zn); //удаляем <p>
                           preg_match_all('#<img.*src="(.*)".*>#isU', $zn, $image);
                           $zn = explode("<br />",$zn); //делим по <br />
                           ?>
                           <div class="item  " style="height: 760px;">
                               <div class="edgtf-image"
                                    style="background-image:url(<?= $image[1][0] ?>)"
                                    data-original-image=<?= $image[1][0] ?>>
                                   <img src="<?= $image[1][0] ?>"
                                        alt="Classic Home Slide 2"></div>
                               <div class="edgtf-slider-elements-container"
                                    style="width: 100%; box-sizing: border-box; height: 100%; padding-top: 125px;"
                                    data-0=" opacity: 1; top: 50%;" data-300=" opacity: 0; top: 25%;">
                                   <div class="edgtf-slider-elements-container-inner" style="height: 100%;">
                                       <div class="edgtf-slider-elements-holder-frame edgtf-grid"
                                            style="top: 50%; left: 50%; -webkit-transform: translate3d(-50%,-50%, 0); transform: translate3d(-50%,-50%, 0);"
                                            data-default-width="1920">
                                           <div class="edgtf-el edgtf-slide-element edgtf-slide-element-animation-from_right edgtf-slide-element-text edgtf-slide-element-text-normal edgtf-slide-element-responsive-text"
                                                data-default-margin-bottom="9" data-width="100"
                                                data-default-font-size="20" data-default-line-height="27"
                                                data-default-letter-spacing="0"
                                                data-resp-scale="{&quot;mobile&quot;:&quot;0.7&quot;,&quot;tabletp&quot;:&quot;0.7&quot;,&quot;tabletl&quot;:0.7,&quot;laptop&quot;:0.8,&quot;desktop&quot;:1}"
                                                style="position: static; text-align: left;margin-bottom: 9px;width: 100%;color: #ffffff;font-size: 20px;line-height: 27px;letter-spacing: 0px;font-family: Georgia;font-style: italic;font-weight: 500;text-transform: capitalize;border-width: 0px;width: 100%;height: auto;">
                                               <div class="edgtf-slide-element-inner"
                                                    style="-webkit-animation-delay: 500ms; animation-delay: 500ms;">
                                                   <span><?php if(isset($zn[1])){ echo$zn[1];}?>
                                                       <?=\app\classes\Admin::admin($content)?>
                                                   </span></div>
                                           </div>
                                           <div class="edgtf-el edgtf-slide-element edgtf-slide-element-animation-from_right edgtf-slide-element-text edgtf-slide-element-text-normal edgtf-slide-element-responsive-text"
                                                data-default-margin-bottom="18" data-default-margin-left="-3"
                                                data-width="100" data-default-font-size="60"
                                                data-default-line-height="60" data-default-letter-spacing="4"
                                                data-resp-scale="{&quot;mobile&quot;:0.5,&quot;tabletp&quot;:0.6,&quot;tabletl&quot;:0.7,&quot;laptop&quot;:0.8,&quot;desktop&quot;:1}"
                                                style="position: static; text-align: left;margin-bottom: 18px;margin-left: -3px;width: 100%;color: #ffffff;font-size: 60px;line-height: 60px;letter-spacing: 4px;/*font-family: Raleway;*/font-style: normal;font-weight: 700;text-transform: uppercase;border-width: 0px;width: 100%;height: auto;">
                                               <div class="edgtf-slide-element-inner"
                                                    style="-webkit-animation-delay: 700ms; animation-delay: 700ms;">
                                                   <span><?php if(isset($zn[2])){ echo$zn[2];}?></span></div>
                                           </div>
                                           <div class="edgtf-el edgtf-slide-element edgtf-slide-element-animation-from_right edgtf-slide-element-text edgtf-slide-element-text-normal edgtf-slide-element-responsive-text"
                                                data-width="100" data-default-font-size="18"
                                                data-default-line-height="35" data-default-letter-spacing="0"
                                                data-resp-scale="{&quot;mobile&quot;:&quot;0.6&quot;,&quot;tabletp&quot;:&quot;0.8&quot;,&quot;tabletl&quot;:&quot;0.8&quot;,&quot;laptop&quot;:0.8,&quot;desktop&quot;:1}"
                                                style="position: static; text-align: left;width: 100%;color: #ffffff;font-size: 18px;line-height: 35px;letter-spacing: 0px;/*font-family: Raleway;*/font-style: normal;font-weight: 300;text-transform: none;border-width: 0px;width: 100%;height: auto;">
                                               <div class="edgtf-slide-element-inner"
                                                    style="-webkit-animation-delay: 900ms; animation-delay: 900ms;">
                                                   <span><?php if(isset($zn[3])){ echo$zn[3];}?> </span>
                                               </div>
                                           </div>
                                           <div class="edgtf-el edgtf-slide-element edgtf-slide-element-animation-from_right edgtf-slide-element-text edgtf-slide-element-text-normal edgtf-slide-element-responsive-text"
                                                data-default-margin-bottom="28" data-width="100"
                                                data-default-font-size="18" data-default-line-height="35"
                                                data-default-letter-spacing="0"
                                                data-resp-scale="{&quot;mobile&quot;:&quot;0.6&quot;,&quot;tabletp&quot;:&quot;0.8&quot;,&quot;tabletl&quot;:&quot;0.8&quot;,&quot;laptop&quot;:0.8,&quot;desktop&quot;:1}"
                                                style="position: static; text-align: left;margin-bottom: 28px;width: 100%;color: #ffffff;font-size: 18px;line-height: 35px;letter-spacing: 0px;/*font-family: Raleway;*/font-style: normal;font-weight: 300;text-transform: none;border-width: 0px;width: 100%;height: auto;">
                                               <div class="edgtf-slide-element-inner"
                                                    style="-webkit-animation-delay: 1100ms; animation-delay: 1100ms;">
                                                   <span><?php if(isset($zn[4])){ echo$zn[4];}?></span>
                                               </div>
                                           </div>
                                           <div class="edgtf-el edgtf-slide-element edgtf-slide-element-animation-from_right edgtf-slide-element-button edgtf-slide-element-responsive-button"
                                                data-default-font-size="11"
                                                data-resp-scale="{&quot;mobile&quot;:&quot;0.8&quot;,&quot;tabletp&quot;:&quot;0.8&quot;,&quot;tabletl&quot;:&quot;1&quot;,&quot;laptop&quot;:&quot;1&quot;,&quot;desktop&quot;:1}"
                                                style="position: static; text-align: left;">
                                               <div class="edgtf-slide-element-inner"
                                                    style="-webkit-animation-delay: 1300ms; animation-delay: 1300ms;">
                                                   <a href="<?php if(isset($zn[5])){ echo$zn[5];}?>"
                                                      target="_blank"
                                                      style="color: #000000;background-color: #ffffff;border-color: #ffffff;font-size: 11px;font-weight: 600"
                                                      class="edgtf-btn edgtf-btn-medium edgtf-btn-solid edgtf-btn-custom-hover-bg edgtf-btn-custom-border-hover edgtf-btn-custom-hover-color"
                                                      data-hover-bg-color="#e2e2e2" data-hover-color="#000000"
                                                      data-hover-border-color="#e2e2e2"> <span
                                                               class="edgtf-btn-text">Подробнее</span></a></div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <?php
                       }
                       ?>

                   </div>
                   <ol class="carousel-indicators" data-start="opacity: 1;" data-300="opacity:0;">
                       <li data-target="#edgtf-classic-home" data-slide-to="0" class="active"><span></span>
                       </li>
                       <li data-target="#edgtf-classic-home" data-slide-to="1"><span></span></li>
                       <li data-target="#edgtf-classic-home" data-slide-to="2"><span></span></li>
                   </ol>
                   <div class="edgtf-controls-holder edgtf-navigation-position-standard"><a
                               class="left carousel-control" style="padding-top: 125px;" href="#edgtf-classic-home"
                               data-slide="prev" data-start="opacity: 1;" data-300="opacity:0;"><span
                                   class="edgtf-prev-nav"><span class="arrow_left"></span></span></a>
                       <a
                               class="right carousel-control" style="padding-top: 125px;"
                               href="#edgtf-classic-home" data-slide="next" data-start="opacity: 1;"
                               data-300="opacity:0;"><span class="edgtf-next-nav"><span class="arrow_right"></span></span></a>
                   </div>

               </div>
           </div>

       </div>


       <?

   }
}