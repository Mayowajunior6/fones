<?php

Route::get('/ordersummary', 'OrderSummaryController@index');

//route to user crud
Route::get('/admin/users', 'Admin\UsersController@index')->name('admin.route')->middleware('is_admin');;

//route to create new user
Route::get('/admin/users/create', 'Admin\UsersController@create')->name('admin.route')->middleware('is_admin');;

//route to add new user 
Route::post('/admin/users', 'Admin\UsersController@store')->name('admin.route')->middleware('is_admin');

//routes to edit a user
Route::get('/admin/users/edit/{id}', 'Admin\UsersController@edit')->name('admin.route')->middleware('is_admin');

Route::put('/admin/users/edit/{id}', 'Admin\UsersController@update')->name('admin.route')->middleware('is_admin');

//Route to delete a user
Route::delete('/admin/users/delete/{id}', 'Admin\UsersController@destroy')->name('admin.route')->middleware('is_admin');