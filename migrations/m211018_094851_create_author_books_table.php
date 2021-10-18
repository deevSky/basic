<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%author_books}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%author}}`
 * - `{{%book}}`
 */
class m211018_094851_create_author_books_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%author_books}}', [
            'id' => $this->primaryKey(),
            'author_id' => $this->integer()->notNull(),
            'book_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `author_id`
        $this->createIndex(
            '{{%idx-author_books-author_id}}',
            '{{%author_books}}',
            'author_id'
        );

        // add foreign key for table `{{%author}}`
        $this->addForeignKey(
            '{{%fk-author_books-author_id}}',
            '{{%author_books}}',
            'author_id',
            '{{%authors}}',
            'id',
            'CASCADE'
        );

        // creates index for column `book_id`
        $this->createIndex(
            '{{%idx-author_books-book_id}}',
            '{{%author_books}}',
            'book_id'
        );

        // add foreign key for table `{{%book}}`
        $this->addForeignKey(
            '{{%fk-author_books-book_id}}',
            '{{%author_books}}',
            'book_id',
            '{{%books}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%author}}`
        $this->dropForeignKey(
            '{{%fk-author_books-author_id}}',
            '{{%author_books}}'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            '{{%idx-author_books-author_id}}',
            '{{%author_books}}'
        );

        // drops foreign key for table `{{%book}}`
        $this->dropForeignKey(
            '{{%fk-author_books-book_id}}',
            '{{%author_books}}'
        );

        // drops index for column `book_id`
        $this->dropIndex(
            '{{%idx-author_books-book_id}}',
            '{{%author_books}}'
        );

        $this->dropTable('{{%author_books}}');
    }
}
