<?php

use yii\db\Migration;

/**
 * Class m180228_132754_create_student
 */
class m180228_132754_create_student extends Migration
{
    const TABLE_NAME = 'student';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
            $this->createTable(self::TABLE_NAME,[
                'id_student'     => $this->primaryKey(),
                'name'           => $this->string(200)->notNull(),
                'identification' => $this->string(10)->notNull(),
                'carreer'        => $this->string(50),
                'id_schedule'    => $this->integer()->notNull()

            ]);

            $this->addForeignKey('fk_schedule', 'student','id_schedule','schedule','id_schedule');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable(self::TABLE_NAME);
        $this->dropForeignKey('fk_schedule');
    }
}
