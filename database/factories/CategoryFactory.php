<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['PHP', 'JAVA', 'JAVASCRIPT', 'DISEÑO WEB', 'SERVIDORES', 'MYSQL', 'NOSQL', 'BIGDATA', 'AMAZON WEB SERVICES', 'PROGRAMACION BASICA']),
        'description' => $faker->sentence,
    ];
});
