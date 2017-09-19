<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

<<<<<<< HEAD
$factory->define(App\User::class, function (Faker $faker) {
=======
$factory->define(crud_laravel\User::class, function (Faker $faker) {
>>>>>>> 48afbb8439cbe4b34ae0738f2cfcc9909029a636
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
