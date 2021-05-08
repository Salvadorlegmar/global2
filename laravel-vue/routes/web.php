<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/form', function () {
    return view('form');
});

Route::get('/gestor', function () {
    return view('gestor');
});

Route::name('print')->get('/imprimir', 'CompanyController@imprimir');
//Route::get('imprimer-pdf', )
Route::resource('companies','CompanyController', ['except' => 'show']);
