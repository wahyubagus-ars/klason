<?php

use Faker\Generator as Faker;

$factory->define(App\ProfileSiswa::class, function (Faker $faker) {
    return [
        'account_id' =>$faker->unique()->numberBetween(1, App\Account::count()),
        'name' => $faker->name,
        'nisn' => $faker->unique()->randomNumber(8),
        'no_absen' => $faker->unique()->randomNumber(2),
        'jabatan_id' => 7,
        'avatar' => null,
        'gender' => $faker->randomElement(['male', 'female']),
        'no_hp' => 89883630091,
        'no_hp_wali' => 89883630091
    ];
});
