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
//PAGINA DE INICIO
Route::get('/', function () {
    return view('welcome');
});

//RUTAS DE AUTENTIFICACION
Auth::routes();

  //RUTAS DE CRUD DE USERS
  Route::get('/users', 'HomeController@index')->name('home');
  Route::get('/users/create', ['as'=>'create','uses'=>'HomeController@create','middleware' => 'admin']);
  Route::post('/users/store', ['as'=>'store','uses'=>'HomeController@store','middleware' => 'admin']);
  Route::get('/edit/{id}', ['as'=>'edit','uses'=>'HomeController@edit','middleware' => 'admin']);
  Route::post('/update/{id}', ['as'=>'update','uses'=>'HomeController@update','middleware' => 'admin']);
  Route::post('/delete/{id}', ['as'=>'delete','uses'=>'HomeController@delete','middleware' => 'admin']);

  //RUTAS DE CRUD DE DIRECCIONES
  Route::get('/addresses', 'AddressController@index')->name('addresses');
  Route::get('/addresses/create', ['as'=>'addressescreate','uses'=>'AddressController@create','middleware' => 'staff']);
  Route::post('/addresses/store', ['as'=>'addressesstore','uses'=>'AddressController@store','middleware' => 'staff']);
  Route::get('/addresses/edit/{id}', ['as'=>'addressesedit','uses'=>'AddressController@edit','middleware' => 'staff']);
  Route::post('/updateaddress/{id}', ['as'=>'addressesupdate','uses'=>'AddressController@update','middleware' => 'staff']);
  Route::post('/addresses/delete{id}', ['as'=>'addressesdelete','uses'=>'AddressController@delete','middleware' => 'staff']);
