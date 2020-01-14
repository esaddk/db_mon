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
    Route::delete('/DeleteUser', 'UserController@destroyUser')->name('DeleteUser');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/chartTask', 'HomeController@chartTask');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

// Route Availbility
Route::get('/availbility', 'AvailbilityController@index')->name('availbility');
Route::post('/InsertAvailbility', 'AvailbilityController@InsertAvailbility')->name('InsertAvailbility');
Route::delete('/DeleteAvailbility', 'AvailbilityController@destroyAvailbility')->name('DeleteAvailbility');
Route::put('/UpdateAvailbility{id}', 'AvailbilityController@UpdateAvailbility')->name('UpdateAvailbility');
Route::get('/report_availbility', 'AvailbilityController@view_report')->name('report_availbility');
Route::get('/pdf_availbility', 'AvailbilityController@export_pdf')->name('pdf_availbility');


// Route RDBMS
Route::get('/rdbms', 'RdbmsController@index')->name('rdbms');
Route::post('/InsertRdbms', 'RdbmsController@InsertRdbms')->name('InsertRdbms');
Route::delete('/DeleteRdbms', 'RdbmsController@destroyRdbms')->name('DeleteRdbms');
Route::put('/UpdateRdbms{id}', 'RdbmsController@UpdateRdbms')->name('UpdateRdbms');

// Route Application
Route::get('/application', 'ApplicationController@index')->name('application');
Route::post('/InsertApplication', 'ApplicationController@InsertApplication')->name('InsertApplication');
Route::delete('/DeleteApplication', 'ApplicationController@destroyApplication')->name('DeleteApplication');
Route::put('/UpdateApplication{id}', 'ApplicationController@UpdateApplication')->name('UpdateApplication');

// Route Database
Route::get('/database', 'DatabaseController@index')->name('database');
Route::post('/InsertDatabase', 'DatabaseController@InsertDatabase')->name('InsertDatabase');
Route::delete('/DeleteDatabase', 'DatabaseController@destroyDatabase')->name('DeleteDatabase');
Route::put('/UpdateDatabase{id}', 'DatabaseController@UpdateDatabase')->name('UpdateDatabase');

// Task
Route::get('/task', 'TaskController@index')->name('task');
Route::post('/InsertTask', 'TaskController@InsertTask')->name('InsertTask');
Route::delete('/DeleteTask', 'TaskController@destroyTask')->name('DeleteTask');
Route::put('/UpdateTask{id}', 'TaskController@UpdateTask')->name('UpdateTask');
Route::get('/report_task', 'TaskController@view_report')->name('report_task');
Route::get('/pdf_task', 'TaskController@export_pdf')->name('pdf_task');

// Report
Route::get('/report_crucial', 'CrucialDatabasesController@view_report')->name('report_crucial');
Route::get('/pdf_crucial', 'CrucialDatabasesController@export_pdf')->name('pdf_crucial');

Route::get('/report_db_size', 'DatabaseSizeController@view_report')->name('report_db_size');
Route::get('/pdf_db_size', 'DatabaseSizeController@export_pdf')->name('pdf_db_size');

Route::get('/report_mysql_object', 'MysqlObjectController@view_report')->name('report_mysql_object');
Route::get('/pdf_mysql_object', 'MysqlObjectController@export_pdf')->name('pdf_mysql_object');

Route::get('/report_oracle_object', 'OracleObjectController@view_report')->name('report_oracle_object');
Route::get('/pdf_oracle_object', 'OracleObjectController@export_pdf')->name('pdf_oracle_object');

Route::get('/report_postgre_object', 'PostgreObjectController@view_report')->name('report_postgre_object');
Route::get('/pdf_postgre_object', 'PostgreObjectController@export_pdf')->name('pdf_postgre_object');
