<?php

use yii\db\Migration;

/**
 * Class m200710_055400_phones
 */
class m200710_055400_phones extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('phones', [
            'id' => $this->primaryKey(),
            'phone' => $this->string()->notNull(),
            'user_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('phones');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200710_055400_phones cannot be reverted.\n";

        return false;
    }
    */
}
