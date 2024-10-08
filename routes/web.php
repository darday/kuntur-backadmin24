<?php

use App\Film;
use Illuminate\Support\Facades\Route;
use App\User;
use App\Calificacion;
use App\permisos\Models\Role;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/******************* USUARIOS*************** */

/*Route::get('/', function () {
    return view('index');
});
*/
Route::get('/', 'FilmController@indexp')->name('indexp');


Route::get('/peliculas', 'FilmController@peliculas')->name('peliculas');
Route::get('/pelicula/{id}', 'FilmController@pelicula')->name('pelicula');

Route::get('/wawas', 'FilmController@wawas')->name('wawas');
Route::get('/canelos', 'FilmController@canelos')->name('canelos');
Route::get('/largometrajeficcion', 'FilmController@larfic')->name('largometrajeficcion');
Route::get('/largometrajedocumental', 'FilmController@lardoc')->name('largometrajedocumental');
Route::get('/cortometrajeficcion', 'FilmController@corfic')->name('cortometrajeficcion');
Route::get('/cortometrajedocumental', 'FilmController@cordoc')->name('cortometrajedocumental');
Route::get('/cortometrajeanimado', 'FilmController@coranim')->name('cortometrajeanimado');
Route::get('/cortometrajeuniversitario', 'FilmController@coruni')->name('cortometrajeuniversitario');
Route::get('/cortos', 'FilmController@wawascortos')->name('wawascortos');

Route::get('/talleres', 'TallerController@index');

Route::get('/noticias', 'NoticiaController@noticias')->name('noticias');
Route::get('/noticia/{id}', 'NoticiaController@noticia')->name('noticia');

Route::get('/programacion', 'ProgramacionController@index')->name('programacion');
Route::get('/redireccion/{admin}', 'FilmController@pelicula')->name('redireccion');

Route::get('/gallery', 'GaleriaController@index')->name('gallery');
Route::get('/bases', 'FestivalController@index')->name('bases');
Route::get('/equipo', 'FestivalController@equipo')->name('equipo');
Route::get('/festival-kuntur', 'FestivalController@festival_kuntur')->name('festival-kuntur');
Route::get('/jurado', 'JuradoController@index')->name('jurado');

Route::get('/premiacion', 'NoticiaController@noticiaKuntur')->name('noticiaspre');




/********************** Perfil Usuario************** */
Route::get('/lista', 'CalificacionFilmUserController@index')->name('lista');

Route::get('/listcomen', 'ComentarioController@listcoment')->name('listcomen');
Route::get('/editcomen/{id}/edit', 'ComentarioController@edit')->name('editcomen');
Route::patch('/editcomen/{admin}', 'ComentarioController@update')->name('editcomenup');
Route::delete('/deletecomen/{id}', 'ComentarioController@destroy')->name('deletecomen');

Route::post('/vote/{id}', 'FilmController@vote')->name('vote');
Route::delete('/delete_vote/{id}', 'CalificacionFilmUserController@destroy')->name('delete_vote');
Route::post('/createcoment', 'ComentarioController@store')->name('createcoment');

Route::get('/editperfil', 'HomeController@editperfil')->name('editperfil');
Route::post('uperfil', 'HomeController@register')->name('uperfil');



Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

/******************************ADMIN*********************** */
//Route::get('/nosotros', 'HomeController@nosotros')->name('nosotros');
Route::get('/admin', 'FilmController@index')->name('admin');
Route::get('/create', 'FilmController@agregar')->name('create');
Route::post('/create', 'FilmController@store')->name('createp');
Route::get('/listar', 'FilmController@show')->name('listar');
Route::get('/edit/{admin}/edit', 'FilmController@edit')->name('edit');
Route::patch('/edit/{admin}', 'FilmController@update')->name('editpatch');
Route::delete('/delete/{admin}', 'FilmController@destroy')->name('delete');

//Noticias
Route::get('/cnoticia', 'NoticiaController@create')->name('cnoticia');
Route::post('/create_not', 'NoticiaController@store')->name('create_not');
Route::get('/listnotice', 'NoticiaController@show')->name('listnotice');
Route::get('/editnotice/{admin}/edit', 'NoticiaController@edit')->name('editnotice');
Route::patch('/editnotice/{admin}', 'NoticiaController@update')->name('editnoticeup');
Route::delete('/deletenotice/{admin}', 'NoticiaController@destroy')->name('deletenotice');

//Jurado
Route::get('/cjurado', 'JuradoController@create')->name('cjurado');

//galeria
Route::get('/cgallery', 'GaleriaController@create')->name('cgallery');
Route::post('/cgallery', 'GaleriaController@store')->name('cgalleryp');
Route::get('/lgallery', 'GaleriaController@show')->name('lgallery');
Route::delete('/gdelete/{admin}', 'GaleriaController@destroy')->name('gdelete');

