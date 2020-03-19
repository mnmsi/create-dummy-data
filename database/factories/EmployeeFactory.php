<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'username' => $faker->userName,
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'email' => $faker->companyEmail,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'city' => $faker->city,
        'state' => $faker->state,
        'zip-code' => $faker->postcode
    ];
});
