<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Type::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'label' => $faker->text(5)
    ];
});
