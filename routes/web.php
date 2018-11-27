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

// basic route
Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return view('index');
});

Route::get('hello', function () {
    return 'Hello Laravel';
});

// route with controller
Route::get('welcome/hello','WelcomeController@hello');
Route::get('welcome/member','WelcomeController@member');
Route::get('welcome/page/{id}','WelcomeController@page');
Route::get('welcome/title','WelcomeController@title');


Route::resource('crud','EmployeeController');

// Route::get('crud/edit','EmployeeController@edit');
// Route::get('crud/create','EmployeeController@create');
