<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "type".
 *
 * @property integer $id
 * @property string $type
 * @property string $name
 * @property string $cell
 * @property string $route
 * @property string $description
 * @property string $tpl_v1
 * @property string $tpl_v2
 */
class Type extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'name', 'tpl_v1', 'tpl_v2'], 'string'],
            [['type', 'cell', 'route'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'name' => 'name',
            'description' => 'description',
            'cell' => 'Cell',
            'route' => 'Route',
            'tpl_v1' => 'tpl_v1',
            'tpl_v2' => 'tpl_v2'
        ];
    }
}
