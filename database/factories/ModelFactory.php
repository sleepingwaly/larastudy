<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Http\Models\Admin::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'username' => $faker->unique()->name,
        'phone' => $faker->unique()->regexify('1\d{10}'),
        'password' => $password ?: $password = bcrypt('123123'),
        'remember_token' => str_random(10),
        'avatar' => '/Uploads/20170611/149717775898939.png',
        'created_at' => date('Y-m-d H:i:s', time()),
        'updated_at' => date('Y-m-d H:i:s', time())
    ];
});