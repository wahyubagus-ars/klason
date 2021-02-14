<?php

use Illuminate\Database\Seeder;

class ProfileSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ProfileSiswa::class,22)->create();
    }
}
