<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{

    public function index()
    {
        $status = Status::all();
        return view("status.index", compact("status"));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $status = new Status();
        $status->name = $request->name;
        $status->save();
        
        return response()->json(['message' => 'Status criado com sucesso', 'status' => $status], 201);
    }

    public function update(Request $request, $id)
    {
        $status = Status::find($id);
        $request->validate([
            "name"=> "required",
        ]);
        $status->update($request->all());
        
        return response()->json(['message' => 'Status editado com sucesso', 'status' => $status], 201);
    
    }

    public function destroy($id)
    {

        $status = Status::find($id);
        if($status){
            $status->delete();
        }
        return response()->json(['message' => 'Status excluido com sucesso', 'status' => $status], 201);
    }
}
