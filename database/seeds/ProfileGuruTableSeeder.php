<?php

use Illuminate\Database\Seeder;

class ProfileGuruTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\ProfileGuru::class, 1)->create();
    }
}
