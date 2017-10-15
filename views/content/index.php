<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\ContentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Содержимое сайта';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]);
   // $request = Yii::$app->request;
   // print_r($request->post());
    //
    // ?>

    <p>
        <?= Html::a('Добавить содержимое', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'category_id',
                'value' => 'category.name'
            ],
            'type',
          //  'image:ntext',
            'name',
            // 'price',
            // 'price_old',
            // 'route',
            // 'alias',
            // 'text:ntext',
            // 'title',
            // 'description',
            // 'keywords',
            // 'author_id',
            // 'data',
            // 'likes',
            // 'hits',
             'position',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{moveUp} {moveDown} {view} {update} {delete} ',
                'buttons' => [
                    'moveUp' => function($url, $model, $key) {     // render your custom button
                        return Html::a("<i class='glyphicon glyphicon-triangle-top'></i>", ["content/move-up", "id" => $model->id], ['data-method' => 'post']);
                    },
                    'moveDown' => function($url, $model, $key) {     // render your custom button
                        return Html::a("<i class='glyphicon glyphicon-triangle-bottom'></i>", ["content/move-down", "id" => $model->id], ['data-method' => 'post']);
                    },
                ]
            ],
        ],
    ]); ?>
</div>
