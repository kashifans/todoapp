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

Route::get('/todos', [
    'uses' => 'TodosController@index',
    'as' => 'todo'
]);

Route::post('/todo/create', [
    'uses' => 'TodosController@create'
]);

Route::get('/todo/delete/{id}', [
   'uses' => 'TodosController@delete',
   'as' => 'todo.delete'
]);

Route::get('/todo/edit/{id}', [
   'uses' => 'TodosController@edit',
   'as' => 'todo.edit'
]);

Route::post('/todo/update/{id}', [
   'uses' => 'TodosController@update',
   'as' => 'todo.update'
]);

Route::get('/todo/complete/{id}', [

    'uses' => 'TodosController@complete',
    'as' => 'todo.complete'

]);
