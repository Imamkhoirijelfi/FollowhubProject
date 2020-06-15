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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');
Route::resource('events', 'EventsController');
Route::get('/events', 'EventsController@index')->name('events');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/program', 'ProgramController@index')->name('program');
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/createEvent', 'EventsController@create')->name('createEvent');

