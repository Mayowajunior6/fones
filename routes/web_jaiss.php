<?php

Route::get('contact', 'ContactController@index');
Route::post('contact', 'ContactController@store')->name('contact.store');