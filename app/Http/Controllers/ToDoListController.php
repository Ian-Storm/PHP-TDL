<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\ToDoList;
use Auth;

class ToDoListController extends Controller
{
	public function __construct()
	{
	    $this->middleware('auth');
	}

	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = ToDoList::where('user_id', Auth::user()->id)->get();//all ToDoLists of logged user
        return view('list', compact('lists'));
    }
}