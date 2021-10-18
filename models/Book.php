<?php


namespace app\models;


class Book
{
    public function getAuthors()
    {
        return $this->hasMany(Author::className(), ['id' => 'author_id'])
            ->viaTable('author_books', ['book_id' => 'id']);
    }
}