<?php

namespace App\Http\Controllers;

use App\Ej;
use Illuminate\Http\Request;

class EjController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts/Usuario/crearUsuario');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario= new Ej; //creacion de instancia de modelo
        $usuario->name=$request['usuarioNombre'];
        
        $usuario->save();

        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ej  $ej
     * @return \Illuminate\Http\Response
     */
    public function show(Ej $ej)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ej  $ej
     * @return \Illuminate\Http\Response
     */
    public function edit(Ej $ej)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ej  $ej
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ej $ej)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ej  $ej
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ej $ej)
    {
        //
    }
}
