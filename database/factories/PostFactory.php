<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'username' => $faker->userName,
        'email' => $faker->email,
        'name' => $faker->name,
        'phone' => $faker->tollFreePhoneNumber
    ];
});
