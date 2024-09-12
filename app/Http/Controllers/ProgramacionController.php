<?php

namespace App\Http\Controllers;

use App\calificacion_film_user;
use App\Fechaprgramacion;
use App\Film;
use App\Programacion;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProgramacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function redir(Request $request,$id){

        if(Auth::user()){

            $id_user['id_user']=Auth::user()->id;
            $datos['film']=Film::findOrFail($id);
            $comen['comentario'] = DB::table('comentarios')->select('com_Descripcion','user_id')->where('film_id',$id)-> get();

            $svoto=calificacion_film_user::where('user_id',$id_user)->where('film_id',$id)->count();
            $users['user'] = DB::table('users')
            ->join('comentarios', 'users.id', '=', 'comentarios.user_id')
            ->select('comentarios.id','users.name','users.img','comentarios.com_Descripcion')
            ->where('comentarios.film_id', '=', $id)->orderBy('comentarios.id','DESC')
            ->get();
            dd($users['user'] );
           //return $users['user'];


                return view('pelicula',$datos,$users)->with('vas',$svoto);

            }
            else{

                $users['user'] = DB::table('users')
                ->join('comentarios', 'users.id', '=', 'comentarios.user_id')
                ->select('users.name','users.img','comentarios.com_Descripcion')
                ->where('comentarios.film_id', '=', $id)
                ->get();
            $datos['film']=Film::findOrFail($id);

             return view('pelicula',$datos,$users)->with('vas',5);
            }





    }
    public function index()
    {

        $dato['pro'] = DB::table('programacions')
        ->join('films', 'films.id', '=', 'programacions.pro_Film')
        ->select('programacions.pro_Fecha','films.id','programacions.pro_Hini','programacions.pro_Hfin','programacions.pro_Director','programacions.pro_ver','films.film_Titulo')
        ->get();

        $dato['pro2'] = DB::table('programacions')
        ->join('films', 'films.id', '=', 'programacions.pro_Film')
        ->select('programacions.pro_Fecha','programacions.pro_Hini','programacions.pro_Hfin','programacions.pro_Director','programacions.pro_ver','films.film_Titulo')
        ->get();

        //dd($dato['progra']);
     //   Recarga::orderBy('fecha_recarga','DESC')->with('usuario')->get();
        //$dato["progra"]=Programacion::orderBy('pro_Fecha','asc')->get();
        $dato['fechajoin'] = DB::table('fechaprgramacions')
        ->join('programacions', 'fechaprgramacions.id', '=', 'programacions.pro_Fecha')
        ->select('fechaprgramacions.fecha','programacions.pro_Film')
        ->get();


       // $hoy["hoy"]=Carbon::now();
        $ldate["hoy"] = date('Y-m-d');




        $dato["fecha"]=Fechaprgramacion::orderBy('fecha','asc')->get();


        return view('programacion',$dato,$ldate);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dato['film']=Film::get();
        $dato2["fecha"]=Fechaprgramacion::orderBy('fecha','asc')->get();

        return view('admin.createProgramacion',$dato,$dato2);
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
        $programacion = request() ->except('_token');

        //return $programacion;
        if($request->file('pro_imgDia')){

            $programacion['pro_imgDia']=$request->file('pro_imgDia')->store('uploads','public');
        }
      Programacion::insert($programacion);
        return redirect('/cprogramacion')->with('Mensaje','Film Agregado a la Programación');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Programacion  $programacion
     * @return \Illuminate\Http\Response
     */
    public function show(Programacion $programacion)
    {
        //$datos["datos"]=Programacion::get();

        $dato['datos'] = DB::table('fechaprgramacions')
        ->join('programacions', 'fechaprgramacions.id', '=', 'programacions.pro_Fecha')
        ->join('films','films.id','=','programacions.pro_Film' )
        ->select('fechaprgramacions.fecha','fechaprgramacions.imgfecha','films.film_Titulo','programacions.pro_Film','programacions.pro_Hini','programacions.pro_Hfin','programacions.id')
        ->orderBy('fechaprgramacions.fecha','DESC')
        ->get();

        //dd($dato['datos']);
        return view('admin.listProgramacion',$dato);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Programacion  $programacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $prog=Programacion::findOrFail($id);
        $dato['film']=Film::get();
        $dato["fecha"]=Fechaprgramacion::orderBy('fecha','asc')->get();

        return view('admin.editProgramacion',compact('prog'),$dato);


        //return view('admin.editProgramacion');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Programacion  $programacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $noti2 = request() ->except(['_token','_method']);

        $noti=Programacion::findOrFail($id);

        if($request->file('pro_imgDia')){
            Storage::delete('public/'. $noti->pro_imgDia);
            $noti2['pro_imgDia']=$request->file('pro_imgDia')->store('uploads','public');
        }


        $noti->update($noti2);

        return redirect('/lprogramacion')->with('Mensaje','Programacion Modificada con Éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Programacion  $programacion
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $noti=Programacion::findOrFail($id);
        if(Storage::delete('public/'. $noti->Not_imagen)){
            Programacion::destroy($id);
        }
        Programacion::destroy($id);


        return redirect('/lprogramacion')->with('Mensaje','Película  eliminada de la programación con Éxito');


    }
}
