<?php

namespace App\Http\Controllers;
use App\User;
use App\comentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function listcoment()
    {
        $id_user= Auth::user()->id;

        $users['user'] = DB::table('comentarios')
        ->join('users', 'comentarios.user_id', '=', 'users.id')
        ->join('films', 'comentarios.film_id', '=', 'films.id')
        ->select('comentarios.id','comentarios.created_at','films.film_imagen','films.film_titulo','comentarios.com_Descripcion')
        ->where('comentarios.user_id', '=', $id_user)
        ->orderBy('comentarios.id','DESC')
        ->get();
        //return $users;
        return view('user.listComen',$users);
    }

    public function index()
    {
        return ('Create Coment');
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
        $com_desc= $request['com_Descripcion'] ;
        $id_film= $request['film_id'] ;
        $id_user=Auth::user()->id;
        $comen['created_at']=Carbon::now();
        //$id=$comen->id_film;
        //return $request;
        DB::table('comentarios')->insert([
            'com_Descripcion' => $com_desc,
            'film_id' => $id_film,
            'user_id' =>$id_user,

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),


        ]);

        return redirect('/pelicula/'.$id_film)->with('Mensaje','Comentario Agregado con Éxito');

       // return ('listo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function show(comentario $comentario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {

        $comen=Comentario::findOrFail($id);
       // return $comen;
        //return view('admin.editFilm',compact('film'),$estado);
        return view('user.editComen',compact('comen'));

        return('holas edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $comen2=request() ->except(['_token','_method']);
        $comen=comentario::findorFail($id);
        $comen->update($comen2);


        //consultar valores para retornar a lista de peliculas

        $id_user= Auth::user()->id;

        $users['user'] = DB::table('comentarios')
        ->join('users', 'comentarios.user_id', '=', 'users.id')
        ->join('films', 'comentarios.film_id', '=', 'films.id')
        ->select('comentarios.id','comentarios.created_at','films.film_imagen','films.film_titulo','comentarios.com_Descripcion')
        ->where('comentarios.user_id', '=', $id_user)
        ->orderBy('comentarios.id','DESC')
        ->get();
        return redirect('/listcomen')->with('Mensaje','Comentario Modificado con Exito');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //return('Me destruyo');
        // return ('destroy;');
        $comen=comentario::findOrFail($id);

        comentario::destroy($id);

        //consultar valores para retornar a lista de peliculas

        $id_user= Auth::user()->id;

        $users['user'] = DB::table('comentarios')
        ->join('users', 'comentarios.user_id', '=', 'users.id')
        ->join('films', 'comentarios.film_id', '=', 'films.id')
        ->select('comentarios.id','comentarios.created_at','films.film_imagen','films.film_titulo','comentarios.com_Descripcion')
        ->where('comentarios.user_id', '=', $id_user)
        ->orderBy('comentarios.id','DESC')
        ->get();
        return redirect('/listcomen')->with('Mensaje','Comentario eliminado con Exito');

        //return redirect('/listar')->with('Mensaje','Comentario eliminado con Éxito');
    }
}
