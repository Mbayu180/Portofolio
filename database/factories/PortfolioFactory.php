<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Portfolio;
use Faker\Generator as Faker;

$factory->define(Portfolio::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(),
        'image' => 'Ikan-25-01-2022.jpg',
        'description' => $faker->sentences(),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
