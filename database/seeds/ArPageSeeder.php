<?php

use Illuminate\Database\Seeder;

class ArPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        factory(\App\Front\Arpage::class,20)->create();
    }
}
