<?php

namespace App\Http\Controllers;

use App\galeria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datos['film']=galeria::get();
        //$count['count']=$film::count();

        return view('galeria',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createGallery');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //galeria::save();

        $urlimages=[];
        if($request->hasFile('Foto')){
            $imagenes=$request->file('Foto');
            //dd($images);
            foreach($imagenes as $imagen){
                $nombre = $imagen->getClientOriginalName();
                $ruta='img/galeria';
                $imagen->move($ruta,$nombre);
                $urlimages[]['Foto']=$nombre;


            }
            galeria::insert($urlimages);

        }
        return $urlimages;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function show(galeria $galeria)
    {
        $datos['film']=galeria::paginate(20);
        //$count['count']=$film::count();

        return view('admin.listGallery',$datos);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function edit(galeria $galeria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, galeria $galeria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         // return ('destroy;');
         $film=galeria::findOrFail($id);
         if(Storage::delete('img/galeria/'. $film->Foto)){
             galeria::destroy($id);
         }
         galeria::destroy($id);


         return redirect('/lgallery')->with('Mensaje','Foto eliminada con Éxito');
    }
}
