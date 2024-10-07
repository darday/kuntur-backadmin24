<?php

use App\Http\Controllers\MailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/programacion/{id}/director' ,'FilmController@byfilm');


Route::get('/news-list' ,'NoticiaController@api_listar_noticias');
Route::get('/news-by-id/{id}' ,'NoticiaController@api_news_by_id');

Route::get('/list_larfic' ,'FilmController@api_larfic');
Route::get('/list_lardoc' ,'FilmController@api_lardoc');
Route::get('/list_cortofic' ,'FilmController@api_corfic');
Route::get('/list_cortodoc' ,'FilmController@api_cordoc');
Route::get('/list_cortounific' ,'FilmController@api_corunific');
Route::get('/list_cortounidoc' ,'FilmController@api_corunidoc');
Route::get('/list_cortointer' ,'FilmController@api_corinternacional');

Route::get('/list_film_by_id/{id}' ,'FilmController@api_filmbyId');

Route::get('/listdate' ,'FechaprgramacionController@api_listdate');
Route::get('/list_activity/{id}' ,'ActivityController@api_listactivity');

Route::post('/send-email', [MailController::class, 'sendEmail']);




