<?php

use yii\db\Schema;
use yii\db\Migration;

class m150626_002638_cards extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%trcard}}', [
            'id' => Schema::TYPE_PK,
            'url' => Schema::TYPE_STRING . ' UNIQUE NOT NULL',
            'title' => Schema::TYPE_STRING,
            'image' => Schema::TYPE_STRING,
            'description' => Schema::TYPE_TEXT,
            'created_at' => Schema::TYPE_TIMESTAMP . ' NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => Schema::TYPE_TIMESTAMP . ' NOT NULL DEFAULT CURRENT_TIMESTAMP',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%trcard}}');
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
