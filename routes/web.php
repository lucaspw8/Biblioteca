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

Route::get('--', function () {
    return view('welcome');
});

Route::get('bibliografia', function(){
    return view('listarBibli');
});
Route::get('/', function(){
    return view('login');
});

Route::get('rel/muitos','relController@teste');
Route::get('rel/muitos-inverse','relController@testeinverse');
Route::get('rel/muitos-insert','relController@insert');

Route::get('curso/teste','cursoController@teste');
Route::post('login/teste','loginController@login')->name('login.teste'); 
Route::get('disciplina/livro/{id_disc}','relController@discLivro')->name('disc_livro'); 
Route::post('disciplina/livro/insert','relController@discLivro_Insert')->name('disc_livro.insert');

Route::resource('livro','LivroController');
Route::resource('disciplina','DisciplinaController');
Route::resource('curso','cursoController');
Route::resource('usuario','usuarioController');