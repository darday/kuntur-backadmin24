<?php

namespace App\Http\Controllers;

use App\comentario;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */




    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if($request->user()->authorizeRole('user') == true)
        {
            return view('home');
        }else

       if($request->user()->authorizeRole('admin'))
        {
            return view('admin.admin');
        }



    }

    public function nosotros()
    {
        return view('nosotros');
    }

    public function editperfil()
    {
        return view('user.editPerfil');
    }






    public function register(Request $request)
    {


       // $this->validator($request->all())->validate();
        $email=$request->email;
        $user2 = request() ->except(['_token','_method']);
        $user=User::findOrFail(Auth::user()->id);

         if($request->file("img")){
           //  Storage::delete('public/'. $user->img);
             $user2['img']=$request->file('img')->store('uploads','public');
         }
         $user2["password"] = Hash::make($user2['password']);

         $user->update($user2);


         return redirect('/editperfil')->with('Mensaje','Datos Actualizados');



         //return redirect('/editnotice/'.$id.'/edit')->with('Mensaje','Película Modificadas con Éxito');

        //event(new Registered($user = $this->create($request->all())));
        /************ llenar tabla role_user*/
        /*
        $email=$request['email'];
        $flight = User::where('email', $email)->first();

        //return $flight->id;
        $user= User::find($flight->id);
        //$user->roles()->attach([1,2,3]);
        //$user->roles()->detach([1,3]);
        $user->roles()->sync([2]);

        /********************hasta aqui**************** */

    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */


    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */





    /******************hasta aqui************************ */
    //use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'rol' => [ 'string', 'max:255'],
            'img' => [ 'string', 'max:255'],
            'email' => [ 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        return $data;
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'rol'=>    $data['rol'],
            'img'=>    $data['img'],
            'password' => Hash::make($data['password']),
        ]);
    }



    public function lusuarios(){
        $usu["usu"] = User::get();
        $cont["cont"] = User::count();

        return view('admin.listUsuario',$usu,$cont);

     }

     public function deleteusu($id){
        $user=User::findOrFail($id);
        User::destroy($id);
        return redirect('/lusuarios')->with('Mensaje','Usuario eliminado con Exito');
     }

     public function lcomentarios(){
        $usu["usu"] = comentario::get();
        $cont["cont"] = comentario::count();
        $usu2['usu'] = DB::table('comentarios')
        ->join('users', 'comentarios.user_id', '=', 'users.id')
        ->join('films', 'comentarios.film_id', '=', 'films.id')
        ->select('users.name','comentarios.id','films.film_titulo','comentarios.com_Descripcion','films.film_Titulo')
        ->get();

        return view('admin.listComentarios',$usu2,$cont);

     }

     public function destroy($id){
        $comen=comentario::findOrFail($id);

        comentario::destroy($id);

        return redirect('lcomentarios');

     }

}
