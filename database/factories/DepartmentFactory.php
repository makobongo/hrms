<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Department;
use Faker\Generator as Faker;

$factory->define(App\Department::class, function (Faker $faker) {
    return [
        'department' => $faker->name,
        'user_id' => factory(App\User::class)
    ];
});
