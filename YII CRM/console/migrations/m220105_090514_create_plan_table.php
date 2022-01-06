<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%plan}}`.
 */
class m220105_090514_create_plan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    
    public function up()
    {
        $this->createTable('plan', [
            'plan_id' => $this->primaryKey(),
            'plan_name' => $this->string()->notNull(),
            'validity' => $this->string()->notNull(),
            'plan_data' => $this->string()->notNull(),
            'price' => $this->text()->notNull(),
        ]);

    }

    public function down()
    {
        $this->dropTable('plan');
        
    }

}
