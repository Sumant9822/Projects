<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%adminemp}}`.
 */
class m220105_091933_create_adminemp_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('admin_employee', [
            'emp_id' => $this->primaryKey(),
            'emp_name' => $this->string(30)->notNull(),
            'emp_email' => $this->string(40)->notNull(),
            'emp_phone' => $this->integer(20)->notNull(),
            'emp_pass' => $this->string(30)->notNull(),
            'created_at' => $this->datetime()->null()->defaultExpression('CURRENT_TIMESTAMP')

        ]);

    }

    public function down()
    {

        $this->dropTable('admin_employee');
        
    }
}
