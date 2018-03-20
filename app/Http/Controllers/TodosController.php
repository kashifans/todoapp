<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

       return view('todo')->with('todos', $todos);
    }

    public function create(Request $request)
    {
        $todo = new Todo;
        $todo->todo = $request->todo;
        $todo->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        return view('edit')->with('todo', Todo::find($id));
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->todo = $request->todo;
        $todo->save();

        return redirect()->route('todo');
    }

    public function complete($id)
    {
        $todo = Todo::find($id);
        $todo->completed = 1;
        $todo->save();

        return redirect()->back();
    }
}
