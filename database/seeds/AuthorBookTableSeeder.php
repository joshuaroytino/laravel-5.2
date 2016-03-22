<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

use App\Author;
use App\Book;
use App\AuthorBook;

class AuthorBookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        Author::truncate();
        Book::truncate();
        AuthorBook::truncate();

        factory(AuthorBook::class, 50)->create();

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        Model::reguard();
    }
}
