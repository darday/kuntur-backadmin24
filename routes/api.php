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


Route::post('/send-email', [MailController::class, 'sendEmail']);