//Talleres
Route::get('/ctaller', 'TallerController@create')->name('ctaller');
Route::post('/ctaller', 'TallerController@store')->name('ctallerp');
Route::get('/ltaller', 'TallerController@show')->name('ltaller');
Route::get('/etaller/{admin}/edit', 'TallerController@edit')->name('etaller');
Route::patch('/etaller/{admin}', 'TallerController@update')->name('etallerup');
Route::delete('/dtaller/{admin}', 'TallerController@destroy')->name('dtaller');


//Programación

Route::get('/cprogramacion', 'ProgramacionController@create')->name('cprogramacion');
Route::post('/create_programacion', 'ProgramacionController@store')->name('create_programacion');
Route::get('/lprogramacion', 'ProgramacionController@show')->name('lprogramacion');
Route::get('/eprogramacion/{admin}/edit', 'ProgramacionController@edit')->name('eprogramacion');
Route::patch('/eprogramacion/{admin}', 'ProgramacionController@update')->name('eprogramacionup');
Route::delete('/dprogramacion/{admin}', 'ProgramacionController@destroy')->name('dprogramacion');

//Fecha Programación

Route::get('/cfechapro', 'FechaprgramacionController@create')->name('cprogramacionf');
Route::post('/cre_fechapro', 'FechaprgramacionController@store')->name('cre_fechapro');
Route::get('/lfechapro', 'FechaprgramacionController@show')->name('lfechap');
Route::get('/efechapro/{admin}/edit', 'FechaprgramacionController@edit')->name('efechap');
Route::patch('/ufechapro/{admin}', 'FechaprgramacionController@update')->name('ufechap');
Route::delete('/dfechapro/{admin}', 'FechaprgramacionController@destroy')->name('dfechap');

//Actividad

Route::get('/cactivity', 'ActivityController@create')->name('cactivity');
Route::post('/cre_activity', 'ActivityController@store')->name('cre_activity');
Route::get('/lactivity', 'ActivityController@show')->name('lactivity');
Route::get('/eactivity/{admin}/edit', 'ActivityController@edit')->name('eactivity');
Route::patch('/uactivity/{admin}', 'ActivityController@update')->name('uactivity');
Route::delete('/dactivity/{admin}', 'ActivityController@destroy')->name('dactivity');

//Pelicula actividad

Route::get('/cpeli_activity', 'ActivityFimController@create')->name('cpeli_activity');
Route::post('/cre_peli_activity', 'ActivityFimController@store')->name('cre_peli_activity');
Route::get('/lpeli_activity', 'ActivityFimController@show')->name('lpeli_activity');
Route::get('/epeli_activity/{admin}/edit', 'ActivityFimController@edit')->name('epeli_activity');
Route::patch('/upeli_activity/{admin}', 'ActivityFimController@update')->name('upeli_activity');
Route::delete('/dpeli_activity/{admin}', 'ActivityFimController@destroy')->name('dpeli_activity');


Route::get('/lvotos', 'CalificacionFilmUserController@show')->name('lvotos');

//comentarios
Route::get('/lcomentarios', 'HomeController@lcomentarios')->name('lcomentarios');
Route::delete('/dcoment/{id}', 'HomeController@destroy')->name('dcoment');

//listados
Route::get('/lusuarios', 'HomeController@lusuarios')->name('lusuarios');
Route::delete('/deleteuser/{admin}', 'HomeController@deleteusu')->name('deleteuser');







// Route::get('/test', function () {

//     /*return Role::create([
//         'name'=>'admin',
//         'slug'=>'admin',
//         'description'=>'administrador',
//         'full-acces'=>'yes'
//     ]);*/

//    /* return Role::create([
//         'name'=>'user',
//         'slug'=>'user',
//         'description'=>'usuario',
//         'full-acces'=>'no'
//     ]);*/

//     /*return Role::create([
//         'name'=>'judge',
//         'slug'=>'judge',
//         'description'=>'juez',
//         'full-acces'=>'no'
//     ]);*/

//     $id_user =  User::where('id',1)->first();
//     //dd($id_user->id);
//     $id_film =  Film::where('id',1)->first();
//     $id_calif =  Calificacion::where('id',1)->first();


//     DB::table('calificacion_film_user')->insert([
//         'calificacion_id' => '1',
//         'film_id' => '1',
//         'user_id' =>'1',

//         'created_at' => Carbon::now(),
//         'updated_at' => Carbon::now(),

//         //'tutor_id' => 0
//     ]);

//     return redirect('/create')->with('Mensaje','Film Agregado con Exito');


//     //$user= User::find(1);
//     //dd($user->id);

//     //$user->film()->attach([1,1]);
//     //$user->roles()->detach([1,3]);
//     //$user->film()->sync([1]);


//     //$user->califficacion()->sync([1]);

//     return $id_calif  ;




// });

