<?php

use Illuminate\Support\Facades\Route;

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


// Route to Details page saved as index.blade.php
Route::get('/products','ProductsController@index');

// Route::get('/products/{{$products->name}}','ProductsController@category');

// this rout goes to the category page with the display of the category name in the url
Route::get('/category/{name}', 'ProductsController@category');

// Route to phoneslist page
Route::get('/products/{product:slug}','ProductsController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route to the checkout
Route::get('/checkout', 'CheckoutController@index');


require 'web_andrew.php';
// Andrew's web.php
require 'web_andrew.php';

// jaiss's web.php
require 'web_jaiss.php';

// mayowa's web.php
require 'web_mayowa.php';

// shristi's
require 'web_shristi.php';

// erik's web.php
require 'web_erik.php';

// pournima's web.php
require 'web_pournima.php';

// aman's web.php
require 'web_aman.php';

