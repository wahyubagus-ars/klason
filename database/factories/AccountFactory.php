<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Account;
use Faker\Generator as Faker;

$factory->define(Account::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->email,
        'password' => bcrypt('accountaccount'),
        'role_id' => 2
    ];
});
