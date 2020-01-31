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
    return redirect() -> route('employee.index');
});

Route::get('/employee', 'EmployeeController@index') -> name('employee.index');

Route::get('/employee/create', 'EmployeeController@create') -> name('employee.create') -> middleware('auth');

Route::post('/employee/store', 'EmployeeController@store') -> name('employee.store') -> middleware('auth');

Route::get('/employee/{idp}/remove/task/{idt}', 'ExtraController@removeTaskFromEmployee') -> name('employee.remove.task') -> middleware('auth');

Route::get('/employee/{id}/edit', 'EmployeeController@edit') -> name('employee.edit') -> middleware('auth');

Route::post('/employee/{id}/update', 'EmployeeController@update') -> name('employee.update') -> middleware('auth');

Route::get('/employee/{id}/delete', 'EmployeeController@destroy') -> name('employee.delete') -> middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
