<?php

use yii\db\Migration;

/**
 * Class m180228_130432_create_schedule
 */
class m180228_130432_create_schedule extends Migration
{
    const TABLE_NAME = 'schedule';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
            $this->createTable(self::TABLE_NAME,[
                'id_schedule' => $this->primaryKey(),
                'bus'         => $this->integer()->notNull(),
                'time'        => $this->dateTime()->notNull()
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable(self::TABLE_NAME);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180228_130432_create_schedule cannot be reverted.\n";

        return false;
    }
    */
}
