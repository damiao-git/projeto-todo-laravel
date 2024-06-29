<?php

namespace App\Http\Controllers;

use App\Models\TypeUser;
use Illuminate\Http\Request;

class TypeUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeUser = TypeUser::all();
        return view("typeUser.index", compact("typeUser"));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=> "required",
        ]);
        $typeUser = TypeUser::create($request->all());

        return redirect()->route("typeUser.index")->with("success","Created");
    }

    public function update(Request $request, TypeUser $typeUser)
    {
        $request->validate([
            "name"=> "required",
        ]);

        $typeUser->update($request->all());
        return redirect()->route("typeUser.index")->with("success","");
    }

    public function destroy(TypeUser $typeUser)
    {
        $typeUser->delete();
    }
}
