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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', 'ClientController@index');
// Route::get('/{client}', 'ClientController@show');

// // Route::get('create','ClientController@create');
// Route::delete('/{client}', 'ClientController@destroy')
//   ->name('articles.destroy');

Route::resource('clients', 'ClientController');
