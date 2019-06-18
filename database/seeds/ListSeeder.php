<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('list')->insert([
        		['name' => 'Collecting Cards', 'user_id' => 1],
        		['name' => 'WCQ', 'user_id' => 1],
        		['name' => 'Local', 'user_id' => 2],
        		['name' => 'YCS', 'user_id' => 1],
        		['name' => 'Fun', 'user_id' => 2],
        	]);
    }
}
