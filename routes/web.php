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

  //Creando Cookie nombre de la cookie, valor,
  //  return reponse('Probando Cookies')->cookie('cookie1', 'valor', 60)
  //  return response('Probando vista con cookie')->cookie('culaquierNombre', 'valor', 60);

  //  $response = Response::make($contents, $statusCode);
  //  $response->header('Content-Type', $value);
    return view('welcome');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('passenger', 'PassengerController');
