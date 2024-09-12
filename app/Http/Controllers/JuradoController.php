<?php

namespace App\Http\Controllers;

use App\Jurado;
use Illuminate\Http\Request;

class JuradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jurado');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createJurado');
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
     * @param  \App\Jurado  $jurado
     * @return \Illuminate\Http\Response
     */
    public function show(Jurado $jurado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jurado  $jurado
     * @return \Illuminate\Http\Response
     */
    public function edit(Jurado $jurado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jurado  $jurado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jurado $jurado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jurado  $jurado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jurado $jurado)
    {
        //
    }
}
