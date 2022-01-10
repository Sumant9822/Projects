<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%games}}`.
 */
class m220107_061102_create_games_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('games', [
            'gameID' => $this->primaryKey(),
            'admin_id' => $this->integer(11)->notNull(),
            'gname' => $this->string(30)->notNull(),
            'gseries' => $this->integer(30)->notNull(),
            'gspace' => $this->string(30)->notNull(),
            'gdeveloper' => $this->string(30)->notNull(),
            'gpublisher' => $this->string(30)->notNull(),
            'ggenres' => $this->string(30)->notNull(),
            'created_at' => $this->datetime()->null()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);

        $this->addForeignKey(
            'fk-games-admin_id',
            'games',
            'admin_id',
            'admin',
            'id',
            'CASCADE'
        );
        $this->addForeignKey(
            'fk-games-gseries',
            'games',
            'gseries',
            'series',
            'id',
            'CASCADE'
        );

    }

    public function down()
    {

        $this->dropForeignKey(
            'fk-games-admin_id',
            'games',
        );
        $this->dropForeignKey(
            'fk-games-gseries',
            'games',
        );
       

        $this->dropTable('games');
        
    }
}
