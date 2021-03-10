<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Faker\Provider\Uuid;


$factory->define(Product::class, function (Faker $faker) {
    return [
        //
        'category_id' => 1,
        'name' => $faker->name,
        'sku' => $faker->uuid,
        'description' => $faker->sentence,
        'images' => $faker->imageUrl($width = 640, $height = 480),
        'created_at' => now(),
    ];
});
