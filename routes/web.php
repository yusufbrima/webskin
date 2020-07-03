<?php

use Illuminate\Support\Facades\Route;
use App\Expert;
use App\Service;
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

Route::get('/about',function(){
	$doctors = Expert::all();
	return view('pages.about')->with(
		["doctors" => $doctors
	]);
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::resource('services','ServicesController');

Route::resource('experts','ExpertsController')->middleware('verified');


Route::resource('/appointments','AppointmentsController')->middleware('verified');

Route::resource('/profile','ProfilesController')->middleware('verified');

Route::get('dashboard','ProfilesController@index')->middleware('verified');

Route::resource('/patients','PatientsController')->middleware('verified');

Route::resource('/qualifications','QualificationsController')->middleware('verified');

#Route::get('/','ServicesController@index');
Route::get('/',function(){

	$resultset['doctors'] =  Expert::all();
	$resultset['services'] = Service::all();
	return view('pages.index')->with('resultset',$resultset);
});

Auth::routes(['verify' => true]);


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');



Route::get('/tour', 'Web\DashboardController@tour')->name('tour')->middleware('verified');

Route::get('/blank', 'Web\DashboardController@blank')->name('blank')->middleware('verified');

Route::get('/profile/{id}/edit', 'Web\DashboardController@edit')->name('edit')->middleware('verified');
