<?php

use Faker\Generator as Faker;

$factory->define(\App\Film::class, function (Faker $faker) {
    return [
        'name' => $faker->text(5)
    ];
});

$factory->define(\App\Actor::class, function (Faker $faker) {
    return [
        'name' => $faker->firstNameMale
    ];
});

$factory->define(\App\FilmActor::class, function (Faker $faker) {
    return [
        'film_id'  => \App\Film::all()->random()->id,
//        'actor_id' => \App\Actor::all()->random()->id,
        'actor_id' => $faker->numberBetween(1,3),
        //'votes'         => $faker->numberBetween(1,5)
    ];
});