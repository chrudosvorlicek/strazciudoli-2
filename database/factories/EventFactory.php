<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'name' => $faker->words(3, true),
        'description' => $faker->text,
        'place' => $faker->address,
        'datetime_from' => $faker->datetime,
        'datetime_to' => $faker->datetime,
        'user_id' => 1,
        'price' => $faker->numberBetween(0, 2500),
    ];
});
