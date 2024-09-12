<?php

namespace App\Http\Controllers;

use App\calificacion_film_user;
use App\Film;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CalificacionFilmUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /*public function listar(){
        $film["listar"]=DB::table('calificacion_film_users')
        ->join('films', 'calificacion_film_users.film_id', '=', 'films.id')
        ->select('films.film_Titulo','films.film_Categoria','films.film_imagen')
        ->where('comentarios.film_id', '=', $id)->orderBy('comentarios.id','DESC')
        ->get();

    }*/

    public static function votosobre($id){
        $svoto=calificacion_film_user::where('calificacion_id','1')->where('film_id',$id)->count();
        return($svoto);
    }
    public static function votomuyb($id){
        $svoto=calificacion_film_user::where('calificacion_id','2')->where('film_id',$id)->count();
        return($svoto);
    }
    public static function votobueno($id){
        $svoto=calificacion_film_user::where('calificacion_id','3')->where('film_id',$id)->count();
        return($svoto);
    }


    public function index( )
    {
        $id_user=Auth::user()->id;
        $votel['voto']=calificacion_film_user::where('user_id','=',$id_user)->get();
        $datos['film']=Film::get();
        $count['cuenta']=calificacion_film_user::where('user_id','=',$id_user)->count();

        $users['user'] = DB::table('calificacion_film_users')
            ->join('calificacions', 'calificacion_film_users.calificacion_id', '=', 'calificacions.id')
            ->join('films', 'calificacion_film_users.film_id', '=', 'films.id')
            ->select('calificacion_film_users.id', 'calificacion_film_users.user_id', 'films.film_Titulo','films.film_Categoria','films.film_imagen', 'calificacions.calf_nombre')
            ->where('calificacion_film_users.user_id', '=', $id_user)
            ->orderBy('id','DESC')
            ->get();

        //return $users;
        return view('user.listVotos',$users,$datos);

        /*$datos['film']=Film::paginate(20);
        $count['count']=$film::count();
        return view('peliculas',$datos,$count);*/


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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\calificacion_film_user  $calificacion_film_user
     * @return \Illuminate\Http\Response
     */
    public function show(calificacion_film_user $calificacion_film_user)
    {
        //$pelicula["peli"] = Film::get();
        $film = Film::get();
        $pelicula["peli"] = DB::table('films')
                ->orderBy('film_Categoria', 'asc')
                ->get();


        foreach ($film as $peli){
            $svoto=calificacion_film_user::where('calificacion_id','1')->where('film_id',$peli["id"])->count();
            $mvoto=calificacion_film_user::where('calificacion_id','2')->where('film_id',$peli["id"])->count();
            $bvoto=calificacion_film_user::where('calificacion_id','3')->where('film_id',$peli["id"])->count();

        }
        return view("admin.listarVotos",$pelicula);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\calificacion_film_user  $calificacion_film_user
     * @return \Illuminate\Http\Response
     */
    public function edit(calificacion_film_user $calificacion_film_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\calificacion_film_user  $calificacion_film_user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, calificacion_film_user $calificacion_film_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\calificacion_film_user  $calificacion_film_user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_peli)
    {
        $voto=calificacion_film_user::findOrFail($id_peli);
        calificacion_film_user::destroy($id_peli);
        return redirect('/lista')->with('Mensaje','Película eliminada con Exito');
        //$eliminar= DB::table('calificacion_film_users')->where('film_id',$id_peli)->where('user_id',$id_user)->delete();

       // return redirect('/listar')->with('Mensaje','Película eliminada con Exito');
    }


}
