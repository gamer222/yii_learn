<?php

use yii\db\Schema;
use yii\db\Migration;

class m150806_135159_create_users_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('users', [
            'user_id' => Schema::TYPE_PK,
            'username' => Schema::TYPE_STRING.' NOT NULL',
            'password' => Schema::TYPE_STRING.' NOT NULL'
        ]);

        $this->insert('users', ['username' => 'Илья', 'password' => '1234igM']);
        $this->insert('users', ['username' => 'Андрей', 'password' => 'p345']);
        $this->insert('users', ['username' => 'Антон', 'password' => 'mdm236']);
        $this->insert('users', ['username' => 'Евгений', 'password' => 'lkald@2']);
    }

    public function down()
    {
        $this->dropTable('users');
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
