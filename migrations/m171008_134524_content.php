<?php

use yii\db\Migration;

class m171008_134524_content extends Migration
{
    public function safeUp()
    {
        $this->createTable('content', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'type' => $this->string(200),
            'image' => $this->text(),
            'name' => $this->string(200),
            'price' => $this->integer(),
            'price_old' => $this->integer(),
            'route' => $this->string(200),
            'alias' => $this->string(200),
            'text' => $this->text(),
            'title' => $this->string(200),
            'description' => $this->string(200),
            'keywords' => $this->string(200),
            'author_id' => $this->integer(),
            'data' => $this->date("Y-m-d"),
            'likes' => $this->integer(),
            'hits' => $this->integer(),
            'position' => $this->integer(),
        ]);
    }

    public function safeDown()
    {
        echo "m171008_134524_content cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171008_134524_content cannot be reverted.\n";

        return false;
    }
    */
}
