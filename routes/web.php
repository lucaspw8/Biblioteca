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


Route::get('bibliografia', function(){
    return view('listarBibli');
});


Route::get('rel/muitos','relController@teste');
Route::get('rel/muitos-inverse','relController@testeinverse');
Route::get('rel/muitos-insert','relController@insert');

Route::get('curso/teste','cursoController@teste');
Route::post('login/validar','loginController@login')->name('login.validar'); 
Route::get('login/','loginController@index')->name('login.index');
Route::get('home','loginController@home')->name('home');
Route::get('login/sair','loginController@sair')->name('login.sair');

Route::get('disciplina/livro/{id_disc}','relController@discLivro')->name('disc_livro'); 
Route::post('disciplina/livro/insert','relController@discLivro_Insert')->name('disc_livro.insert');

Route::resource('livro','LivroController');
Route::resource('disciplina','DisciplinaController');
Route::resource('curso','cursoController');
Route::resource('usuario','usuarioController');
Route::resource('bibliografia','bibliografiaController');