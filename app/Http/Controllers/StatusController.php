<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status = Status::all();
        return view("status.index", compact("status"));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255', // Exemplo de regra de validação
        ]);

        // Cria um novo status com base nos dados recebidos
        $status = new Status();
        $status->name = $request->name; // Atribui o nome do status
        // Outros atributos, se houver

        // Salva o status no banco de dados
        $status->save();

        // Retorna uma resposta JSON de sucesso
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
