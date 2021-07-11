<?php

namespace App\Http\Controllers;

use App\Models\Funcionarios;
use App\Models\Cargos;
use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = Funcionarios::all();

        return view('funcionarios/index', compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargos = Cargos::all();

        return view('funcionarios/cadastrar', compact('cargos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Funcionarios::create($request->all());

        return redirect('funcionarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function show(Funcionarios $funcionarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $funcionarios = Funcionarios::find($id);
        $cargos = Cargos::all();

        return view("funcionarios/editar", compact("funcionarios", "cargos"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $funcionarios = Funcionarios::find($id);

        $funcionarios->update($request->all());

        return redirect("funcionarios");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $funcionarios = Funcionarios::find($id);

        $funcionarios->delete();

        return redirect('funcionarios');
    }
}
