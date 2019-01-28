<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todo;

use Session;

class TodosController extends Controller
{
    //
    public function index(){
     
        $todos = Todo::orderBy('created_at','desc')->get();
        return view('admin.todo.index', compact('todos'));
    }

    public function create(){
        return view('admin.todo.create');
    }

    public function store(Request $request){
       // dd($request->all());

      $this->validate($request,[
        'name'=> 'required',
        'content' =>'required'
      ]);
        $todo = new Todo;
        $todo->name = $request->name;
        $todo->content = $request->content;
        // $todo->email = $request...
        // $todo->name = $request....
        // $tood->age  = $request....

        $todo->save();

        Session::flash('Success','Youre Todo is Ready!');

        return redirect()->route('todos');
    }

    public function delete($id){
       
      //  dd($id);

        $todo =  Todo::find($id);
        $todo->delete();
        

        Session::flash('Success','Youre Todo is Removed!');

        return redirect()->back();
    }

    public function edit($id){

        $todo = Todo::find($id);

        return view('admin.todo.edit')->with('todo', $todo);
    }

    public function update(Request $request,  $id){
          
            $this->validate($request,[

            'name' => 'required',
            'content' => 'required'

            ]);

       
        $todo = Todo::find($id);

        $todo->name = $request->name;
        $todo->content = $request->content;
        $todo->save();

        return redirect()->route('todos');
    }

    
   
public function save(Request $request, $id){

     //  dd($request->all());

     $todo = Todo::find($id);

     $todo->todo = $request->todo;
     $todo->save();

     Session::flash('Success','Youre Todo is Updated!');

     return redirect()->route('todos'); 
    }

}
