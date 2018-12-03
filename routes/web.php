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
    return view('pagina1');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/autenticacao', function () {
    return view('login');
})->name('autenticacao');


Route::get('/perfil', function () {
    return view('perfil');
})->middleware('auth');


Route::get('/cadastro', function () {
    return view('cadastro_usuario');
});

Route::get('/desconectar', function () {
	Auth::logout();
    return view('pagina1');
});


