<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
      'firstname' => $faker -> firstName(),
      'lastname' => $faker -> lastname(),
      'date_of_birth' => $faker -> date(),
      'private_code' => $faker -> isbn13(),
    ];
});
