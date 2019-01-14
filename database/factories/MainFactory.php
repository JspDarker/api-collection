<?php

use Faker\Generator as Faker;

$factory->define(\App\GroupRole::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement([
            'ceo',
            'leader',
            'manager',
            'teacher',
            'student'
        ])
    ];
});

$factory->define(\App\Account::class, function (Faker $faker) {
    return [
        'group_role_id'=> \App\GroupRole::all()->random()->id,
        'name' => $faker->name,
    ];
});