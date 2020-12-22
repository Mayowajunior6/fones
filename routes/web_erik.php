<?php

//route to privacy page
Route::get('/privacy', function () {
    $title = 'Privacy Policy';
    return view('util/privacy', compact('title'));
});


//route to terms page
Route::get('/terms', function () {
    $title = 'Terms & Conditions';
    return view('util/terms', compact('title'));
});

//route to faq page
Route::get('/faq', function () {
    $title = 'Frequently Asked Questions';
    return view('faq', compact('title'));
});

//route to contact page
Route::get('/about', function () {
    $title = 'About Us';
    return view('about', compact('title'));
});
//route to contact page
Route::get('/contact', 'ContactController@index');

//route to admin carriers crud
Route::get('/admin/carriers', 'Admin\CarriersController@index')->name('admin.route')->middleware('is_admin');;

//route to the 'create new carrier' page
Route::get('/admin/carriers/create', 'Admin\CarriersController@create')->name('admin.route')->middleware('is_admin');;

//route to add new carrier i.e. store new record
Route::post('/admin/carriers', 'Admin\CarriersController@store')->name('admin.route')->middleware('is_admin');

//Routes to edit a carrier
Route::get('/admin/carriers/edit/{id}', 'Admin\CarriersController@edit')->name('admin.route')->middleware('is_admin');
Route::put('/admin/carriers/edit/{id}', 'Admin\CarriersController@update')->name('admin.route')->middleware('is_admin');

//Route to delete a carrier
Route::delete('/admin/carriers/delete/{id}', 'Admin\CarriersController@destroy')->name('admin.route')->middleware('is_admin');
