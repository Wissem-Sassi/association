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

Route::get('/w', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home');
});

Route::get('/form', function () {
    return view('form');
});
Route::get('/table', function () {
    return view('table');
});
Route::get('/auth/login', function () {
    return view('auth.login');
});
Route::get('/auth/register', function () {
    return view('auth.register');
});

Route::get('/chart', function () {
    return view('chart');
});

Route::resource('membres', 'MembreController');
Route::get('/form', 'MembreController@index');
//Route::patch('/edit', 'MembreController@update');

//Route::resource('membres', 'MembreController');
