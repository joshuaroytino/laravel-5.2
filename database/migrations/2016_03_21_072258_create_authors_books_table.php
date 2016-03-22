<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors_books', function (Blueprint $table) {
            $table->unsignedInteger('author_id');
            $table->foreign('author_id')->references('id')->on('authors')->onUpdate('cascade');
            $table->unsignedInteger('book_id');
            $table->foreign('book_id')->references('id')->on('books')->onUpdate('cascade');
            $table->primary(['author_id', 'book_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('authors_books', function (Blueprint $table) {
            $table->dropForeign('authors_books_author_id_foreign');
            $table->dropForeign('authors_books_book_id_foreign');
        });
        Schema::drop('authors_books');
    }
}
