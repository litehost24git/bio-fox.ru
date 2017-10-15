<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\classes\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Content */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить этот пункт?',
                'method' => 'post',
            ],
        ]) ?>

        <a class="btn btn-primary" href="<?=Url::url(Url::arrayUrl(),$model->category_id)?>">На страницу сайта </a>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'category_id',
            'type',
            'image:ntext',
            'name',
            'price',
            'price_old',
            'route',
            'alias',
            'text:ntext',
            'title',
            'description',
            'keywords',
            'author_id',
            'data',
            'likes',
            'hits',
            'position',
        ],
    ]) ?>

</div>
