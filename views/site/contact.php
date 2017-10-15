<?php


//use Yii;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use app\models\Email;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

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


//  $model1 = new Email();
//  $model1->email = 'Привет мир';
//  $model1->name = 'ТекстТекстТекстТекст';
//  $model1->save();

//  return $this->render('index');


?>
<style>

    .form-control {
        width: initial !important;
    }

    .cf7_custom_style_1 {
        color: #ffffff;
        font-size: 11px;
        height: 55px;
        /*font-family: Raleway;*/
        font-style: normal;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 2px;
        background-color: rgba(0, 0, 0, 1);
        border-color: rgba(0, 0, 0, 1);
        border-width: 0px;
        padding-left: 45px;
        padding-right: 45px;
        cursor: pointer;
    }

    .cf7_custom_style_1:hover:not([disabled]) {
        color: #ffffff;
        background-color: rgba(49, 49, 49, 1);
        border-color: rgba(49, 49, 49, 1);
    }

    .wpcf7-form-control.wpcf7-text {
        margin-bottom: 10px;
    }

    p {
        margin: 0 0 0px;
    }

    .edgtf-content-aligment-right {
        text-align: left;
    }

    .has-error .form-control {
        border-color: #a94442;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    }

    .form-control {
        margin-bottom: 20px;
        padding: 12px 18px;
        outline: 0;
        font-family: inherit;
        font-size: 21px;
        background-color: #fff;
        border: 1px solid #d9d9d9;
        color: #757575;
        margin-top: 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        vertical-align: middle;
        -webkit-appearance: none;
    }

    .height {
        height: 130px;
    }
</style>
<div class="edgtf-content" style="margin-top: -85px">
    <div class="edgtf-content-inner">
        <div class="edgtf-title edgtf-standard-type edgtf-has-background edgtf-content-center-alignment edgtf-title-medium-text-size edgtf-animation-no edgtf-title-image-not-responsive edgtf-title-without-border edgtf-title-with-gradient"
             style="height:523px;background-image:url(http://dorian.edge-themes.com/wp-content/uploads/2016/03/contact-3-title.jpg);"
             data-height="523" data-background-width="&quot;1920&quot;">
            <div class="edgtf-title-image"><img
                        src="http://dorian.edge-themes.com/wp-content/uploads/2016/03/contact-3-title.jpg" alt="&nbsp;">
            </div>
            <div class="edgtf-title-holder">
                <div class="edgtf-container clearfix">
                    <div class="edgtf-container-inner">
                        <div class="edgtf-title-subtitle-holder" style="">
                            <div class="edgtf-title-subtitle-holder-inner">
                                <span class="edgtf-subtitle"><span>Contact Form 7</span></span>
                                <h1 style="color:#ffffff;"><span>Contact Page 3</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="edgtf-full-width">
            <div class="edgtf-full-width-inner">
                <div class="vc_row wpb_row vc_row-fluid edgtf-section vc_custom_1459939615620 edgtf-content-aligment-right edgtf-grid-section"
                     style="padding-top: 132px !important;
padding-bottom: 8px !important;">
                    <div class="clearfix edgtf-section-inner">
                        <div class="edgtf-section-inner-margin clearfix">
                            <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3">
                                <?= \app\classes\TextBlock::textBlock('textBlock_7') ?>

                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3">
                                <?= \app\classes\TextBlock::textBlock('textBlock_8') ?>

                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <h4 style="text-align: left;">Обратная связь</h4>

                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 15px"><span
                                                    class="vc_empty_space_inner"></span></div>


                                        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>


                                            <div class="alert alert-success">
                                                Thank you for contacting us. We will respond to you as soon as possible.
                                            </div>

                                            <p>
                                                Note that if you turn on the Yii debugger, you should be able
                                                to view the mail message on the mail panel of the debugger.
                                                <?php if (Yii::$app->mailer->useFileTransport): ?>
                                                    Because the application is in development mode, the email is not sent but saved as
                                                    a file under
                                                    <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.Please configure the
                                                    <code>useFileTransport</code> property of the <code>mail</code>
                                                    application component to be false to enable email sending.
                                                <?php endif; ?>
                                            </p>

                                        <?php else: ?>

                                            <p>
                                                Если у вас есть вопросы, пожалуйста заполните следующую форму для связи
                                                с нами. <br/>Спасибо.<br/>
                                            </p>
                                        <?php endif; ?>

                                        <div role="form" class="wpcf7" id="wpcf7-f609-p3193-o1" dir="ltr" lang="ru-RU">
                                            <div class="screen-reader-response"></div>

                                            <?php $form = ActiveForm::begin(['id' => 'contact-form', 'class' => 'wpcf7-form cf7_custom_style_1']); ?>

                                            <?php
                                            $field = $form->field($model, 'name');
                                            $field->template = "{input}\n{hint}\n{error}";
                                            echo $field->textInput([
                                                'autofocus' => true,
                                                'class' => 'wpcf7-form-control wpcf7-text wpcf7-validates-as-required',
                                                'placeholder' => 'Имя',
                                            ])
                                            ?>

                                            <?php
                                            $field = $form->field($model, 'email');
                                            $field->template = "{input}\n{hint}\n{error}";
                                            $field->textInput([
                                                'class' => 'wpcf7-form-control wpcf7-text wpcf7-validates-as-required',
                                                'placeholder' => 'email',
                                            ])
                                            ?>
                                            <br>
                                            <?php
                                            $field = $form->field($model, 'subject');
                                            $field->template = "{input}\n{hint}\n{error}";
                                            echo $field->textInput([
                                                'class' => 'wpcf7-form-control wpcf7-text wpcf7-validates-as-required',
                                                'placeholder' => 'Тема',
                                            ])
                                            ?>
                                            <br>


                                            <?php

                                            $field = $form->field($model, 'body');
                                            $field->template = "{input}\n{hint}\n{error}";
                                            echo $field->textarea([
                                                'class' => 'wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required height',
                                                'cols' => '40',
                                                'rows' => '10',
                                                'placeholder' => 'Тело',
                                            ])
                                            ?>

                                            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                                'template' => '<div class="row"><div class="col-lg-3" style="float: left;">{image}</div>
                                                               <div class="col-lg-6" >{input}</div></div>',
                                            ]) ?>

                                            <div class="form-group">
                                                <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary wpcf7-form-control cf7_custom_style_1 ', 'name' => 'contact-button']) ?>

                                            </div>

                                            <?php ActiveForm::end(); ?>

                                        </div>
                                        <div class="vc_empty_space" style="height: 50px"><span
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
                                                 style="border-color: #cacaca;border-style: solid;border-bottom-width: 1pxpx;margin-top: 30px;margin-bottom: 82px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid edgtf-section vc_custom_1459410816028 edgtf-content-aligment-left edgtf-grid-section"
                     style="padding-bottom: 140px !important;">
                    <div class="clearfix edgtf-section-inner">
                        <div class="edgtf-section-inner-margin clearfix">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <h4 style="text-align: left;">find us on the map</h4>

                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 20px"><span
                                                    class="vc_empty_space_inner"></span></div>
                                        <div class="edgtf-google-map-holder">
                                            <div class="edgtf-google-map" id="edgtf-map-1475980"
                                                 data-addresses="[&quot;100 W 23rd St New York, NY 10011 USA&quot;,&quot;cunningham park&quot;]"
                                                 data-custom-map-style="true" data-color-overlay="#393939"
                                                 data-saturation="-100" data-lightness="0" data-zoom="12"
                                                 data-pin="http://dorian.edge-themes.com/wp-content/uploads/2016/03/pin.png"
                                                 data-unique-id="1475980" data-scroll-wheel="false" data-height="475px"
                                                 style="height: 475px; position: relative; overflow: hidden;">
                                                <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                                    <div style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"
                                                         class="gm-style">
                                                        <div style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default;"
                                                             tabindex="0">
                                                            <div style="z-index: 1; position: absolute; top: 0px; left: 0px; width: 100%;">
                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"
                                                                             aria-hidden="true">
                                                                            <div style="width: 256px; height: 256px; position: absolute; left: 493px; top: 40px;"></div>
                                                                            <div style="width: 256px; height: 256px; position: absolute; left: 749px; top: 40px;"></div>
                                                                            <div style="width: 256px; height: 256px; position: absolute; left: 493px; top: -216px;"></div>
                                                                            <div style="width: 256px; height: 256px; position: absolute; left: 493px; top: 296px;"></div>
                                                                            <div style="width: 256px; height: 256px; position: absolute; left: 749px; top: -216px;"></div>
                                                                            <div style="width: 256px; height: 256px; position: absolute; left: 749px; top: 296px;"></div>
                                                                            <div style="width: 256px; height: 256px; position: absolute; left: 237px; top: 40px;"></div>
                                                                            <div style="width: 256px; height: 256px; position: absolute; left: 1005px; top: 40px;"></div>
                                                                            <div style="width: 256px; height: 256px; position: absolute; left: 237px; top: -216px;"></div>
                                                                            <div style="width: 256px; height: 256px; position: absolute; left: 237px; top: 296px;"></div>
                                                                            <div style="width: 256px; height: 256px; position: absolute; left: 1005px; top: -216px;"></div>
                                                                            <div style="width: 256px; height: 256px; position: absolute; left: 1005px; top: 296px;"></div>
                                                                            <div style="width: 256px; height: 256px; position: absolute; left: -19px; top: 40px;"></div>
                                                                            <div style="width: 256px; height: 256px; position: absolute; left: 1261px; top: 40px;"></div>
                                                                            <div style="width: 256px; height: 256px; position: absolute; left: -19px; top: -216px;"></div>
                                                                            <div style="width: 256px; height: 256px; position: absolute; left: -19px; top: 296px;"></div>
                                                                            <div style="width: 256px; height: 256px; position: absolute; left: 1261px; top: -216px;"></div>
                                                                            <div style="width: 256px; height: 256px; position: absolute; left: 1261px; top: 296px;"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"
                                                                             aria-hidden="true">
                                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 493px; top: 40px;">
                                                                                <canvas draggable="false"
                                                                                        style="-moz-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"
                                                                                        height="256"
                                                                                        width="256"></canvas>
                                                                            </div>
                                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 749px; top: 40px;"></div>
                                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 493px; top: -216px;"></div>
                                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 493px; top: 296px;"></div>
                                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 749px; top: -216px;"></div>
                                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 749px; top: 296px;"></div>
                                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 237px; top: 40px;"></div>
                                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1005px; top: 40px;"></div>
                                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 237px; top: -216px;"></div>
                                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 237px; top: 296px;"></div>
                                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1005px; top: -216px;"></div>
                                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1005px; top: 296px;"></div>
                                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -19px; top: 40px;">
                                                                                <canvas draggable="false"
                                                                                        style="-moz-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"
                                                                                        height="256"
                                                                                        width="256"></canvas>
                                                                            </div>
                                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1261px; top: 40px;"></div>
                                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -19px; top: -216px;"></div>
                                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -19px; top: 296px;"></div>
                                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1261px; top: -216px;"></div>
                                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1261px; top: 296px;"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"
                                                                         aria-hidden="true">
                                                                        <div style="position: absolute; left: 493px; top: 40px; transition: opacity 200ms ease-out 0s;">
                                                                            <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                                                                 draggable="false" alt=""
                                                                                 src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1208!3i1539!4i256!2m3!1e0!2sm!3i393089256!3m14!2sru-RU!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5oOiMzOTM5Mzl8cC5zOi0xMDB8cC5nOjE!4e0&amp;token=16118">
                                                                        </div>
                                                                        <div style="position: absolute; left: 749px; top: 40px; transition: opacity 200ms ease-out 0s;">
                                                                            <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                                                                 draggable="false" alt=""
                                                                                 src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1209!3i1539!4i256!2m3!1e0!2sm!3i393089256!3m14!2sru-RU!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5oOiMzOTM5Mzl8cC5zOi0xMDB8cC5nOjE!4e0&amp;token=22596">
                                                                        </div>
                                                                        <div style="position: absolute; left: 493px; top: 296px; transition: opacity 200ms ease-out 0s;">
                                                                            <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                                                                 draggable="false" alt=""
                                                                                 src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1208!3i1540!4i256!2m3!1e0!2sm!3i393089268!3m14!2sru-RU!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5oOiMzOTM5Mzl8cC5zOi0xMDB8cC5nOjE!4e0&amp;token=842">
                                                                        </div>
                                                                        <div style="position: absolute; left: 749px; top: 296px; transition: opacity 200ms ease-out 0s;">
                                                                            <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                                                                 draggable="false" alt=""
                                                                                 src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1209!3i1540!4i256!2m3!1e0!2sm!3i393089256!3m14!2sru-RU!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5oOiMzOTM5Mzl8cC5zOi0xMDB8cC5nOjE!4e0&amp;token=59665">
                                                                        </div>
                                                                        <div style="position: absolute; left: 237px; top: 40px; transition: opacity 200ms ease-out 0s;">
                                                                            <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                                                                 draggable="false" alt=""
                                                                                 src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1207!3i1539!4i256!2m3!1e0!2sm!3i393089268!3m14!2sru-RU!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5oOiMzOTM5Mzl8cC5zOi0xMDB8cC5nOjE!4e0&amp;token=88366">
                                                                        </div>
                                                                        <div style="position: absolute; left: 1005px; top: 40px; transition: opacity 200ms ease-out 0s;">
                                                                            <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                                                                 draggable="false" alt=""
                                                                                 src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1210!3i1539!4i256!2m3!1e0!2sm!3i393089208!3m14!2sru-RU!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5oOiMzOTM5Mzl8cC5zOi0xMDB8cC5nOjE!4e0&amp;token=89726">
                                                                        </div>
                                                                        <div style="position: absolute; left: 237px; top: 296px; transition: opacity 200ms ease-out 0s;">
                                                                            <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                                                                 draggable="false" alt=""
                                                                                 src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1207!3i1540!4i256!2m3!1e0!2sm!3i393089268!3m14!2sru-RU!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5oOiMzOTM5Mzl8cC5zOi0xMDB8cC5nOjE!4e0&amp;token=125435">
                                                                        </div>
                                                                        <div style="position: absolute; left: 1005px; top: 296px; transition: opacity 200ms ease-out 0s;">
                                                                            <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                                                                 draggable="false" alt=""
                                                                                 src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1210!3i1540!4i256!2m3!1e0!2sm!3i393089208!3m14!2sru-RU!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5oOiMzOTM5Mzl8cC5zOi0xMDB8cC5nOjE!4e0&amp;token=126795">
                                                                        </div>
                                                                        <div style="position: absolute; left: -19px; top: 40px; transition: opacity 200ms ease-out 0s;">
                                                                            <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                                                                 draggable="false" alt=""
                                                                                 src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1206!3i1539!4i256!2m3!1e0!2sm!3i393089268!3m14!2sru-RU!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5oOiMzOTM5Mzl8cC5zOi0xMDB8cC5nOjE!4e0&amp;token=81888">
                                                                        </div>
                                                                        <div style="position: absolute; left: 1261px; top: 40px; transition: opacity 200ms ease-out 0s;">
                                                                            <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                                                                 draggable="false" alt=""
                                                                                 src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1211!3i1539!4i256!2m3!1e0!2sm!3i393089196!3m14!2sru-RU!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5oOiMzOTM5Mzl8cC5zOi0xMDB8cC5nOjE!4e0&amp;token=108435">
                                                                        </div>
                                                                        <div style="position: absolute; left: -19px; top: 296px; transition: opacity 200ms ease-out 0s;">
                                                                            <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                                                                 draggable="false" alt=""
                                                                                 src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1206!3i1540!4i256!2m3!1e0!2sm!3i393089268!3m14!2sru-RU!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5oOiMzOTM5Mzl8cC5zOi0xMDB8cC5nOjE!4e0&amp;token=118957">
                                                                        </div>
                                                                        <div style="position: absolute; left: 1261px; top: 296px; transition: opacity 200ms ease-out 0s;">
                                                                            <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                                                                 draggable="false" alt=""
                                                                                 src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1211!3i1540!4i256!2m3!1e0!2sm!3i393089196!3m14!2sru-RU!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5oOiMzOTM5Mzl8cC5zOi0xMDB8cC5nOjE!4e0&amp;token=14433">
                                                                        </div>
                                                                        <div style="position: absolute; left: 493px; top: -216px; transition: opacity 200ms ease-out 0s;">
                                                                            <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                                                                 draggable="false" alt=""
                                                                                 src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1208!3i1538!4i256!2m3!1e0!2sm!3i393089232!3m14!2sru-RU!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5oOiMzOTM5Mzl8cC5zOi0xMDB8cC5nOjE!4e0&amp;token=116138">
                                                                        </div>
                                                                        <div style="position: absolute; left: 749px; top: -216px; transition: opacity 200ms ease-out 0s;">
                                                                            <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                                                                 draggable="false" alt=""
                                                                                 src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1209!3i1538!4i256!2m3!1e0!2sm!3i393089232!3m14!2sru-RU!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5oOiMzOTM5Mzl8cC5zOi0xMDB8cC5nOjE!4e0&amp;token=122616">
                                                                        </div>
                                                                        <div style="position: absolute; left: 1005px; top: -216px; transition: opacity 200ms ease-out 0s;">
                                                                            <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                                                                 draggable="false" alt=""
                                                                                 src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1210!3i1538!4i256!2m3!1e0!2sm!3i393089196!3m14!2sru-RU!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5oOiMzOTM5Mzl8cC5zOi0xMDB8cC5nOjE!4e0&amp;token=97287">
                                                                        </div>
                                                                        <div style="position: absolute; left: 1261px; top: -216px; transition: opacity 200ms ease-out 0s;">
                                                                            <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                                                                 draggable="false" alt=""
                                                                                 src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1211!3i1538!4i256!2m3!1e0!2sm!3i393089196!3m14!2sru-RU!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5oOiMzOTM5Mzl8cC5zOi0xMDB8cC5nOjE!4e0&amp;token=103765">
                                                                        </div>
                                                                        <div style="position: absolute; left: 237px; top: -216px; transition: opacity 200ms ease-out 0s;">
                                                                            <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                                                                 draggable="false" alt=""
                                                                                 src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1207!3i1538!4i256!2m3!1e0!2sm!3i393089268!3m14!2sru-RU!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5oOiMzOTM5Mzl8cC5zOi0xMDB8cC5nOjE!4e0&amp;token=83696">
                                                                        </div>
                                                                        <div style="position: absolute; left: -19px; top: -216px; transition: opacity 200ms ease-out 0s;">
                                                                            <img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                                                                 draggable="false" alt=""
                                                                                 src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1206!3i1538!4i256!2m3!1e0!2sm!3i393089268!3m14!2sru-RU!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5oOiMzOTM5Mzl8cC5zOi0xMDB8cC5nOjE!4e0&amp;token=77218">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;"
                                                                 class="gm-style-pbc"><p class="gm-style-pbt"></p></div>
                                                            <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;">
                                                                <div style="z-index: 1; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div>
                                                            </div>
                                                            <div style="z-index: 4; position: absolute; top: 0px; left: 0px; width: 100%;">
                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div>
                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                                            </div>
                                                        </div>
                                                        <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                                            <a style="position: static; overflow: visible; float: none; display: inline;"
                                                               target="_blank"
                                                               href="https://maps.google.com/maps?ll=40.729121,-73.774234&amp;z=12&amp;hl=ru-RU&amp;gl=US&amp;mapclient=apiv3"
                                                               title="Нажмите, чтобы отобразить эту область в Картах Google">
                                                                <div style="width: 66px; height: 26px; cursor: pointer;">
                                                                    <img style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;"
                                                                         src="http://maps.gstatic.com/mapfiles/api-3/images/google_white5.png"
                                                                         draggable="false"></div>
                                                            </a></div>
                                                        <div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto,Arial,sans-serif; color: rgb(34, 34, 34); box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.2); z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 500px; top: 148px;">
                                                            <div style="padding: 0px 0px 10px; font-size: 16px;">
                                                                Картографические данные
                                                            </div>
                                                            <div style="font-size: 13px;">Картографические данные © 2017
                                                                Google
                                                            </div>
                                                            <div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;">
                                                                <img style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                                                     src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png"
                                                                     draggable="false"></div>
                                                        </div>
                                                        <div class="gmnoprint"
                                                             style="z-index: 1000001; position: absolute; right: 127px; bottom: 0px; width: 208px;">
                                                            <div draggable="false"
                                                                 style="-moz-user-select: none; height: 14px; line-height: 14px;"
                                                                 class="gm-style-cc">
                                                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                    <div style="width: 1px;"></div>
                                                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                                </div>
                                                                <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                                    <a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Картографические
                                                                        данные</a><span>Картографические данные © 2017 Google</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gmnoscreen"
                                                             style="position: absolute; right: 0px; bottom: 0px;">
                                                            <div style="font-family: Roboto,Arial,sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">
                                                                Картографические данные © 2017 Google
                                                            </div>
                                                        </div>
                                                        <div class="gmnoprint gm-style-cc"
                                                             style="z-index: 1000001; -moz-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"
                                                             draggable="false">
                                                            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                <div style="width: 1px;"></div>
                                                                <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                            </div>
                                                            <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                                <a style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);"
                                                                   href="https://www.google.com/intl/ru-RU_US/help/terms_maps.html"
                                                                   target="_blank">Условия использования</a></div>
                                                        </div>
                                                        <div style="cursor: pointer; width: 25px; height: 25px; overflow: hidden; margin: 10px 14px; position: absolute; top: 0px; right: 0px;">
                                                            <img style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;"
                                                                 src="http://maps.gstatic.com/mapfiles/api-3/images/sv9.png"
                                                                 draggable="false" class="gm-fullscreen-control"></div>
                                                        <div draggable="false"
                                                             style="-moz-user-select: none; height: 14px; line-height: 14px; display: none; position: absolute; right: 0px; bottom: 0px;"
                                                             class="gm-style-cc">
                                                            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                <div style="width: 1px;"></div>
                                                                <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                            </div>
                                                            <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                                <a target="_new"
                                                                   title="Сообщить об ошибке на карте или снимке"
                                                                   style="font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;"
                                                                   href="https://www.google.com/maps/@40.7291208,-73.7742339,12z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3">Сообщить
                                                                    об ошибке на карте</a></div>
                                                        </div>
                                                        <div class="gmnoprint gm-bundled-control"
                                                             style="margin: 10px; -moz-user-select: none; position: absolute; right: 28px; top: 200px;"
                                                             draggable="false" controlwidth="28" controlheight="55">
                                                            <div class="gmnoprint"
                                                                 style="position: absolute; left: 0px; top: 0px;"
                                                                 controlwidth="28" controlheight="55">
                                                                <div draggable="false"
                                                                     style="-moz-user-select: none; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;">
                                                                    <div title="Увеличить" aria-label="Увеличить"
                                                                         tabindex="0"
                                                                         style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;">
                                                                        <div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;">
                                                                            <img style="position: absolute; left: 0px; top: 0px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"
                                                                                 src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png"
                                                                                 draggable="false"></div>
                                                                    </div>
                                                                    <div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div>
                                                                    <div title="Уменьшить" aria-label="Уменьшить"
                                                                         tabindex="0"
                                                                         style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;">
                                                                        <div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;">
                                                                            <img style="position: absolute; left: 0px; top: -15px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"
                                                                                 src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png"
                                                                                 draggable="false"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom"
                                                             style="margin: 10px; -moz-user-select: none; position: absolute; display: none; bottom: 14px; right: 0px;"
                                                             draggable="false" controlwidth="0" controlheight="0">
                                                            <div class="gmnoprint" controlwidth="28" controlheight="0"
                                                                 style="display: none; position: absolute;">
                                                                <div style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); cursor: pointer; background-color: rgb(255, 255, 255); display: none;"
                                                                     title="Повернуть карту на 90&nbsp;градусов"><img
                                                                            style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                                                            src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png"
                                                                            draggable="false"></div>
                                                                <div style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);"
                                                                     class="gm-tilt"><img
                                                                            style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                                                            src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png"
                                                                            draggable="false"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="edgtf-google-map-overlay"></div>
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
</div>
