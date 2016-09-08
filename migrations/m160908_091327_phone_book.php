<?php

use yii\db\Migration;

class m160908_091327_phone_book extends Migration
{
    public function up()
    {
         $this->createTable('phone_book', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50),
            'phone_number' => $this->string(255),
            'description' => $this->text(),
            'created_at' => $this->dateTime(),
        ]);
    }



    public function down()
    {
        $this->dropTable('phone_book');

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
