<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name'
    ];

    public function books()
    {
        return $this->belongsToMany(\App\Book::class, 'authors_books', 'author_id', 'book_id');
    }
}
