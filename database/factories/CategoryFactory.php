<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['PHP', 'JAVASCRIPT', 'REACT', 'SERVIDORES', 'MYSQL', 'NOSQL', 'UI/UX']),
        'description' => $faker->sentence
    ];
});
