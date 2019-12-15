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

Route::get('/availbility', 'AvailbilityController@index')->name('availbility');
Route::post('/InsertAvailbility', 'AvailbilityController@InsertAvailbility')->name('InsertAvailbility');
// Route::post('/DeleteAvailbility', 'AvailbilityController@destroy')->name('DeleteAvailbility');
Route::get('/DeleteAvailbility{id}', 'AvailbilityController@destroyAvailbility')->name('DeleteAvailbility');
Route::delete('/DeleteAvailbility{id}', 'AvailbilityController@destroy')->name('Delete');
Route::put('/UpdateAvailbility{id}', 'AvailbilityController@UpdateAvailbility')->name('UpdateAvailbility');
