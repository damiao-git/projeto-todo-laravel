<?php

namespace App\Http\Controllers;

use App\Models\Classificacao;
use Illuminate\Http\Request;

class ClassificacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classificacao = Classificacao::all();
        return view("", compact(""));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Classificacao $classificacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classificacao $classificacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Classificacao $classificacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classificacao $classificacao)
    {
        //
    }
}
