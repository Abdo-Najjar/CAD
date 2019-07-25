<?php

use Illuminate\Database\Seeder;

class EnPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\Front\Enpage::class,20)->create();

    }
}
