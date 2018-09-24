<?php

use Illuminate\Database\Seeder;

class TankTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
	 factory(App\Tank::class, 100)->create();	
    }
}
