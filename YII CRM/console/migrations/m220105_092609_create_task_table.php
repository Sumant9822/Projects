<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%task}}`.
 */
class m220105_092609_create_task_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('task', [
            'task_id' => $this->primaryKey(),
            'task_name' => $this->string(30)->notNull(),
            'task_desc' => $this->string(30)->notNull(),
            'start_date' => $this->datetime()->null()->defaultExpression('CURRENT_TIMESTAMP'),
            'emp_id' => $this->integer(11)->notNull(),

        ]);

        $this->addForeignKey(
            'fk-task-emp_id',
            'task',
            'emp_id',
            'admin_employee',
            'emp_id',
            'CASCADE'
        );

    }

    public function down()
    {

        $this->dropForeignKey(
            'fk-task-emp_id',
            'task'
        );
       

        $this->dropTable('task');
        
    }
}
