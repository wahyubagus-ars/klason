<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(\App\Tugas::class, function (Faker $faker) {
    return [
        'title' => 'kerjakan paket hal 40',
        'mapel_id' => $faker->numberBetween(1, App\Mapel::count()),
        'deskripsi' => $faker->text(150),
        'deadline' => date('Y-m-d'),
    ];
});
