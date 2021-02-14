<?php

use Faker\Generator as Faker;

$factory->define(App\ProfileGuru::class, function (Faker $faker) {
    return [
        'account_id' =>$faker->unique()->numberBetween(23, App\Account::count()),
        'name' => $faker->name,
        'nip' => $faker->unique()->randomNumber(8),
        'jabatan_id' => 1,
        'avatar' => null,
        // 'gender' => $faker->randomElement(['male', 'female']),
        'no_hp' => 89883630091,
    ];
});
