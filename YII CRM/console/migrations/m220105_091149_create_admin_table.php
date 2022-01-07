<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%admin}}`.
 */
class m220105_091149_create_admin_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('admin', [
            'admin_id' => $this->primaryKey(),
            'username' => $this->string(30)->notNull(),
            'password' => $this->string(30)->notNull(),
        ]);

    }

    public function down()
    {

        $this->dropTable('admin');
        
    }
}
