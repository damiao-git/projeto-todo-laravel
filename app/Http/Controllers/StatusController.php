<?php

namespace App\Http\Controllers;

use App\Models\Classificacao;
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
            "name"=> "required",
        ]);
        $status = Status::create($request->all());
        return redirect()->route("status.index")->with("success","Created");
    }

    public function update(Request $request, Status $status)
    {
        $request->validate([
            "name"=> "required",
        ]);
        $status->update($request->all());
        redirect()->route("status.index")->with("success","Updated");
    }

    public function destroy(Status $status)
    {
        $status->delete();
    }
}
