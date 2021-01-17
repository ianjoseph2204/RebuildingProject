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
         $this->call(StoryCategorySeeder::class);
         $this->call(UserPositionSeeder::class);
         $this->call(UserSeeder::class);
    }
}
