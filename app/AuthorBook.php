<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthorBook extends Model
{
    protected $table = 'authors_books';

    protected $fillable = [
        'author_id',
        'book_id'
    ];
}
