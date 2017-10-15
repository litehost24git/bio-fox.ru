<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Category;
use app\models\Type;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
//use app\models\CategorySearch;

/* @var $this yii\web\View */
/* @var $model app\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>
<script>



    function countChar() {

        $.ajax({
            type: "POST",
            url: "/translate.php",
            data: "category-name="+$("#category-name").val(),
            success: function(html){
                $("#category-alias").val(html);
            }
        });
        return false;

    }
</script>



<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    $category  = Category::find()->all();
    $variant[0] = 'Категория родителя';
    foreach ($category as $categorys)
    {
        $variant[$categorys->id] = $categorys->name;
    }

    echo $form->field($model, 'parent')->dropDownList($variant);



    ?>
    <?php
    $type  = Type::find()->where(['type' => 'category'])->all();

    $mType =  explode(',',$type[0]->cell);

    if($type[0]->type == 'textBlock'){unset($mType[1]);}


    foreach($mType as $zn)
    {
        // echo $zn;

        if(trim($zn) == 'text' or trim($zn) == 'image' )
        {

            echo $form->field($model, trim($zn))->widget(CKEditor::className(), [
                'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
            ]);

        }
        elseif(trim($zn) == 'name')
        {
            echo $form->field($model, trim($zn))->textInput(['maxlength' => true, 'onchange'=>"countChar()", 'onkeyup'=>"countChar()"]);
        }
        elseif(trim($zn) == 'description')
        {
            echo $form->field($model, trim($zn))->textarea(['maxlength' => true]);
        }
        else
        {

            echo $form->field($model, trim($zn))->textInput(['maxlength' => true]);


        }



    }
    ?>

    <?= $form->field($model, 'type')->hiddenInput(['value' => 'category'])->label(false) ;?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
