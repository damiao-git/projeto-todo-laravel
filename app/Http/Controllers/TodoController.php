<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::orderBy("created_at", "desc")->paginate(10);
        return view("todo.index", compact("todos"));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "tarefa" => "required|min:3",
        ]);
        $todo = Todo::create($request->all());

        return redirect()->route("index")->with("success", "Tarefa salva");
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "tarefa" => "required|min:3",
        ]);
        Todo::update($request->all());

        return redirect()->route("index")->with("success", "Tarefe atualizada com sucesso!");
    }

    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);

        $todo->delete();
        
        return redirect()->route("index")->with("success", "Tarefe deletada com sucesso!");
    }
}
