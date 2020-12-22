<?php
Route::post('/checkout', 'CheckoutController@store');

Route::get('/ordersummary', 'OrderSummaryController@index');

