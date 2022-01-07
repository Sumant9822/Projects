<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%customer}}`.
 */
class m220105_095345_create_customer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('customer', [
            'cust_id' => $this->primaryKey(),
            'cust_name' => $this->string(30)->notNull(),
            'lead_id' => $this->integer(11)->notNull(),
            'plan_id' => $this->integer(11)->notNull(),

        ]);

        $this->addForeignKey(
            'fk-customer-lead_id',
            'customer',
            'lead_id',
            'leads',
            'lead_id',
            'CASCADE'
        );
        $this->addForeignKey(
            'fk-customer-plan_id',
            'customer',
            'plan_id',
            'plan',
            'plan_id',
            'CASCADE'
        );

    }

    public function down()
    {

        $this->dropForeignKey(
            'fk-customer-lead_id',
            'leads'
        );
        $this->dropForeignKey(
            'fk-leads-plan_id',
            'plan'
        );
       

        $this->dropTable('customer');
        
    }
}
