<?php

namespace App\Http\Controllers;

use App\Models\Cargos;
use Illuminate\Http\Request;

class CargosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = Cargos::all();

        return view('cargos/index',compact('cargos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cargos/cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cargos::create($request->all());

        return redirect('cargos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cargos  $cargos
     * @return \Illuminate\Http\Response
     */
    public function show(Cargos $cargos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cargos  $cargos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cargos = Cargos::find($id);

        return view("cargos/editar",compact("cargos"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cargos  $cargos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cargos = Cargos::find($id);

        $cargos->update($request->all());

        return redirect("cargos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cargos  $cargos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cargos = Cargos::find($id);

        $cargos->delete();

        return redirect('cargos');
    }
}
