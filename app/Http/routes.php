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

//Route::get('/', 'WelcomeController@index');
Route::get('/', 'StudentController@index');
Route::get('home', 'HomeController@index');
Route::get('Add_Student','StudentController@create');
//Route::post('create','StudentController@store');
Route::post('create',array('as'=>'create','uses'=>'StudentController@store')); // named route
Route::get('Student_Display','StudentController@store');
Route::get('edit/{id}','StudentController@edit');
Route::get('delete/{id}','StudentController@delete');
//Route::post('edit/{id}',array('as'=>'edit','uses'=>'StudentController@edit')); // named route
//Route::post("update",'StudentController@update');
Route::post('update/{id}',array('as'=>'update/{id}','uses'=>'StudentController@newupdate'));
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
