<?php

use yii\db\Migration;

class m171013_134931_route extends Migration
{
    public function safeUp()
    {
        $this->createTable('route', [
            'id' => $this->primaryKey(),
            'route' => $this->string(200),
            'type' => $this->string(200),
        ]);
    }

    public function safeDown()
    {
        echo "m171013_134931_route cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171013_134931_route cannot be reverted.\n";

        return false;
    }
    */
}
