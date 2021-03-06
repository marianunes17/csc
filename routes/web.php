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
Route::get('/documentos', 'PageController@documentos')->name("csc.documentos");
Route::get('/servicos', 'PageController@servicos')->name("csc.servicos");
Route::get('/eventos', 'PageController@eventos')->name("csc.eventos");
Route::get('/contactos', 'PageController@contactos')->name("csc.contactos");

Route::get('/landingpage', 'PageController@landingpage')->name("csc.landingpage");

/*formularios*/
Route::post('/storetestemunho', 'PageController@storetestemunho')->name("storetestemunho");
Route::post('/storecontacto', 'PageController@storecontacto')->name("storecontacto");


Route::patch('/publicar/{testemunho}','TestemunhosController@publicar')->name("testemunhos.publicar");


Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/users/{user}/send_reactivate_mail',
    "UserController@send_reactivate_email")->name('users.sendActivationEmail');

Route::get('/admin','DashboardController@show')->name("dashboard");

Route::resource('/admin/documentos', 'DocumentoController');
Route::resource('/admin/users', 'UserController');
Route::resource('/admin/equipas', 'EquipaController');
Route::resource('/admin/equipasdirecao', 'EquipaDirecaoController');
Route::resource('/admin/parcerias', 'ParceriaController');
Route::resource('/admin/tipos', 'TipoController');
Route::resource('/admin/categorias', 'CategoriaController');
Route::resource('/admin/eventos', 'EventosController');
Route::resource('/admin/categorias', 'CategoriaController');
Route::resource('/admin/testemunhos', 'TestemunhosController');
Route::resource('/admin/contactos', 'ContactosController');


Route::redirect('/admin/categoria', '/admin/categorias');
});


Auth::routes(['register' => false, 'verify' => true]);
