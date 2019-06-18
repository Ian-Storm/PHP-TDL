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
        		['name'=>'Magic Ruler', 'description'=>'tekst', 'duration'=>'N/A', 'status'=>'Not Done', 'list_id'=>1],
        		['name'=>'A task name 2', 'description'=>'lolololololol', 'duration'=>'5 more minutes', 'status'=>'Done', 'list_id'=>1],
        		['name'=>'A task name 3', 'description'=>'lolololololol', 'duration'=>'5 more minutes', 'status'=>'Not Done', 'list_id'=>1],
        		['name'=>'A task name 4', 'description'=>'lolololololol', 'duration'=>'5 more minutes', 'status'=>'Done', 'list_id'=>2],
        		['name'=>'A task name 5', 'description'=>'lolololololol', 'duration'=>'5 more minutes', 'status'=>'Not Done', 'list_id'=>2],
        		['name'=>'A task name 6', 'description'=>'lolololololol', 'duration'=>'5 more minutes', 'status'=>'Done', 'list_id'=>3],
        		['name'=>'A task name 7', 'description'=>'lolololololol', 'duration'=>'5 more minutes', 'status'=>'Not Done', 'list_id'=>3],
        		['name'=>'A task name 8', 'description'=>'lolololololol', 'duration'=>'5 more minutes', 'status'=>'Not Done', 'list_id'=>4],
        		['name'=>'A task name 9', 'description'=>'lolololololol', 'duration'=>'5 more minutes', 'status'=>'Done', 'list_id'=>4],
        		['name'=>'A task name 10', 'description'=>'lolololololol', 'duration'=>'5 more minutes', 'status'=>'Not Done', 'list_id'=>5],
        		['name'=>'A task name 11', 'description'=>'lolololololol', 'duration'=>'5 more minutes', 'status'=>'Not Done', 'list_id'=>5],
        		['name'=>'A task name 12', 'description'=>'lolololololol', 'duration'=>'5 more minutes', 'status'=>'Done', 'list_id'=>5],
        	]);
    }
}