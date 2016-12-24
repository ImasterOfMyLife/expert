<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});


//Route::get('clients', 'ClientsController@index');
//Route::get('clients/add', 'ClientsController@add');
//Route::get('clients/{id}', 'ClientsController@show');
//Route::post('clients', 'ClientsController@store');

Route::resource('clients', 'ClientsController');
Route::resource('cases', 'CasesController');
Route::post('cases/ajgetcli', 'CasesController@getClientsInfo');
Route::post('cases/delete', 'CasesController@destroy');