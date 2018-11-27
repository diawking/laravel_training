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


Route::get('crud/show2/{id}','EmployeeController@show2');
Route::resource('crud','EmployeeController');

Route::get('bar-chart', 'ChartController@index');
// Route::get('crud/edit','EmployeeController@edit');
// Route::get('crud/create','EmployeeController@create');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('mail','MailController@basic_email');

Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');
