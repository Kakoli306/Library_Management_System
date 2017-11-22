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

/** @var \Illuminate\Database\Eloquent\Factory $factory */



$factory->define(App\Book::class, function (Faker\Generator $faker) {


    return [
        'title' => $faker->sentence($nbWords = 2, $variableNbWords = true, $asText = true),
        'author' => $faker->name($gender = 'male'|'female'),
        'edition' => $faker->numerify('# th edition'),
        'edition_year' => $faker->year($max = 'now'),
        'add_date' => $faker->dateTimeThisCentury($max = 'now', $timezone = date_default_timezone_get()) ,
        'book_status' => $faker->boolean,
    ];
});



