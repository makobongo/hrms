<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\EmployeeDetail;
use Faker\Generator as Faker;

$factory->define(EmployeeDetail::class, function (Faker $faker) {
    return [
        'certifications' => $faker->text,
        'experience' => $faker->paragraph,
        'skills' => $faker->text,
        'employee_id' => factory(App\Employee::class)
    ];
});
