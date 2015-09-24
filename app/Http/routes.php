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
    return view('/home');
});

/**
Route::get('patients', 'PatientController@index');
Route::get('patients/create', 'PatientController@create');
Route::get('patients/{id}', 'PatientController@show');
Route::post('patients', 'PatientController@store');
Route::get('patients/{id}/edit', 'PatientController@edit');
**/

Route::resource('patients','PatientController');
Route::resource('calendar','CalendarController');

Route::controller('datatables', 'DatatablesController', [
    'anyData'  => 'datatables.data',
    'getIndex' => 'datatables',
]);