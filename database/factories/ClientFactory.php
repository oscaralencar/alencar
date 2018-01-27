<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'url' => $faker->url,
        'image' => $faker->imageUrl(300, 300)
    ];
});
