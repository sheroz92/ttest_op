<?php

use yii\db\Migration;

/**
 * Class m200124_133546_create_table_apple
 */
class m200124_133546_create_table_apple extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('apple',[
            'id' => $this->primaryKey(),
            'color' => $this->string(20)->notNull(),
            'date_create' => $this->integer(11)->notNull(),
            'date_fall' => $this->integer(11),
            'status' => $this->tinyInteger(1)->defaultValue(0)->comment('0-in_tree, 1-fall'),
            'eat' => $this->integer(3)->defaultValue(0)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable('apple');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200124_133546_create_table_apple cannot be reverted.\n";

        return false;
    }
    */
}
