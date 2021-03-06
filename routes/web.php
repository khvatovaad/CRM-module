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

Route::resource('deals', 'DealController');
Route::resource('tasks', 'TaskController');

Route::get('/new', 'ClientController@New');
Route::get('/forgotten', 'ClientController@forgotten');
Route::get('/archive', 'ClientController@archiveShow');
Route::get('/favorite', 'DealController@Favorite');
Route::get('/notification', 'TaskController@notification');

Route::patch('/clients/{client}', 'ClientController@archive')->name('Archive');
Route::patch('/tasks/{task}', 'TaskController@check')->name('Check');
Route::patch('/deals/{deal}', 'DealController@Favorite')->name('Favorite');