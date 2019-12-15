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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

// Route Availbility
Route::get('/availbility', 'AvailbilityController@index')->name('availbility');
Route::post('/InsertAvailbility', 'AvailbilityController@InsertAvailbility')->name('InsertAvailbility');
Route::get('/DeleteAvailbility{id}', 'AvailbilityController@destroyAvailbility')->name('DeleteAvailbility');
Route::put('/UpdateAvailbility{id}', 'AvailbilityController@UpdateAvailbility')->name('UpdateAvailbility');

// Route RDBMS
Route::get('/rdbms', 'RdbmsController@index')->name('rdbms');
Route::post('/InsertRdbms', 'RdbmsController@InsertRdbms')->name('InsertRdbms');
Route::get('/DeleteRdbms{id}', 'RdbmsController@destroyRdbms')->name('DeleteRdbms');
Route::put('/UpdateRdbms{id}', 'RdbmsController@UpdateRdbms')->name('UpdateRdbms');

// Route Application
Route::get('/application', 'ApplicationController@index')->name('application');
Route::post('/InsertApplication', 'ApplicationController@InsertApplication')->name('InsertApplication');
Route::get('/DeleteApplication{id}', 'ApplicationController@destroyApplication')->name('DeleteApplication');
Route::put('/UpdateApplication{id}', 'ApplicationController@UpdateApplication')->name('UpdateApplication');
