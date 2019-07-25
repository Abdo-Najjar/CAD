<?php

use Illuminate\Database\Seeder;

class SubItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\Front\Subitem::class,8)->create();

    }
}
