<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%employee}}`.
 */
class m220105_100101_create_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('employee', [
            'id' => $this->primaryKey(),
            'emp_id' => $this->integer()->notNull(),
            'cust_id' => $this->integer()->notNull(),
        ]);

        $this->addForeignKey(
            'fk-employee-emp_id',
            'employee',
            'emp_id',
            'admin_employee',
            'emp_id',
            'CASCADE'
        );
        $this->addForeignKey(
            'fk-employee-cust_id',
            'employee',
            'cust_id',
            'customer',
            'cust_id',
            'CASCADE'
        );

    }

    public function down()
    {

        $this->dropForeignKey(
            'fk-employee-cust_id',
            'employee',
        );
        $this->dropForeignKey(
            'fk-employee-emp_id',
            'employee',
        );
       

        $this->dropTable('employee');
        
    }
}
