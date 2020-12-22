<?php

//Auth::routes();

// Route to home page
//Route::get('/home', 'HomeController@index')->name('home');

// Route to admin home/dashboard page
Route::get('/admin', 'HomeController@handleAdmin')->name('admin.dash')->middleware('is_admin');
Route::get('/admin/home', 'HomeController@handleAdmin')->name('admin.dash')->middleware('is_admin');

// Route to the profile
Route::get('/profile', 'UserController@index')->middleware(['auth']);

Route::put('/profile/edit/{id}', 'UserController@update')->middleware(['auth']);

// Route to admin provinces crud
Route::get('/admin/provinces', 'Admin\ProvincesController@index')->name('admin.route')->middleware('is_admin');

// Route to the 'create new provinces' page
Route::get('/admin/provinces/create', 'Admin\ProvincesController@create')->name('admin.route')->middleware('is_admin');

// Route to add new provinces
Route::post('/admin/provinces', 'Admin\ProvincesController@store')->name('admin.route')->middleware('is_admin');

// Routes to edit a provinces
Route::get('/admin/provinces/edit/{id}', 'Admin\ProvincesController@edit')->name('admin.route')->middleware('is_admin');

// Routes to update a provinces
Route::put('/admin/provinces/edit/{id}', 'Admin\ProvincesController@update')->name('admin.route')->middleware('is_admin');

// Route to delete a provinces
Route::delete('/admin/provinces/delete/{id}', 'Admin\ProvincesController@destroy')->name('admin.route')->middleware('is_admin');

// Route to admin taxations crud
Route::get('/admin/taxations', 'Admin\TaxationsController@index')->name('admin.route')->middleware('is_admin');

// Route to the 'create new taxations' page
Route::get('/admin/taxations/create', 'Admin\TaxationsController@create')->name('admin.route')->middleware('is_admin');

// Route to add new taxations
Route::post('/admin/taxations', 'Admin\TaxationsController@store')->name('admin.route')->middleware('is_admin');

// Routes to edit a taxations
Route::get('/admin/taxations/edit/{id}', 'Admin\TaxationsController@edit')->name('admin.route')->middleware('is_admin');

// Routes to update a taxations
Route::put('/admin/taxations/edit/{id}', 'Admin\TaxationsController@update')->name('admin.route')->middleware('is_admin');

// Route to delete a taxations
Route::delete('/admin/taxations/delete/{id}', 'Admin\TaxationsController@destroy')->name('admin.route')->middleware('is_admin');