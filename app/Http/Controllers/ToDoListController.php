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
        return view('list.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('list.create');
    }

    /**
     * Store a newly created resource in storage.(This is the create save)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = ['list_name' => $request->listname, 'user_id' => Auth::user()->id];
        $list = new ToDoList;
        $list->saveList($data); 
        return redirect()->route('list.index')->with('success', "Success! List  '".$request->listname."' created.");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list = ToDoList::findOrFail($id);
        return view('list.edit', compact('list'));
    }

    /**
     * Update the specified resource in storage.(This is the edit save)
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $list = ToDoList::findOrFail($id);
        $list->name = $request->listname;
        $list->save();
        return redirect()->route('list.index')->with('success', "Success! List  '".$request->listname."' updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $list = ToDoList::findOrFail($id);
        $list->delete();
        return redirect()->route('list.index')->with('success', 'Success! List deleted.');
    }
}