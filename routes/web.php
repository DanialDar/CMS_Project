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
    return view('index');
});

Auth::routes();
 
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HomeController@dashboard');

Route::get('/lead-introducers', 'LeadIntroducersController@index');
Route::get('/lead-introducers/create', 'LeadIntroducersController@create');
Route::post('/lead-introducer', 'LeadIntroducersController@store');
Route::get('/lead-introducers/edit/{id}', 'LeadIntroducersController@edit');
Route::post('/lead-introducers/update/{id}', 'LeadIntroducersController@update');

Route::get('/creditors', 'CreditorsController@index');
Route::get('/creditors/create', 'CreditorsController@create');
Route::get('/creditors/edit', 'CreditorsController@edit');

Route::get('/super-agents', 'SuperAgentsController@index');
Route::get('/super-agents/create', 'SuperAgentsController@create');
Route::get('/super-agents/edit', 'SuperAgentsController@edit');

Route::get('/customers', 'CustomerController@index');

Route::get('/reports', 'ReportsController@index');

Route::get('/payments', 'PaymentsController@index');