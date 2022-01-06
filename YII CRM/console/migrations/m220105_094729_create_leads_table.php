<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%leads}}`.
 */
class m220105_094729_create_leads_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('leads', [
            'lead_id' => $this->primaryKey(),
            'lead_name' => $this->string()->notNull(),
            'created_at' => $this->datetime()->null()->defaultExpression('CURRENT_TIMESTAMP'),
            'plan_id' => $this->integer()->notNull(),

        ]);

        $this->addForeignKey(
            'fk-leads-plan_id',
            'leads',
            'plan_id',
            'plan',
            'plan_id',
            'CASCADE'
        );

    }

    public function down()
    {

        $this->dropForeignKey(
            'fk-leads-plan_id',
            'leads'
        );
       

        $this->dropTable('leads');
        
    }
}
