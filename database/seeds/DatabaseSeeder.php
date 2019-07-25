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
        // $this->call(UsersTableSeeder::class);
        $this->call(ArPageSeeder::class);
        $this->call(EnPageSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(SubItemSeeder::class);



    }
}
