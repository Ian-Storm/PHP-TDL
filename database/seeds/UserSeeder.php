<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        		['name'=>'Ian', 'email'=>'ian@test.com','password'=>bcrypt(123456)],
        		['name'=>'Bailey', 'email'=>'bailey@test.com','password'=>bcrypt(123456)],
        	]);
    }
}
