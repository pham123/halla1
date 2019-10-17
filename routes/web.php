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

Route::get('/company', 'CompanyController@allCompany');

Route::get('/company/edit/{id}', 'CompanyController@editCompany');
Route::post('/company/edit/{id}', 'CompanyController@updateCompany');

Route::post('/company', 'CompanyController@newCompany');

Route::post('/newcompany', 'CompanyController@newCompany');