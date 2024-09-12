<?php

namespace App\Http\Controllers;

use App\Fechaprgramacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FechaprgramacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return ("hola");
        return view("admin.createFechapro");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->user()->authorizeRole('admin');
        $usuario = request() ->except('_token');

        if($request->file('imgfecha')){

            $usuario['imgfecha']=$request->file('imgfecha')->store('uploads','public');
        }
      Fechaprgramacion::insert($usuario);
        return redirect('/cfechapro')->with('Mensaje','Fecha Agregada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fechaprgramacion  $fechaprgramacion
     * @return \Illuminate\Http\Response
     */
    public function show(Fechaprgramacion $fechaprgramacion)
    {

        $datos['fecha']=Fechaprgramacion::paginate(50);
        return view('admin.listfechapro',$datos);
        return("show");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fechaprgramacion  $fechaprgramacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Fechaprgramacion $fechaprgramacion,$id)
    {

        $fecha=Fechaprgramacion::findOrFail($id);
        $fecha['fechap']=Fechaprgramacion::findOrFail($id);
        //return($noti);
        return view('admin.editFechapro',compact('fecha'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fechaprgramacion  $fechaprgramacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->user()->authorizeRole('admin');

        $film2 = request() ->except(['_token','_method']);

        $film=Fechaprgramacion::findOrFail($id);
        if($request->file('imgfecha')){
            Storage::delete('public/'. $film->film_imagen);
            $film2['imgfecha']=$request->file('imgfecha')->store('uploads','public');
        }

        $film->update($film2);

        return redirect('/lfechapro')->with('Mensaje','Fecha Modificadas con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fechaprgramacion  $fechaprgramacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fechaprgramacion $fechaprgramacion,$id)
    {

        $film=Fechaprgramacion::findOrFail($id);
        if(Storage::delete('public/'. $film->film_imagen)){
            Fechaprgramacion::destroy($id);
        }
        Fechaprgramacion::destroy($id);
        return redirect('/lfechapro')->with('Mensaje','Fecha eliminada con éxito');
    }
}
