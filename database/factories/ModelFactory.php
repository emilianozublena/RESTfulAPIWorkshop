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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'last_name' => $faker->lastName,
    ];
});

$factory->define(App\Meetup::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'location_id' => random_int(1,3),
    ];
});
$factory->define(App\Location::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->city
    ];
});

