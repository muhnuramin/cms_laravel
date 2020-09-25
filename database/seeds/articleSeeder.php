<?php

use Illuminate\Database\Seeder;

class articleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\article::class,20)->create();
    }
}
