<?php

namespace app\models;
use app\behaviors\PositionBehavior;
use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property integer $parent
 * @property string $type
 * @property string $image
 * @property string $name
 * @property string $alias
 * @property string $route
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property string $data
 * @property integer $likes
 * @property integer $hits
 * @property integer $position
 */
class Category extends \yii\db\ActiveRecord
{

    public function behaviors()
    {
        return [
            'positionBehavior' => [
                'class' => PositionBehavior::className(),
                'positionAttribute' => 'position',
                'groupAttributes' => [
                    'parent' // multiple lists varying by 'categoryId'
                ],
            ],
        ];
    }


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent', 'likes', 'hits', 'position'], 'integer'],
            [['data'], 'safe'],
            [['type', 'image', 'name', 'alias', 'route', 'title', 'description', 'keywords'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Идентификатор',
            'parent' => 'Родитель',
            'type' => 'Тип',
            'image' => 'Изображение',
            'name' => 'Имя',
            'alias' => 'Псевдоним',
            'route' => 'Маршрут',
            'title' => 'Наименование',
            'description' => 'Краткое описание',
            'keywords' => 'Ключевые слова',
            'data' => 'Дата публикации',
            'likes' => 'Понравилось',
            'hits' => 'Просмотров',
            'position' => 'Позиция',
        ];
    }
}
