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

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
    Route::get('/DeleteUser{id}', 'UserController@destroyUser')->name('DeleteUser');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

// Route Availbility
Route::get('/availbility', 'AvailbilityController@index')->name('availbility');
Route::post('/InsertAvailbility', 'AvailbilityController@InsertAvailbility')->name('InsertAvailbility');
Route::get('/DeleteAvailbility{id}', 'AvailbilityController@destroyAvailbility')->name('DeleteAvailbility');
Route::put('/UpdateAvailbility{id}', 'AvailbilityController@UpdateAvailbility')->name('UpdateAvailbility');
Route::get('/report_availbility', 'AvailbilityController@view_report')->name('report_availbility');
Route::get('/pdf_availbility', 'AvailbilityController@export_pdf')->name('pdf_availbility');


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

// Route Database
Route::get('/database', 'DatabaseController@index')->name('database');
Route::post('/InsertDatabase', 'DatabaseController@InsertDatabase')->name('InsertDatabase');
Route::get('/DeleteDatabase{id}', 'DatabaseController@destroyDatabase')->name('DeleteDatabase');
Route::put('/UpdateDatabase{id}', 'DatabaseController@UpdateDatabase')->name('UpdateDatabase');

// Task
Route::get('/task', 'TaskController@index')->name('task');
Route::post('/InsertTask', 'TaskController@InsertTask')->name('InsertTask');
Route::get('/DeleteTask{id}', 'TaskController@destroyTask')->name('DeleteTask');
Route::put('/UpdateTask{id}', 'TaskController@UpdateTask')->name('UpdateTask');
Route::get('/report_task', 'TaskController@view_report')->name('report_task');
Route::get('/pdf_task', 'TaskController@export_pdf')->name('pdf_task');

// Report
Route::get('/report_crucial', 'CrucialDatabasesController@view_report')->name('report_crucial');
Route::get('/pdf_crucial', 'CrucialDatabasesController@export_pdf')->name('pdf_crucial');
