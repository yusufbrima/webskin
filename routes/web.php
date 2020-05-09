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

/*Route::get('/', function () {
    return view('pages.index');
});*/

Route::get('/about','ServicesController@displaydoctors');

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/services','ServicesController@displayservices');

Route::get('/test', function () {
    return view('pages.test');
});

Route::resource('/doctors','DoctorsController');

#Route::get('/','ServicesController@index');
Route::resource('/','ServicesController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
