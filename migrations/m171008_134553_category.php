<?php

use yii\db\Migration;

class m171008_134553_category extends Migration
{
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'parent' => $this->integer(),
            'type' => $this->string(200),
            'image' => $this->string(200),
            'name' => $this->string(200),
            'alias' => $this->string(200),
            'route' => $this->string(200),
            'title' => $this->string(200),
            'description' => $this->string(200),
            'keywords' => $this->string(200),
            'data' => $this->date("Y-m-d"),
            'likes' => $this->integer(),
            'hits' => $this->integer(),
            'position' => $this->integer(),
        ]);
    }

    public function safeDown()
    {
        echo "m171008_134553_category cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171008_134553_category cannot be reverted.\n";

        return false;
    }
    */
}
