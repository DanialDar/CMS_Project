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

Route::get('/', 'HomeController@dashboard');

//Routes for Agents

Route::get('/agent/{id}', 'AgentController@index');
Route::get('/agents/create', 'AgentController@create');
Route::post('/agent', 'AgentController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HomeController@dashboard');

Route::get('/lead-introducers', 'LeadIntroducersController@index');
Route::get('/lead-introducers/create', 'LeadIntroducersController@create');
Route::post('/lead-introducer', 'LeadIntroducersController@store');
Route::get('/lead-introducers/edit/{id}', 'LeadIntroducersController@edit');
Route::post('/lead-introducers/update/{id}', 'LeadIntroducersController@update');
Route::delete('/lead-introducer/{id}', 'LeadIntroducersController@destroy');

Route::get('/creditors', 'CreditorsController@index');
Route::get('/creditors/create', 'CreditorsController@create');
Route::post('/creditor', 'CreditorsController@store');
Route::get('/creditors/edit/{id}', 'CreditorsController@edit');
Route::post('/creditors/update/{id}', 'CreditorsController@update');
Route::delete('/creditor/{id}', 'CreditorsController@destroy');

Route::get('/super-agents', 'SuperAgentsController@index');
Route::get('/super-agents/create', 'SuperAgentsController@create');
Route::post('/super-agent', 'SuperAgentsController@store');
Route::get('/super-agents/edit/{id}', 'SuperAgentsController@edit');
Route::post('/super-agents/update/{id}', 'SuperAgentsController@update');
Route::delete('/super-agent/{id}', 'SuperAgentsController@destroy');

Route::get('/customers', 'CustomerController@index');

Route::get('/reports', 'ReportsController@index');

Route::get('/payments', 'PaymentsController@index');
