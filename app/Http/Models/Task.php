<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	protected $fillable = [ 'name', 'description', 'duration', 'status', 'list_id'];
    protected $table = 'task';

    public function list() {
    	return $this->belongsTo('App\Http\Models\ToDoList');
    }

    public function saveTask($data) {
    	return $this->create([
    		'name' => $data['task_name'],
    		'description' => $data['task_description'],
    		'duration' => $data['task_duration'],
    		'status' => $data['task_status'],
    		'list_id' => $data['list_id']
    		]);
    }
}
