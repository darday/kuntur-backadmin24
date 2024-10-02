<?php

namespace App\Http\Controllers;

use App\calificacion_film_user;
use App\comentario;
use App\Film;
use App\Noticia;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function agregar(){
        return view('admin.createFilm');
    }

    public function indexp(){
        $datos=Film::paginate(50);
        // $idLastNew=Noticia::latest()->first()->id ;
        $lastNoticia = Noticia::latest()->first();

        if ($lastNoticia) {
            $idLastNew = $lastNoticia->id;
            $last = Noticia::latest()->take(1)->get();
            $not = Noticia::where("id", "!=", $idLastNew)->latest()->take(2)->get();
        } else {
            // Si no hay noticias, definimos colecciones vacías para evitar errores
            $last = collect();
            $not = collect();
        }
        // $last=Noticia::latest()->take(1)->get() ;
        // $not=Noticia::where("id","!=",$idLastNew)->latest()->take(2)->get();
        // $last=Noticia::latest()->first()->id;
        // $datos['film']=Film::where("film_Categoria","=",'Wawas al Cine')->get();
        return view('index',['film'=>$datos,
                            'noticias2'=>$not,
                            'last'=>$last]);

    }

    public function byfilm( $id){
        $dir=Film::where( 'id',$id)->get();
        return $dir;

    }

    public function vote(request $request, $id_peli){
        $id_cal=$request["vote"];
        $id_user=Auth::user()->id;
        $datos['film']=Film::findOrFail($id_peli);

        $users = DB::table('calificacion_film_users')->select('calificacion_id')->where('film_id',$id_peli)->where('user_id',$id_user)-> get();

       if($users->count() > 0){
            $eliminar= DB::table('calificacion_film_users')->where('film_id',$id_peli)->where('user_id',$id_user)->delete();
        }
        if($id_cal == 1){


            DB::table('calificacion_film_users')->insert([
                'calificacion_id' => $id_cal,
                'film_id' => $id_peli,
                'user_id' =>$id_user,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);


            return redirect('/pelicula/'.$id_peli)->with('Mensaje','Tu Voto Se Guardo');

        }
        if($id_cal == 2){
            DB::table('calificacion_film_users')->insert([
                'calificacion_id' => $id_cal,
                'film_id' => $id_peli,
                'user_id' =>$id_user,

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);


            return redirect('/pelicula/'.$id_peli)->with('Mensaje','Tu Voto Se Guardo');


        }
        if($id_cal==3){
            DB::table('calificacion_film_users')->insert([
                'calificacion_id' => $id_cal,
                'film_id' => $id_peli,
                'user_id' =>$id_user,

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);


            return redirect('/pelicula/'.$id_peli)->with('Mensaje','Tu Voto Se Guardo');
        }



    }
    public function wawas(Film $film)
    {
        $datos['film']=Film::where("film_Categoria","=",'Wawas al Cine')->get();
        $count['count']=Film::where("film_Categoria","=",'Wawas al Cine')->count();
        return view('wawas',$datos,$count);
    }

        public function wawascortos(Film $film)
    {
        $datos['film']=Film::where("film_Categoria","=",'Cortos')->get();
        $count['count']=Film::where("film_Categoria","=",'Cortos')->count();
        return view('wawascortos',$datos,$count);
    }


    public function canelos(Film $film)
    {
        $datos['film']=Film::where("film_Categoria","=",'Proyecto Canelos')->get();
        $count['count']=Film::where("film_Categoria","=",'Proyecto Canelos')->count();
        return view('canelos',$datos,$count);
    }
    public function larfic(Film $film)
    {
        $datos['larFic']=Film::where("film_Categoria","=",'Largometraje Ficción')->get();
        $count['count']=Film::where("film_Categoria","=",'Largometraje Ficción')->count();
        return view('largometrajeficcion',$datos,$count);
    }
    public function lardoc(Film $film)
    {
        $datos['larDoc']=Film::where("film_Categoria","=",'Largometraje Documental')->get();
        $count['count']=Film::where("film_Categoria","=",'Largometraje Documental')->count();
        return view('largometrajedocumental',$datos,$count);
    }
    public function corfic(Film $film)
    {
        $datos['corFic']=Film::where("film_Categoria","=",'Cortometraje Ficción')->get();
        $count['count']=Film::where("film_Categoria","=",'Cortometraje Ficción')->count();
        return view('cortometrajeficcion',$datos,$count);
    }
    public function cordoc(Film $film)
    {
        $datos['corDoc']=Film::where("film_Categoria","=",'Cortometraje Documental')->get();
        $count['count']=Film::where("film_Categoria","=",'Cortometraje Documental')->count();
        return view('cortometrajedocumental',$datos,$count);
    }
    public function coranim(Film $film)
    {
        $datos['corAnim']=Film::where("film_Categoria","=",'Cortometraje Animado')->get();
        $count['count']=Film::where("film_Categoria","=",'Cortometraje Animado')->count();
        return view('cortometrajeanimado',$datos,$count);
    }
    public function coruni(Film $film)
    {
        $datos['corUni']=Film::where("film_Categoria","=",'Cortometraje Universitario')->get();
        $count['count']=Film::where("film_Categoria","=",'Cortometraje Universitario')->count();
        return view('cortometrajeuniversitario',$datos,$count);
    }




    public function peliculas(Film $film)
    {
        $datos['wawas']=Film::where("film_Categoria","=",'Wawas al Cine')->get();
        $datos['todo']=Film::get();
        return view('peliculas',$datos);
    }

    public function pelicula(Film $film, $id)
    {


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


    public function index(Request $request)
    {
        //$request = user()->queryRole('admin');

        //return $role;
        $request->user()->authorizeRole('admin');
        $films=Film::all();




        return view('admin.admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
        $request->user()->authorizeRole('admin');
        $request->user()->authorizeRole('admin');
        $usuario = request() ->except('_token');

        if($request->file('film_imagen')){

            $usuario['film_imagen']=$request->file('film_imagen')->store('app/public/uploads','public');
        }
      Film::insert($usuario);
        return redirect('/create')->with('Mensaje','Film Agregado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        $datos['film']=Film::get();
        return view('admin.listFilm',$datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $film=Film::findOrFail($id);
        $estado['estado']=Film::findOrFail($id);
        if($estado['estado']->film_Estado == 0){
            $estado['estado']='Deshabilitado';
        }else{
            $estado['estado']='Habilitado';
        }
        return view('admin.editFilm',compact('film'),$estado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $film2 = request() ->except(['_token','_method']);

        $film=Film::findOrFail($id);
        if($request->file('film_imagen')){
            Storage::delete('public/'. $film->film_imagen);
            $film2['film_imagen']=$request->file('film_imagen')->store('uploads','public');
        }

        $film->update($film2);

        return redirect('/edit/'.$id.'/edit')->with('Mensaje','Película Modificadas con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // return ('destroy;');
        $film=Film::findOrFail($id);
        if(Storage::delete('public/'. $film->film_imagen)){
            Film::destroy($id);
        }
        Film::destroy($id);


        return redirect('/listar')->with('Mensaje','Película eliminada con Exito');
    }


    #################################################################################
    #################################################################################
    #################################################################################
    #################################################################################

    public function api_larfic(Film $film)
    {
        $datos['larFic']=Film::where("film_Categoria","=",'Largometraje Ficción')->get();
        $count['count']=Film::where("film_Categoria","=",'Largometraje Ficción')->count();
        return $datos['larFic'];
    }

    public function api_lardoc(Film $film)
    {
        $datos['larDoc']=Film::where("film_Categoria","=",'Largometraje Documental')->get();
        $count['count']=Film::where("film_Categoria","=",'Largometraje Documental')->count();
        return $datos['larDoc'];
    }

    public function api_corfic(Film $film)
    {
        $datos['corFic']=Film::where("film_Categoria","=",'Cortometraje Ficción')->get();
        $count['count']=Film::where("film_Categoria","=",'Cortometraje Ficción')->count();
        return $datos['corFic'];
    }

    public function api_cordoc(Film $film)
    {
        $datos['corDoc']=Film::where("film_Categoria","=",'Cortometraje Documental')->get();
        $count['count']=Film::where("film_Categoria","=",'Cortometraje Documental')->count();
        return $datos['corDoc'];
    }
    
    public function api_corunific(Film $film)
    {
        $datos['corUniFic']=Film::where("film_Categoria","=",'Cortometraje Universitario Ficción')->get();
        $count['count']=Film::where("film_Categoria","=",'Cortometraje Universitario Ficción')->count();
        return $datos['corUniFic'];
    }
    
    public function api_corunidoc(Film $film)
    {
        $datos['corUniDoc']=Film::where("film_Categoria","=",'Cortometraje Universitario Documental')->get();
        $count['count']=Film::where("film_Categoria","=",'Cortometraje Universitario Documental')->count();
        return $datos['corUniDoc'];
    }
    
    public function api_corinternacional(Film $film)
    {
        $datos['corInter']=Film::where("film_Categoria","=",'Cortometraje Internacional')->get();
        $count['count']=Film::where("film_Categoria","=",'Cortometraje Internacional')->count();
        return $datos['corInter'];
    }

    public function api_filmbyId( $id){
        $dir=Film::where( 'id',$id)->get();
        return $dir;

    }
    


}
