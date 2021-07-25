<?php

namespace App\Http\Controllers;

use App\Models\tasks;
use Illuminate\Http\Request;

class taskcontroller extends Controller
{
    public function index(){
        $tasks = tasks::orderBy('complete_at')
        ->orderBy('id','DESC')     
        ->get();
        return view ('Tasks.index',[
            'tasks' => $tasks,
        ]);
    }



    public function create(){
        return view ('Tasks.create');
    }


    public function store(){
        request()->validate(['description'=>'required|max:255',]);

        tasks ::create([
            'description' => request ('description'),
        ]);
        return redirect ('/');
    }

    public function update($id){
        $tasks = tasks::where('id', $id) ->first();
        $tasks ->complete_at = now();
        $tasks ->save();
        return redirect('/');
    }

    public function delete($id){
        $tasks = tasks::where('id', $id)->first();
        $tasks ->delete();
        return redirect('/');
    
    }
}
