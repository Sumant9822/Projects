<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%admin}}`.
 */
class m220107_060220_create_admin_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('admin', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'password' => $this->string()->notNull(),
            'register_date' => $this->datetime()->null()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);

    }

    public function down()
    {
        $this->dropTable('admin');
        
    }


}
