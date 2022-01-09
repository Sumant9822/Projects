<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%series}}`.
 */
class m220107_060730_create_series_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('series', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'create_date' => $this->datetime()->null()->defaultExpression('CURRENT_TIMESTAMP'),

        ]);

    }

    public function down()
    {


        $this->dropTable('series');
        
    }

}
