<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/teams', 'TeamsController@index');
Route::post('/teams/{team}/comments', 'CommentsController@store')->middleware('forbiddenwords');
Route::get('/teams/{team}', 'TeamsController@show');

Route::get('/players/{id}', 'PlayersController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/news', 'NewsController@index');
Route::get('/news/{new}', 'NewsController@show');
Route::get('/news/team/{teamName}', 'NewsController@selectedByTeam');


Route::get('/', function(){
    return view('welcome');
});
