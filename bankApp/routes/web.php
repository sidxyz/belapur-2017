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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bankadd','BankController@showForm');

Route::get('/showbanks','BankController@showBank');

Route::get('/deleteBank/{id}','BankController@deleteBank');

Route::get('/editBank/{id}','BankController@editBank');

Route::post('/storebank','BankController@addBank');

Route::post('/editDetails','BankController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
