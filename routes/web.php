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


Route::Auth();

Route::get('/', 'HomeController@index')->name('index');
Route::get('gerenciador', 'HomeController@gerenciador')->name('gerenciador');

Route::get('simplepage/{id}', 'HomeController@simplepage')->name('simplepage');

Route::post('{id}', 'CommentsController@salvar')->name('salvar_comments');
Route::get('{from}/recalcular_comments', 'HomeController@recalcular') -> name ('recalcular');


Route::group(['prefix' => 'pessoas'], function(){
	Route::get('lista_pessoas', 'PessoasController@lista') -> name ('lista_pessoas');
	Route::get('pesquisar_pessoas', 'PessoasController@pesquisa') -> name ('pesquisar_pessoas');
	Route::get('formulario_pessoas', 'PessoasController@inserir') -> name ('formulario_pessoas');
	Route::post('salvar_pessoas', 'PessoasController@salvar') -> name ('salvar_pessoas');
	Route::get('{id}/editar_pessoas', 'PessoasController@editar') -> name ('editar_pessoas');
	Route::patch('{id}', 'PessoasController@atualizar') -> name ('atualizar_pessoas');
	Route::delete('{id}', 'PessoasController@excluir') -> name ('excluir_pessoas');
	Route::get('{id}/excluir_foto_pessoas', 'PessoasController@excluir_foto') -> name ('excluir_foto_pessoas');
});

Route::group(['prefix' => 'blog'], function(){
	Route::get('lista_posts', 'BlogController@lista') -> name ('lista_posts');
	Route::get('pesquisar_posts', 'BlogController@pesquisa') -> name ('pesquisar_posts');
	Route::get('formulario_posts', 'BlogController@inserir') -> name ('formulario_posts');
	Route::post('salvar_posts', 'BlogController@salvar') -> name ('salvar_posts');
	Route::get('{id}/editar_posts', 'BlogController@editar') -> name ('editar_posts');
	Route::patch('{id}', 'BlogController@atualizar') -> name ('atualizar_posts');
	Route::delete('{id}', 'BlogController@excluir') -> name ('excluir_posts');
	Route::get('{id}/excluir_foto_posts', 'BlogController@excluir_foto') -> name ('excluir_foto_posts');
	Route::get('{id}/excluir_comments', 'BlogController@excluir_comments')->name('excluir_comments');	
});
	



