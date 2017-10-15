<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model app\models\Type */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cell')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'route')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'tpl_v1')->textarea(['maxlength' => true]) ?>

    <?=$form->field($model, 'tpl_v1')->widget(CKEditor::className(), [
        'editorOptions' => [
            'allowedContent' => true,
            'startupMode' => 'source',
        ],
    ]);?>

    <?=$form->field($model, 'tpl_v2')->widget(CKEditor::className(), [
        'editorOptions' => [
            'allowedContent' => true,
        ],
    ]);?>

    <?//= $form->field($model, 'tpl_v2')->textarea(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
