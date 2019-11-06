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
    return view('welcome');
});

Route::get('/create', function () {
    return view('create');
});

Route::post('/createNote', 'NotesController@store');
Route::get('/editNote/{id}', 'NotesController@getNote');
Route::get('/home', 'NotesController@getAllNotes')->name('home');

Route::get('/edit', 'NotesController@editNote');
Route::get('/delete/{id}', 'NotesController@deleteNote');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
