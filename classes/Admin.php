<?php
/**
 * Created by PhpStorm.
 * User: VvV
 * Date: 10.10.2017
 * Time: 15:32
 */

namespace app\classes;
use Yii;
use app\models\Route;
use app\models\Type;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

class Admin
{
    static public function admin($content)
    {
         if(isset(Yii::$app->user->identity->username) and Yii::$app->user->identity->username == 'admin')
         {
             ob_start();

             //target="_blank"
             ?>
             <a style="color: #4d9ae1"  title="Редактировать" href="<?=\yii\helpers\Url::to(['content/update'])?>?id=<?=$content->id?>&update=fromsite">&#9998;</a>

             <?php  ActiveForm::begin(); ?>

             <?= Html::a('удалить', ['content/delete-from-site', 'id' => $content->id], ['data-method' => 'post','data-confirm'=>'Вы уверены, что хотите удалить этот элемент?']) ?>
             <?php ActiveForm::end(); ?>

             <?php
             return  $object = ob_get_clean();
         }
    }

    static public function add($meta)
    {
        if(isset(Yii::$app->user->identity->username) and Yii::$app->user->identity->username == 'admin')
        {
            $route = Route::find()->where("`route` = '{$meta->route}'")->one();

             $type = explode(',',$route->type);

            ob_start();
                ?>
                <div style="border: 1px solid #d9d9d9;padding: 10px 20px 10px 20px;">
                    Добавить - |
                    <?php foreach ($type as $zn) {

                        $zn = trim($zn);

                        $name = Type::find()->where("`type` = '{$zn}'")->one();
                         ?>

                         <a  title="<?=$meta->description?>"

                            href="/admin/content/create?type=<?= $zn?>&category_id=<?= $meta->id ?>&create=fromsite"><?= $name->name ?></a> |

                         <?php

                    } ?>
                </div>
                <?

            return  $object = ob_get_clean();
        }

    }

static public function inputOutput()
{
    if(isset(Yii::$app->user->identity->username) and Yii::$app->user->identity->username == 'admin')
    {
        ?>

        <?php  ActiveForm::begin(); ?>
        <?= Html::a('Выход', ['site/logout'], ['data-method' => 'post']) ?>
        <a href="/admin">Админ</a>
        <?php ActiveForm::end(); ?>

        <?
    }
    else
    {
        ?>
        <a href="/login">Вход</a>
        <?
    }



}

}