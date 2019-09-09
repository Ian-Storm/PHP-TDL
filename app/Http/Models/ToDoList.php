<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ToDoList extends Model
{
	protected $fillable = ['name', 'user_id'];
    protected $table = 'list';

    public function tasks() {
    	return $this->hasMany('App\Http\Models\Task');
    }

    public function saveList($data) {
    	return $this->create([
    		'name' => $data['list_name'],
    		'user_id' => $data['user_id']
    		]);
    }
}
