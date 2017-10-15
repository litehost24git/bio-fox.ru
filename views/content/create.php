<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model app\models\Content */

$this->title = 'Добавление содержимого';
$this->params['breadcrumbs'][] = ['label' => 'Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-create">

    <h1><?= Html::encode($this->title) ?></h1>

<!--    --><?//= $this->render('_form', [
//        'model' => $model,
//    ]) ?>

    <?php $form = ActiveForm::begin(); ?>

    <?php
    if(isset($_GET['create']) && $_GET['create'] == 'fromsite')
    {
        $form = ActiveForm::begin(['action'=>'/admin/content/create-from-site']);
    }else
    {
        $form = ActiveForm::begin();
    }
    ?>


    <?php
    foreach ($category as $categorys)
    {
        $variant[$categorys->id] = $categorys->name;
    }
    //$params = [
    //    'prompt' => 'Категория родителя'
    //];
if(isset($_GET['category_id']))
{
    $param = [
             'prompt' => '--------------------',
            'options' =>[ $_GET['category_id'] => ['Selected' => true]]
    ];

}else
    {
        $param = [
            'prompt' => '--------------------',
        ];

    }

    echo $form->field($model, 'category_id')->dropDownList($variant,$param)->label('Для пункта меню');


    foreach ($type as $zn)
    {
        $variant_type[$zn->type] = $zn->name;
    }

    if(isset($_GET['type'])){$select = $_GET['type'];}else{$select = '';}

    $createUrl = \yii\helpers\Url::to(['content/create']);
    $params_type = [
        'prompt' => 'Выбор типа содержимого',
        'options' =>[ $select => ['Selected' => true]],
        //'onchange'=>'this.form.submit()',
        'onchange'=>'document.location = "'.$createUrl.'?type="+this.value',
    ];
    echo $form->field($model, 'type')->dropDownList($variant_type,$params_type)->label('Тип содержимого');
    ?>

    <?php
    if(isset($_GET['alias'])){echo $form->field($model, 'alias')->hiddenInput(['maxlength' => true,'value' => $_GET['alias']]);}

    if(isset($_GET['type']))
    {
        foreach ($type as $zn)
        {
            if($_GET['type'] == $zn->type)
            {
                echo nl2br($zn->description);

                $alias = mb_stripos($zn->cell, 'alias', 0,"UTF-8");


                if($alias !== FALSE)
                {
                    ?>
                    <script>
                        function countChar() {
                            $.ajax({
                                type: "POST",
                                url: "/translate.php",
                                data: "category-name="+$("#content-name").val(),
                                success: function(html){
                                    $("#content-alias").val(html);
                                }
                            });
                            return false;
                        }
                    </script>
                    <?

                }

                $cell = explode(",",$zn->cell); //делим на массивы

                foreach ($cell as $tip)
                {
                    $tip = trim($tip);
                    if($tip == 'text' or $tip == 'image')
                    {
                        echo  $form->field($model, $tip)->widget(CKEditor::className(), [
                            'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
                        ]);
                    }
                    elseif($alias !== FALSE && $tip == 'name')
                    {
                        echo $form->field($model, $tip)->textInput(['maxlength' => true, 'onchange'=>"countChar()", 'onkeyup'=>"countChar()"]);
                    }
                    else
                    {
                        if(isset($_GET['url']))
                        {
                            echo $form->field($model, $tip)->textInput(['maxlength' => true, 'value' => $_GET['url']]);
                        }
                        else
                        {
                            echo $form->field($model, $tip)->textInput(['maxlength' => true]);
                        }

                    }

                }
                // echo $zn->cell;
            }
        }


    }
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
