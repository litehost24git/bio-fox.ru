<?php

use yii\db\Migration;

class m171008_134606_content_type extends Migration
{
    public function safeUp()
    {
        $this->createTable('type', [
            'id' => $this->primaryKey(),
            'type' => $this->string(200),
            'cell' => $this->string(200),
            'route' => $this->string(200),
        ]);
    }

    public function safeDown()
    {
        echo "m171008_134606_content_type cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171008_134606_content_type cannot be reverted.\n";

        return false;
    }
    */
}
