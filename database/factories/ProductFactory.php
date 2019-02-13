<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->city,
        'description' => $faker->sentence(),
        'price' => $faker->randomFloat(2,100,1000)
    ];
});
