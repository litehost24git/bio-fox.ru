<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Категории';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать категорию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'parent',
            //'type',
           // 'image',
            'name',
             'alias',
             'route',
            // 'title',
            // 'description',
            // 'keywords',
            // 'data',
            // 'likes',
            // 'hits',
             'position',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{moveUp} {moveDown} {view} {update} {delete} ',
                'buttons' => [
                    'moveUp' => function($url, $model, $key) {     // render your custom button
                        return Html::a("<i class='glyphicon glyphicon-triangle-top'></i>", ["category/move-up", "id" => $model->id], ['data-method' => 'post']);
                    },
                    'moveDown' => function($url, $model, $key) {     // render your custom button
                        return Html::a("<i class='glyphicon glyphicon-triangle-bottom'></i>", ["category/move-down", "id" => $model->id]);
                    },
                ]
            ],

           // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
