<?php

namespace App\Http\Controllers;
use App\Models\todosmodel;
use Illuminate\Http\Request;
use App\Models\user;


class homecontroller extends Controller
{
    public function index(){
        $todos_list= todosmodel::all();
        return view('create');
        //return view('welcome',compact('todos_list'));
    }
}
