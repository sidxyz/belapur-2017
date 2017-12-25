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

Route::get('/accountcreation','UserController@show');

Route::post('/createaccount','UserController@store');

Route::get('/updateadditionalform','DocumentsController@show');

Route::post('/uploaddocs','DocumentsController@store');

Route::get('/approvals','AdminController@showPendingApprovals');

Route::get('/showprofile/{id}','DocumentsController@showDocsById');

Route::get('/approveprofile/{id}','DocumentsController@approveProfileById');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
