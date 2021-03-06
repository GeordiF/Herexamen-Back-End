<?php

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'PagesController@test')->name('test');
Route::get('/cards', 'CardsController@index');
Route::get('/done', 'CardsController@done');
Route::get('/cards/{card}', 'CardsController@show');
Route::get('/create', 'CardsController@create');
Route::get('/notes/{note}/edit', 'NotesController@edit');
Route::patch('/notes/{note}', 'NotesController@update');
Route::get('/cards/{card}/edit', 'CardsController@edit');
Route::put('/cards/{card}', 'CardsController@update');
Route::delete('/cards/{card}', 'CardsController@destroy');

Route::post('cards/{card}/notes', 'NotesController@store');
Route::post('cards', 'CardsController@store');
