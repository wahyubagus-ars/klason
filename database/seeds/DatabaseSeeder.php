<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // $this->call([ProfileSiswaSeeder::class]);
        // $this->call([AccountSeeder::class]);
        // $this->call([ProfileGuruTableSeeder::class]);
        $this->call([TugasTableSeeder::class]);
    }
}
