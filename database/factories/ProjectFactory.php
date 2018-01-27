<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Admin\Project::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'description' => $faker->text(200),
        'image' => $faker->imageUrl(300,300),
        'url_web' => $faker->url,
        'url_android' => $faker->url,
        'url_ios' => $faker->url,
        'technology' => $faker->languageCode,
        'client_id' => function () {
            return factory(App\Models\Client::class)->create()->id;
        },
        'type_id' => function () {
            return factory(App\Models\Type::class)->create()->id;
        },
    ];
});
