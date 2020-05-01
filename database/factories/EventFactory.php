<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'title' => $faker->colorName,
        'date' => $faker->date(),
        'time' => $faker->time(),
        'place' => $faker->city,
        'description' => $faker->text,
        'image' => $faker->image('public/storage/images', 400, 300, null, false),
        'creator_id' => factory(\App\User::class)->create(),
    ];
});