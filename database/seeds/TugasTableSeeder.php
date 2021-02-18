<?php

use Illuminate\Database\Seeder;

class TugasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Tugas::class, 20)->create();
    }
}
