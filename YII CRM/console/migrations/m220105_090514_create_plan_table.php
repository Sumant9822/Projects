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
            'plan_name' => $this->string(30)->notNull(),
            'validity' => $this->string(30)->notNull(),
            'plan_data' => $this->string(10)->notNull(),
            'price' => $this->text(10)->notNull(),
        ]);

    }

    public function down()
    {
        $this->dropTable('plan');
        
    }

}
