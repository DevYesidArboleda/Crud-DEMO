<?php

//Front routes
Route::get('/', [
  'uses' => 'FrontController@index',
  'as' => 'front.index'
]);

Route::get('/work-with-us', function(){
    return view('work_with_us');
});

Route::post('/work-with-us', 'FrontController@work_with_us');

Route::get('/affiliations', function(){
    return view('coming_soon');
});

Route::post('/affiliations', 'FrontController@affiliations');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('public', function(){
	return view('public');
});

Route::get('formulario', 'FileController@index');

Route::post('public', 'FileController@store');

//Panel de ADMON//
Route::get('/ls', 'Auth\RegisterController@ruta');

// E-mail verification
Route::get('/register/verify/{code}', 'Auth\RegisterController@verify');

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

//AFILIADO//
Route::resource('afiliados','AfiliadosController');
    Route::get('afiliados/{id}/destroy', [
            'uses' => 'AfiliadosController@destroy',
            'as' => 'afiliados.destroy'
        ]);

