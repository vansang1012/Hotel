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
Route::group(['prefix' => 'employees'], function () {
    Route::get('/', 'EmployeeController@index')->name('employee.index');
    Route::get('create', 'EmployeeController@create')->name('employee.create');
    Route::post('store', 'EmployeeController@store')->name('employee.store');
    Route::get('edit/{id}', 'EmployeeController@edit')->name('employee.edit');
    Route::post('update/{id}', 'EmployeeController@update')->name('employee.update');
    Route::get('destroy/{id}', 'EmployeeController@destroy')->name('employee.destroy');
    Route::get('search', 'EmployeeController@search')->name('employee.search');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
