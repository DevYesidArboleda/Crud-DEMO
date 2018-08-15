<?php

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

//Panel de ADMON//
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function (){
	//USER//
	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy', [
            'uses' => 'UsersController@destroy',
            'as' => 'admin.users.destroy'
        ]);

	//COUNTRY//
	Route::resource('countries','CountryController');
	Route::get('countries/{id}/destroy', [
            'uses' => 'CountryController@destroy',
            'as' => 'admin.countries.destroy'
        ]);

	//DEPARTMENT//
	Route::resource('departments','DepartmentController');
	Route::get('departments/{id}/destroy', [
            'uses' => 'DepartmentController@destroy',
            'as' => 'admin.departments.destroy'
        ]);

	//CITY//
	Route::resource('cities','CityController');
	Route::get('cities/{id}/destroy', [
            'uses' => 'CityController@destroy',
            'as' => 'admin.cities.destroy'
        ]);
});

//CUSTOMER//
Route::resource('customers','CustomerController');
	Route::get('customers/{id}/destroy', [
            'uses' => 'CustomerController@destroy',
            'as' => 'customers.destroy'
        ]);

