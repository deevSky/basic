<?php


namespace app\models;


class Author
{
    public function getBooks()
    {
        return $this->hasMany(Book::className(), ['id' => 'book_id'])
            ->viaTable('author_books', ['author_id' => 'id']);
    }
}