<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

use app\models\Type;
/* @var $this yii\web\View */
/* @var $model app\models\Content */
/* @var $form yii\widgets\ActiveForm */
?>



<div class="content-form">
    <?php
    if(isset($_GET['update']) && $_GET['update'] == 'fromsite')
    {
            $form = ActiveForm::begin(['action'=>'/admin/content/update-from-site?id='.$_GET['id']]);
    }else
        {
            $form = ActiveForm::begin();
        }
    ?>


    <?php
     $type  = Type::find()->where(['type' => $model->type])->all();

    $mType =  explode(',',$type[0]->cell);

    if($type[0]->type == 'textBlock'){unset($mType[1]);}


    foreach($mType as $zn)
    {

           if(trim($zn) == 'text' or trim($zn) == 'image' )
           {

              echo $form->field($model, trim($zn))->widget(CKEditor::className(), [
                   'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
               ]);

           }
           elseif(trim($zn) == 'description')
           {

                 echo $form->field($model, trim($zn))->textarea(['maxlength' => true,'rows' => 2, 'cols' => 5]);
              // echo $form->field($model, 'textArea')->textarea(['rows' => 2, 'cols' => 5])->label('Многострочное текстовое поле');
           }
           else
           {
               echo $form->field($model, trim($zn))->textInput();
           }



    }
    ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
