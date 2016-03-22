<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

/**
 * Class Book
 * @package App
 */
class Book extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'isbn'
    ];

    public function authors()
    {
        return $this->belongsToMany(\App\Author::class, 'authors_books', 'book_id', 'author_id');
    }
}
