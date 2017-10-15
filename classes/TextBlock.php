<?php
/**
 * Created by PhpStorm.
 * User: VvV
 * Date: 29.09.2017
 * Time: 15:19
 */

namespace app\classes;
use yii\db\ActiveRecord;
use app\models\Content;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use Yii;


class TextBlock
{
    static public function textBlock($ident, $strip_tags='')//отображает текст если его нет то добавит
    {

        $content  =  Content::findOne(['alias' => $ident]);
      // print_r($content);
       // echo $content->name;
        if($content)
        {
            if($strip_tags != ''){echo strip_tags($content->text); }else {echo $content->text;}


                if(isset(Yii::$app->user->identity->username) && Yii::$app->user->identity->username == 'admin')
                {
                    ?><a style="color: #4d9ae1"  title="Редактировать" href="/admin/content/update?id=<?=$content->id?>">&#9998;</a><?
                }
        }
        elseif(isset(Yii::$app->user->identity->username) and Yii::$app->user->identity->username == 'admin')
        {
            //echo "Нет записи";

            ?><a style="color: #4d9ae1"  href="/admin/content/create?type=textBlock&alias=<?=$ident?>">Добавить запись</a><?
        }
    }
}