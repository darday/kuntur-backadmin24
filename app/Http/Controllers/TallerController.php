<?php

namespace App\Http\Controllers;

use App\Taller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TallerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['taller']=Taller::paginate(50);
        //$count['count']=$film::count();

        return view('talleres',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createTaller');
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
        $taller = request() ->except('_token');

        if($request->file('Tall_imagen')){

            $taller['Tall_imagen']=$request->file('Tall_imagen')->store('uploads','public');
        }
        $taller['created_at']= Carbon::now();
        Taller::insert($taller);
        return redirect('/ctaller')->with('Mensaje','Taller Agregado con Éxito');
        return('me guardo');

        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Taller  $taller
     * @return \Illuminate\Http\Response
     */
    public function show(Taller $taller)
    {
        $datos['taller']=Taller::paginate(50);
        return view('admin.listTaller',$datos);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Taller  $taller
     * @return \Illuminate\Http\Response
     */
    public function edit(Taller $taller,$id)
    {
        $taller=Taller::findOrFail($id);
        $taller['taller']=Taller::findOrFail($id);
        //return($noti);
        return view('admin.editTaller',compact('taller'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Taller  $taller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tall2 = request() ->except(['_token','_method']);

        $tall=Taller::findOrFail($id);
        if($request->file('Tall_imagen')){
            Storage::delete('public/'. $tall->Not_imagen);
            $tall2['Tall_imagen']=$request->file('Tall_imagen')->store('uploads','public');
        }

        $tall->update($tall2);

        return redirect('/ltaller')->with('Mensaje','Taller Modificado con Éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Taller  $taller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Taller $taller,$id)
    {
        $noti=Taller::findOrFail($id);
        if(Storage::delete('public/'. $noti->Not_imagen)){
            Taller::destroy($id);
        }
        Taller::destroy($id);


        return redirect('/ltaller')->with('Mensaje','Taller eliminado con Éxito');
    }
}
