<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/**
 * @param \Faker\Generator $faker
 * @return array
 */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('default'),
        'remember_token' => str_random(10),
        'api_token' => str_random(60)
    ];
});

/**
 * @param \Faker\Generator $faker
 * @return array
 */
$factory->define(App\Book::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->company,
        'isbn' => $faker->isbn13
    ];
});

/**
 * @param \Faker\Generator $faker
 * @return array
 */
$factory->define(App\Author::class, function (Faker\Generator $faker) {
    return [
        'last_name' => $faker->lastName,
        'first_name' => $faker->firstName,
        'middle_name' => $faker->lastName
    ];
});

/**
 * @param \Faker\Generator $faker
 * @return array
 */
$factory->define(App\AuthorBook::class, function (Faker\Generator $faker) {
    return [
        'author_id' => function(){
            return factory(App\Author::class)->create()->id;
        },
        'book_id' => function(){
            return factory(App\Book::class)->create()->id;
        }
    ];
});