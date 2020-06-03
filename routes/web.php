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

Route::get('/agent', 'AgentController@index');
Route::get('/agents/create', 'AgentController@create');
Route::post('/agent', 'AgentController@store');
Route::get('/agents/edit/{id}', 'AgentController@edit');
Route::post('/agent/update/{id}', 'AgentController@update');
Route::delete('/agent/{id}', 'AgentController@destroy');

//routes for customer

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HomeController@dashboard');

//Routes for Lead Introducers
Route::get('/lead-introducers', 'LeadIntroducersController@index');
Route::get('/lead-introducers/create', 'LeadIntroducersController@create');
Route::post('/lead-introducer', 'LeadIntroducersController@store');
Route::get('/lead-introducers/edit/{id}', 'LeadIntroducersController@edit');
Route::post('/lead-introducers/update/{id}', 'LeadIntroducersController@update');
Route::delete('/lead-introducer/{id}', 'LeadIntroducersController@destroy');

//Routes for Creditors
Route::get('/creditors', 'CreditorsController@index');
Route::get('/creditors/create', 'CreditorsController@create');
Route::post('/creditor', 'CreditorsController@store');
Route::get('/creditors/edit/{id}', 'CreditorsController@edit');
Route::post('/creditors/update/{id}', 'CreditorsController@update');
Route::delete('/creditor/{id}', 'CreditorsController@destroy');

//Routes for Super Agents
Route::get('/super-agents', 'SuperAgentsController@index');
Route::get('/super-agents/create', 'SuperAgentsController@create');
Route::post('/super-agent', 'SuperAgentsController@store');
Route::get('/super-agents/edit/{id}', 'SuperAgentsController@edit');
Route::post('/super-agents/update/{id}', 'SuperAgentsController@update');
Route::delete('/super-agent/{id}', 'SuperAgentsController@destroy');

//Routes for Customers
Route::get('/customers', 'CustomerController@index');
Route::get('/customers/create', 'CustomerController@create');
Route::post('/customer', 'CustomerController@store');
Route::get('/customers/edit/{id}', 'CustomerController@edit');
Route::post('/customers/update/{id}', 'CustomerController@update');
Route::delete('/customer/{id}', 'CustomerController@destroy');

Route::post('/customers/updateforcustomer/{id}', 'CustomerController@updateforcustomer');

Route::get('/reports', 'ReportsController@index');

Route::get('/payments', 'PaymentsController@index');

//Customer POOL
Route::get('/customerspool', 'CustomerController@display');
Route::get('/customers/create', 'CustomerController@create');
Route::post('/customer', 'CustomerController@store');
Route::get('/customerspool/edit/{id}', 'CustomerController@editpool');
Route::post('/customers/update/{id}', 'CustomerController@update');
Route::delete('/customer/{id}', 'CustomerController@destroy');
Route::post('/customerspool/updateforcustomerpool/{id}', 'CustomerController@updateforcustomerpool');


//Customer Processed
Route::get('/customersprocess', 'CustomerController@process');

//Routes For MailBox
Route::get('/inbox', 'MailBoxController@index');
Route::get('/compose', 'MailBoxController@create');
Route::get('/read', 'MailBoxController@show1');