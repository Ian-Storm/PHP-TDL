<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task')->insert([
        		['name'=>'Magic Ruler', 'description'=>'MRL', 'duration'=>'N/A', 'status'=>'Not Done', 'list_id'=>1],
        		['name'=>'Invasion Of Chaos', 'description'=>'IOC', 'duration'=>'N/A', 'status'=>'Done', 'list_id'=>1],
        		['name'=>'Soul Fusion', 'description'=>'SOFU', 'duration'=>'N/A', 'status'=>'Not Done', 'list_id'=>1],
        		['name'=>'Round 1', 'description'=>'First game.', 'duration'=>'30-45 Minutes', 'status'=>'Done', 'list_id'=>2],
        		['name'=>'Round 2', 'description'=>'Second game.', 'duration'=>'30-45 Minutes', 'status'=>'Not Done', 'list_id'=>2],
        		['name'=>'2v2 nummer 1', 'description'=>'First tag battle.', 'duration'=>'60+ Minutes', 'status'=>'Done', 'list_id'=>3],
        		['name'=>'2v2 nummer 2', 'description'=>'Second tag battle.', 'duration'=>'60+ Minutes', 'status'=>'Not Done', 'list_id'=>3],
        		['name'=>'Match 1', 'description'=>'First game.', 'duration'=>'45-60 Minutes', 'status'=>'Not Done', 'list_id'=>4],
        		['name'=>'Match 2', 'description'=>'Second game.', 'duration'=>'45-60 Minutes', 'status'=>'Not Done', 'list_id'=>4],
        		['name'=>'Match vs Ian', 'description'=>'Me agains Ian.', 'duration'=>'15-30 Minutes', 'status'=>'Not Done', 'list_id'=>5],
        		['name'=>'Match vs Peter', 'description'=>'Me agains Peter.', 'duration'=>'0-15 Minutes', 'status'=>'Not Done', 'list_id'=>5],
        		['name'=>'Match vs Marko', 'description'=>'Me agains Marko.', 'duration'=>'0-15 Minutes', 'status'=>'Done', 'list_id'=>5],
        	]);
    }
}