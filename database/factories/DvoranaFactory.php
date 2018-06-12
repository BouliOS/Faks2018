<?php

use App\Dvorana;
use Faker\Generator as Faker;

$factory->define(Dvorana::class, function (Faker $faker) {
    return [
            'naziv' => $faker->name(),
            'brojmjesta' => $faker->numberBetween(20, 40),
            'created_at' => $faker->dateTime(),
            'updated_at' => NULL,
    ];
});
