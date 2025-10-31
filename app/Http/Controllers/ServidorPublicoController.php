<?php

namespace App\Http\Controllers;

use App\Models\servidorPublico;
use Illuminate\Http\Request;

class ServidorPublicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('modulos.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('modulos.contacto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\servidorPublico  $servidorPublico
     * @return \Illuminate\Http\Response
     */
    public function show(servidorPublico $servidorPublico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\servidorPublico  $servidorPublico
     * @return \Illuminate\Http\Response
     */
    public function edit(servidorPublico $servidorPublico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\servidorPublico  $servidorPublico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, servidorPublico $servidorPublico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\servidorPublico  $servidorPublico
     * @return \Illuminate\Http\Response
     */
    public function destroy(servidorPublico $servidorPublico)
    {
        //
    }
}
