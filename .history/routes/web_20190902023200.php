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

Route::get(
    ''
)

Auth::routes();
Route::get('firstinput', 'FirstInputController@index')->name('firstinput');
Route::post('firstinput', 'FirstInputController@add')->name('firstinput');
Route::get('home', 'HomeController@index')->name('home');
Route::post('home', 'SpendingController@create')->name('home');
Route::post('submitInvest', 'InvestmentController@update')->name('submitInvest');
Route::post('submitSpending', 'SpendingController@update')->name('submitSpending');
