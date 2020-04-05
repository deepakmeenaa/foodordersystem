<?php

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


Route::view('upload1','fileupload');
Route::get('proj','projcontroller@pl');
//Route::get('customer1','customercontroller@customer');
Route::resource('customer','customercontroller');
Route::resource('manager','managercontroller');
Route::resource('contact','contactcontroller');
Route::resource('restaurants','restaurantscontroller');
Route::resource('food','foodcontroller');
Route::get('orders','orderscontroller@index');


