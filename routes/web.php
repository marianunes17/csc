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

Route::get('/', 'PageController@index')->name("csc.index");

Route::get('/historia', 'PageController@historia')->name("csc.historia");
Route::get('/equipa', 'PageController@equipa')->name("csc.equipa");
Route::get('/parcerias', 'PageController@parcerias')->name("csc.parcerias");
Route::get('/servicos', 'PageController@servicos')->name("csc.servicos");
Route::get('/eventos', 'PageController@eventos')->name("csc.eventos");
Route::get('/contactos', 'PageController@contactos')->name("csc.contactos");

Route::get('/landingpage', 'PageController@landingpage')->name("csc.landingpage");

Route::get('/registar', 'PageController@registar')->name("csc.registar");

Route::get('/admin');
Route::resource('/admin/utilizadores', 'UserController');
Route::resource('/admin/categorias', 'CategoryController');
Route::resource('/admin/subcategorias', 'SubCategoryController');
Route::resource('/admin/eventos', 'EventosController');


