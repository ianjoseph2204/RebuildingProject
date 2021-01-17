<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserPositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_positions')->insert([
            ['name' => 'Founder & Executive Director'],
            ['name' => 'Founder & Operation Director'],
            ['name' => 'Marketing Director'],
            ['name' => 'Secretary & Program Development Lead'],
            ['name' => 'Program Development Lead'],
            ['name' => 'Program Development Team']
        ]);
    }
}
