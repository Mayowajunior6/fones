<?php


Route::post('/addCart','ShoppingCartController@store');
Route::get('/cart', 'ShoppingCartController@index');
Route::put('/updateCart', 'ShoppingCartController@update');

// Backend routes for Categories
Route::get('/admin/categories', 'Admin\CategoriesController@index')->name('admin.route')->middleware('is_admin');
Route::get('/admin/categories/create', 'Admin\CategoriesController@create')->name('admin.route')->middleware('is_admin');
Route::post('/admin/categories', 'Admin\CategoriesController@store')->name('admin.route')->middleware('is_admin');
Route::get('/admin/categories/edit/{id}', 'Admin\CategoriesController@edit')->name('admin.route')->middleware('is_admin');
Route::put('/admin/categories/edit/{id}', 'Admin\CategoriesController@update')->name('admin.route')->middleware('is_admin');
Route::delete('/admin/categories/delete/{id}', 'Admin\CategoriesController@destroy')->name('admin.route')->middleware('is_admin');

// Backend routes for Orders
Route::get('/admin/orders', 'Admin\OrdersController@index')->name('admin.route')->middleware('is_admin');
Route::get('/admin/orders/create', 'Admin\OrdersController@create')->name('admin.route')->middleware('is_admin');
Route::post('/admin/orders', 'Admin\OrdersController@store')->name('admin.route')->middleware('is_admin');
Route::get('/admin/orders/edit/{id}', 'Admin\OrdersController@edit')->name('admin.route')->middleware('is_admin');
Route::put('/admin/orders/edit/{id}', 'Admin\OrdersController@update')->name('admin.route')->middleware('is_admin');
Route::post('/admin/orders/cancel/{id}', 'Admin\OrdersController@cancel')->name('admin.route')->middleware('is_admin');

// Backend routes for Offers
Route::get('/admin/offers', 'Admin\OffersController@index')->name('admin.route')->middleware('is_admin');
Route::get('/admin/offers/create', 'Admin\OffersController@create')->name('admin.route')->middleware('is_admin');
Route::post('/admin/offers', 'Admin\OffersController@store')->name('admin.route')->middleware('is_admin');
Route::get('/admin/offers/edit/{id}', 'Admin\OffersController@edit')->name('admin.route')->middleware('is_admin');
Route::put('/admin/offers/edit/{id}', 'Admin\OffersController@update')->name('admin.route')->middleware('is_admin');
Route::delete('/admin/offers/delete/{id}', 'Admin\OffersController@destroy')->name('admin.route')->middleware('is_admin');
