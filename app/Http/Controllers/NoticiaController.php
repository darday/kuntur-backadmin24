<?php

namespace App\Http\Controllers;

use App\Film;
use App\Noticia;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Framework\Error\Notice;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function noticias(Noticia $noticia){
        $datos['noticias']=Noticia::orderBy('id','DESC')->get();
        $count['count']=$noticia::count();
        return view('noticias',$datos,$count);
    }

    public function noticia(Noticia $noticia, $id){
        //return

        $datos['noticia']=Noticia::findOrFail($id);
        return view('noticia',$datos);
        return ($datos);
        $datos['noticias']=Noticia::paginate(50);
        $count['count']=$noticia::count();
        return view('noticia',$datos,$count);
    }

    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createNotice');
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
       // $request->user()->authorizeRole('admin');
        $usuario = request() ->except('_token');

        if($request->file('Not_imagen')){

            $usuario['Not_imagen']=$request->file('Not_imagen')->store('uploads','public');
        }
        $usuario['Created_at']= Carbon::now();
        Noticia::insert($usuario);
        return redirect('/cnoticia')->with('Mensaje','Film Agregado con Éxito');
        return('me guardo');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function show(Noticia $noticia)
    {
        $datos['notice']=Noticia::paginate(50);
        return view('admin.listNotice',$datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticia $noticia, $id)
    {
        $noti=Noticia::findOrFail($id);
        $noti['noticia']=Noticia::findOrFail($id);
        //return($noti);
        return view('admin.editNotice',compact('noti'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return $request;
        $noti2 = request() ->except(['_token','_method']);

        $noti=Noticia::findOrFail($id);
        if($request->file('Not_imagen')){
            Storage::delete('public/'. $noti->Not_imagen);
            $noti2['Not_imagen']=$request->file('Not_imagen')->store('uploads','public');
        }

        $noti->update($noti2);

        return redirect('/editnotice/'.$id.'/edit')->with('Mensaje','Película Modificadas con Éxito');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noticia $noticia,$id)
    {
        $noti=Noticia::findOrFail($id);
        if(Storage::delete('public/'. $noti->Not_imagen)){
            Noticia::destroy($id);
        }
        Noticia::destroy($id);


        return redirect('/listnotice')->with('Mensaje','Noticia eliminada con Éxito');
    }

    public function noticiaKuntur(){
        return view('noticiaKunturGanador');
    }


    //////////////////////////////////////API///////////////////////////////////////

    public function api_listar_noticias(){
        $datos['noticias']=Noticia::orderBy('id','DESC')->get();
        // $count['count']=$noticia::count();
        return($datos['noticias']);
    }


}
