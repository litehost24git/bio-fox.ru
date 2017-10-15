<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\models\Type;
use app\classes\Replacement;



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
?>
<div class="edgtf-content" style="margin-top: -85px">
    <div class="edgtf-content-inner">

        <?php

        echo \app\classes\Content::content($content,'image_top');

        ?>

        <div class="edgtf-full-width">
            <div class="edgtf-full-width-inner">

                <?php

                foreach($content as $contentL)
                {
                    if($contentL->type != 'image_top')
                    {
                       echo Replacement::replacement($contentL);
                    }

                }

              //  echo \app\classes\Content::content($content,'about_text');
               // echo \app\classes\Content::content($content,'text');
                //echo \app\classes\Content::content($content,'foto');
                ?>

            </div>
        </div>
    </div> <!-- close div.content_inner -->
</div>
