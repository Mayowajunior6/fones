<?php

//Route::get('/search/{name}', 'SearchController@search')->name('search');


Route::get('/admin/products', 'Admin\AdminProductsController@index')->name('admin.route')->middleware('is_admin');
Route::get('/admin/products/create', 'Admin\AdminProductsController@create')->name('admin.route')->middleware('is_admin');
Route::post('/admin/products', 'Admin\AdminProductsController@store')->name('admin.route')->middleware('is_admin');
Route::delete('/admin/products/delete/{id}', 'Admin\AdminProductsController@destroy')->name('admin.route')->middleware('is_admin');
Route::get('/admin/products/edit/{id}', 'Admin\AdminProductsController@edit')->name('admin.route')->middleware('is_admin');
Route::put('/admin/products/edit/{id}', 'Admin\AdminProductsController@update')->name('admin.route')->middleware('is_admin');