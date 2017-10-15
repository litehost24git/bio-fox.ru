<?php

namespace app\models;

use Yii;
use himiklab\thumbnail\EasyThumbnailImage;
use app\behaviors\PositionBehavior;

/**
 * This is the model class for table "content".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $type
 * @property string $image
 * @property string $name
 * @property integer $price
 * @property integer $price_old
 * @property string $route
 * @property string $alias
 * @property string $text
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property integer $author_id
 * @property string $data
 * @property integer $likes
 * @property integer $hits
 * @property integer $position
 */
class Content extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            'positionBehavior' => [
                'class' => PositionBehavior::className(),
                'positionAttribute' => 'position',
                'groupAttributes' => [
                    'category_id' // multiple lists varying by 'categoryId'
                ],
            ],
        ];
    }


    public function afterDelete()// после удалением
    {

        if(isset($this->text))
        {
            preg_match_all('#<img.*src="(.*)".*>#isU', $this->text, $image);

            foreach ($image[1] as $zn)
            {
                $arr_url = pathinfo($zn); //получаем имя файла

                if (file_exists('upload/image_full/'.substr($arr_url['basename'],0,2).'/'.$arr_url['basename']))
                {

                    // перемещение файла
                    $file = 'upload/image_full/'.substr($arr_url['basename'],0,2).'/'.$arr_url['basename'];
                    $new_file = 'upload/global/'.$arr_url['basename'];

                    copy($file, $new_file); // делаем копию
                    unlink($file); // удаляем оригинал
                    unlink('upload/image_mini/'.substr($arr_url['basename'],0,2).'/'.$arr_url['basename']); // удаляем миниатюру

                }

            }
        }
        if(isset($this->image))
        {
            preg_match_all('#<img.*src="(.*)".*>#isU', $this->image, $image);

            foreach ($image[1] as $zn)
            {
                $arr_url = pathinfo($zn); //получаем имя файла

                if (file_exists('upload/image_full/'.substr($arr_url['basename'],0,2).'/'.$arr_url['basename']))
                {

                    // перемещение файла
                    $file = 'upload/image_full/'.substr($arr_url['basename'],0,2).'/'.$arr_url['basename'];
                    $new_file = 'upload/global/'.$arr_url['basename'];

                    copy($file, $new_file); // делаем копию
                    unlink($file); // удаляем оригинал
                    unlink('upload/image_mini/'.substr($arr_url['basename'],0,2).'/'.$arr_url['basename']); // удаляем миниатюру

                }

            }
        }




    }

    public function beforeSave($insert)// перед записью
    {


        if (parent::beforeSave($insert)) {
            if ($insert) {
                Yii::$app->session->setFlash('success', 'Запись добавлена!');

                if(isset($this->text))
                {
                    preg_match_all('#<img.*src="(.*)".*>#isU', $this->text, $image);

                    foreach ($image[1]  as $kl=>$zn)
                    {

                        $arr_url = pathinfo($zn); //получаем имя файла

                        // if($arr_url['dirname'] != '/upload/image_mini/'.substr($arr_url['basename'],0,2))
                        // {}
                        // echo $image[0][$kl];

                        $time = time()+$kl;
                        $name = md5($time.$arr_url['basename']);
                        $dir = substr($name,0,2);
                        if(!is_dir("upload/image_mini/".$dir)) mkdir("upload/image_mini/".$dir, 0777);// создаём папку
                        if(!is_dir("upload/image_full/".$dir)) mkdir("upload/image_full/".$dir, 0777);// создаём папку

                        // перемещение файла
                        $file = 'upload/global/'.$arr_url['basename'];
                        $new_file = 'upload/image_full/'.$dir.'/'.$name.'.'.$arr_url['extension'];
                        copy($file, $new_file); // делаем копию
                        unlink($file); // удаляем оригинал


                        preg_match('/height:([0-9]*).*width:([0-9]*)/', $image[0][$kl], $hw);//получаем ширину высоту фото

                        if(!is_numeric($hw[1]) or !is_numeric($hw[2]))
                        {
                            $image_w_h = getimagesize('upload/image_full/'.$dir.'/'.$name.'.'.$arr_url['extension']);
                            // print_r($image_w_h);
                            preg_match('/width.*"([0-9]*)".*height.*"([0-9]*)"/', $image_w_h[3], $hw);//получаем ширину высоту фото
                        }

                        $new =  EasyThumbnailImage::thumbnailFileUrl(
                            $new_file,
                            $hw[2],
                            $hw[1],
                            EasyThumbnailImage::THUMBNAIL_OUTBOUND

                        );

                        copy(substr($new, 1), "upload/image_mini/".$dir.'/'.$name.'.'.$arr_url['extension']); // делаем копию
                        unlink(substr($new, 1)); // удаляем оригинал

                        $this->text = str_replace("$zn", '/upload/image_mini/'.$dir.'/'.$name.'.'.$arr_url['extension'], $this->text);// подменяем пути




                    }
                }
                if(isset($this->image))
                {
                    preg_match_all('#<img.*src="(.*)".*>#isU', $this->image, $image);

                    foreach ($image[1]  as $kl=>$zn)
                    {

                        $arr_url = pathinfo($zn); //получаем имя файла

                        // if($arr_url['dirname'] != '/upload/image_mini/'.substr($arr_url['basename'],0,2))
                        // {}
                        // echo $image[0][$kl];

                        $time = time()+$kl;
                        $name = md5($time.$arr_url['basename']);
                        $dir = substr($name,0,2);
                        if(!is_dir("upload/image_mini/".$dir)) mkdir("upload/image_mini/".$dir, 0777);// создаём папку
                        if(!is_dir("upload/image_full/".$dir)) mkdir("upload/image_full/".$dir, 0777);// создаём папку

                        // перемещение файла
                        $file = 'upload/global/'.$arr_url['basename'];
                        $new_file = 'upload/image_full/'.$dir.'/'.$name.'.'.$arr_url['extension'];
                        copy($file, $new_file); // делаем копию
                        unlink($file); // удаляем оригинал


                        preg_match('/height:([0-9]*).*width:([0-9]*)/', $image[0][$kl], $hw);//получаем ширину высоту фото

                        if(!is_numeric($hw[1]) or !is_numeric($hw[2]))
                        {
                            $image_w_h = getimagesize('upload/image_full/'.$dir.'/'.$name.'.'.$arr_url['extension']);
                            // print_r($image_w_h);
                            preg_match('/width.*"([0-9]*)".*height.*"([0-9]*)"/', $image_w_h[3], $hw);//получаем ширину высоту фото
                        }

                        $new =  EasyThumbnailImage::thumbnailFileUrl(
                            $new_file,
                            $hw[2],
                            $hw[1],
                            EasyThumbnailImage::THUMBNAIL_OUTBOUND

                        );

                        copy(substr($new, 1), "upload/image_mini/".$dir.'/'.$name.'.'.$arr_url['extension']); // делаем копию
                        unlink(substr($new, 1)); // удаляем оригинал

                        $this->image = str_replace("$zn", '/upload/image_mini/'.$dir.'/'.$name.'.'.$arr_url['extension'], $this->image);// подменяем пути




                    }
                }

            } else {

                Yii::$app->session->setFlash('success', 'Запись обновлена!');

                if(isset($this->text))
                {
                    $content = Content::findOne(['id' => $this->id]);
                    // echo $content->text;
                    // всё фото что в документе в папку global
                    preg_match_all('#<img.*src="(.*)".*>#isU', $content->text, $image);
                    foreach ($image[1] as $zn)
                    {
                        $arr_url = pathinfo($zn); //получаем имя файла

                        if (file_exists('upload/image_full/'.substr($arr_url['basename'],0,2).'/'.$arr_url['basename']))
                        {
                            // перемещение файла
                            $file = 'upload/image_full/'.substr($arr_url['basename'],0,2).'/'.$arr_url['basename'];
                            $new_file = 'upload/global/'.$arr_url['basename'];

                            copy($file, $new_file); // делаем копию
                            unlink($file); // удаляем оригинал
                            unlink('upload/image_mini/'.substr($arr_url['basename'],0,2).'/'.$arr_url['basename']); // удаляем миниатюру

                        }

                    }

                    // всё что в документе в папку image_full
                    // $this->text = str_replace("upload/image_full", 'upload/global', $this->text);// подменяем пути
                    preg_match_all('#<img.*src="(.*)".*>#isU', $this->text, $image);


                    foreach ($image[1]  as $kl=>$zn)
                    {

                        $arr_url = pathinfo($zn); //получаем имя файла

                        // if($arr_url['dirname'] != '/upload/image_mini/'.substr($arr_url['basename'],0,2))
                        // {}
                        // echo $image[0][$kl];

                        $time = time()+$kl;
                        $name = md5($time.$arr_url['basename']);
                        $dir = substr($name,0,2);

                        if(!is_dir("upload/image_mini/".$dir)) mkdir("upload/image_mini/".$dir, 0777);// создаём папку
                        if(!is_dir("upload/image_full/".$dir)) mkdir("upload/image_full/".$dir, 0777);// создаём папку

                        // перемещение файла
                        $file = 'upload/global/'.$arr_url['basename'];
                        $new_file = 'upload/image_full/'.$dir.'/'.$name.'.'.$arr_url['extension'];
                        copy($file, $new_file); // делаем копию
                        unlink($file); // удаляем оригинал


                        preg_match('/height:([0-9]*).*width:([0-9]*)/', $image[0][$kl], $hw);//получаем ширину высоту фото
                        if(!is_numeric($hw[1]) or !is_numeric($hw[2]))
                        {
                            $image_w_h = getimagesize('upload/image_full/'.$dir.'/'.$name.'.'.$arr_url['extension']);
                            $hw[2] = $image_w_h[0];
                            $hw[1] = $image_w_h[1];
                            //print_r($image_w_h);
                            ////preg_match('/width.*"([0-9]*)".*height.*"([0-9]*)"/', $image_w_h[3], $hw);//получаем ширину высоту фото
                        }


                        $new =  EasyThumbnailImage::thumbnailFileUrl(
                            $new_file,
                            $hw[2],
                            $hw[1],
                            EasyThumbnailImage::THUMBNAIL_OUTBOUND

                        );

                        copy(substr($new, 1), "upload/image_mini/".$dir.'/'.$name.'.'.$arr_url['extension']); // делаем копию
                        unlink(substr($new, 1)); // удаляем оригинал

                        $this->text = str_replace("$zn", '/upload/image_mini/'.$dir.'/'.$name.'.'.$arr_url['extension'], $this->text);// подменяем пути




                    }
                }

                if(isset($this->image))
                {
                    $content = Content::findOne(['id' => $this->id]);
                    // echo $content->text;
                    // всё фото что в документе в папку global
                    preg_match_all('#<img.*src="(.*)".*>#isU', $content->image, $image);
                    foreach ($image[1] as $zn)
                    {
                        $arr_url = pathinfo($zn); //получаем имя файла

                        if (file_exists('upload/image_full/'.substr($arr_url['basename'],0,2).'/'.$arr_url['basename']))
                        {
                            // перемещение файла
                            $file = 'upload/image_full/'.substr($arr_url['basename'],0,2).'/'.$arr_url['basename'];
                            $new_file = 'upload/global/'.$arr_url['basename'];

                            copy($file, $new_file); // делаем копию
                            unlink($file); // удаляем оригинал
                            unlink('upload/image_mini/'.substr($arr_url['basename'],0,2).'/'.$arr_url['basename']); // удаляем миниатюру

                        }

                    }

                    // всё что в документе в папку image_full
                    // $this->text = str_replace("upload/image_full", 'upload/global', $this->text);// подменяем пути
                    preg_match_all('#<img.*src="(.*)".*>#isU', $this->image, $image);


                    foreach ($image[1]  as $kl=>$zn)
                    {

                        $arr_url = pathinfo($zn); //получаем имя файла

                        // if($arr_url['dirname'] != '/upload/image_mini/'.substr($arr_url['basename'],0,2))
                        // {}
                        // echo $image[0][$kl];

                        $time = time()+$kl;
                        $name = md5($time.$arr_url['basename']);
                        $dir = substr($name,0,2);

                        if(!is_dir("upload/image_mini/".$dir)) mkdir("upload/image_mini/".$dir, 0777);// создаём папку
                        if(!is_dir("upload/image_full/".$dir)) mkdir("upload/image_full/".$dir, 0777);// создаём папку

                        // перемещение файла
                        $file = 'upload/global/'.$arr_url['basename'];
                        $new_file = 'upload/image_full/'.$dir.'/'.$name.'.'.$arr_url['extension'];
                        copy($file, $new_file); // делаем копию
                        unlink($file); // удаляем оригинал


                        preg_match('/height:([0-9]*).*width:([0-9]*)/', $image[0][$kl], $hw);//получаем ширину высоту фото
                        if(!is_numeric($hw[1]) or !is_numeric($hw[2]))
                        {
                            $image_w_h = getimagesize('upload/image_full/'.$dir.'/'.$name.'.'.$arr_url['extension']);
                            $hw[2] = $image_w_h[0];
                            $hw[1] = $image_w_h[1];
                            //print_r($image_w_h);
                            ////preg_match('/width.*"([0-9]*)".*height.*"([0-9]*)"/', $image_w_h[3], $hw);//получаем ширину высоту фото
                        }


                        $new =  EasyThumbnailImage::thumbnailFileUrl(
                            $new_file,
                            $hw[2],
                            $hw[1],
                            EasyThumbnailImage::THUMBNAIL_OUTBOUND

                        );

                        copy(substr($new, 1), "upload/image_mini/".$dir.'/'.$name.'.'.$arr_url['extension']); // делаем копию
                        unlink(substr($new, 1)); // удаляем оригинал

                        $this->image = str_replace("$zn", '/upload/image_mini/'.$dir.'/'.$name.'.'.$arr_url['extension'], $this->image);// подменяем пути




                    }
                }

//                if(isset($this->alias))
//                {
//
//                 //   SELECT * FROM `content` WHERE `alias` LIKE 'product' and `id` <> '52'
//
//                    $content  = Content::find()
//                        ->where(['<>','id',$this->id])
//                        ->andWhere(['=', 'alias', $this->alias])->one();
//
//                    $category  = Category::find()
//                        ->where(['alias' => $this->alias.'111'])->one();
//
//
//                    if($content || $category)
//                    {
//                        echo 'есть контент '.$content->alias;
//                        print_r((array)$content);
//                        echo ' есть категория '.$category->alias;
//                    }
//                    else
//                    {
//                        echo 'нет такой '.$this->alias;
//                    }
//                      die;
//                }

            }
            return true;
        } else {
            return false;
        }
    }



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'price', 'price_old', 'author_id', 'likes', 'hits', 'position'], 'integer'],
            [['image', 'text'], 'string'],
            [['data'], 'safe'],
            [['type', 'name', 'route', 'alias', 'title', 'description', 'keywords'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'ID категории',
            'type' => 'Type',
            'image' => 'Изображение',
            'name' => 'Наименование, заголовок',
            'price' => 'Цена',
            'price_old' => 'Цена старая',
            'route' => 'Маршрут',
            'alias' => 'Псевдоним',
            'text' => 'Текст',
            'title' => 'Наименование страницы',
            'description' => 'Краткое описание',
            'keywords' => 'Ключевые слова',
            'author_id' => 'Идентификатор автора',
            'data' => 'Дата публикации',
            'likes' => 'Понравилось',
            'hits' => 'Просмотров',
            'position' => 'Позиция',
        ];
    }

    public function getNext()
    {
        $next = $this->find()
            ->where(['>', 'id', $this->id])
            ->andWhere(['category' => $this->category, 'type' => $this->type])->one();
        return $next;
    }

    public function getPrev()
    {
        $prev = $this->find()
            ->where(['<', 'id', $this->id])
            ->andWhere(['category' => $this->category, 'type' => $this->type])
            ->orderBy('id desc')->one();
        return $prev;
    }
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
