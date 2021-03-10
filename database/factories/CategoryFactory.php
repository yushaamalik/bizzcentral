<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Category;

$factory->define(Category::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'description' => $faker->sentence,
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'created_at' => now(),

    ];
});
