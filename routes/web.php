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

//App::bind('App\Deductions\TaxInterface','App\Deductions\Malaysia');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login ');
})->name('login');

Route::post('/login', 'Auth\LoginController@login')->name('web.login');
Route::get('/logout', function() {
	auth()->logout();
    return view('login ');
})->name('web.logout');


Route::middleware('auth')->group(function () {
	Route::get('/admin/manager/dashboard', function () {
	    return view('index');
	});
});


