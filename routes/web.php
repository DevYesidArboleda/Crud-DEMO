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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('public', function(){
	return view('public');
});

Route::get('formulario', 'FileController@index');

Route::post('public', 'FileController@store');

//Panel de ADMON
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function (){
	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy', [
            'uses' => 'UsersController@destroy',
            'as' => 'admin.users.destroy'
        ]);
});

