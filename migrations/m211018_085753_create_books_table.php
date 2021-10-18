<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%books}}`.
 */
class m211018_085753_create_books_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%books}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
//            'dt_create' => $this->timestamp(),
//            'dt_update' => $this->timestamp()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%books}}');
    }
}
