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
        $this->call(ClientTableSeeder::class);
        $this->call(SiteTableSeeder::class);
        $this->call(TankTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(TodoTableSeeder::class);
    }
}
