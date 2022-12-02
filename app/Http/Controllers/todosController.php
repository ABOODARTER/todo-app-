<?php

namespace App\Http\Controllers;
use App\Models\todosmodel;
use Illuminate\Http\Request;

class todosController extends Controller
{
    // 
    public function alltodos(){

        $todos = todosmodel::all();
    
        //three waay for return valure to the view 
           //return view('todos') ->with ('todos',$todos);
           //return view('todos',['todos'=>$todos]);
            return view('todos',compact('todos'));
    }
    public function show( $showtodo){
        $showtodo = todosmodel::find($showtodo); 
        return view('show', compact('showtodo')) ;
    }

    public function create(){                                      
        return view('create') ;
    }

    public function save(Request $request){   
        //الطرييق الاولى في التحقق
      //  $request->validate([
      //      'todotitle'=>'required|min6',
      //      'todocomint'=>'required|min6',
      //      'tododescreption'=>'required|min6',
      //  ]);
        //الطرية الثانية في التحقق 
        $this->validate($request,[
            'todotitle'=>'required',
            'todocomint'=>'required',
            'tododescreption'=>'required'
        ]);


        
        $todo = new todosmodel();
        $todo->title = $request->todotitle;
        $todo->comint = $request->todocomint;
        $todo->descreption = $request->tododescreption;
        $todo->save();
        session()->flash('success','todo created successfully');  
        return redirect('/') ;
    }


    public function edit(  $todo){
        
        $todo = todosmodel::find($todo);
        return view('edit',compact('todo')) ;
    
    }
    public function save_edit(Request $request,  $todo){   
        //الطرييق الاولى في التحقق
      //  $request->validate([
      //      'todotitle'=>'required|min6',
      //      'todocomint'=>'required|min6',
      //      'tododescreption'=>'required|min6',
      //  ]);
        //الطرية الثانية في التحقق 
        $this->validate($request,[
            'todotitle'=>'required',
            'todocomint'=>'required',
            'tododescreption'=>'required'
        ]);
        $todo = todosmodel::find($todo);
        $todo->title = $request->todotitle;
        $todo->comint = $request->todocomint;
        $todo->descreption = $request->tododescreption;
        $todo->save();
        session()->flash('success','todo Updated successfully');
        return redirect('/') ;
    } 

    public function delet( $todo){

        $todo = todosmodel::find($todo);
        session()->flash('success','todo deleted successfully');
        return redirect('/') ;

    }
    public  function compleate_statue($todo){

        $todo = todosmodel::find($todo);
        $todo->completed = !$todo->completed;
        $todo->save();
        return redirect('/todos') ;
    }

}