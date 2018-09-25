<?php

use Faker\Generator as Faker;
use App\Models\Product;


$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => 'iphone',
        'description' => 'iphone',
        'image' => 'iphone', // secret
        'thumbnail' => 'iphone',
        'price' => 200.18,
    ];
});