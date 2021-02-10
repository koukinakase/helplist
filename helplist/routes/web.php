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

Route::get('/', 'TaskController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->prefix('tasks')->as('tasks.')->group(function () {
    Route::get('create', 'TaskController@create')->name('create');
    Route::post('store', 'TaskController@store')->name('store');
    Route::post('{task}/delete', 'TaskController@delete')->name('delete');
});

Route::get('/tasks/{id}', 'TaskController@show')->name('tasks.show');

