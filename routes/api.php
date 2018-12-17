<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('v1/calculate-tax/{country}/{basicSalary}', 'TaxCalculator@calculateTax')->name('api.calculate_tax');

Route::get('v1/employees', 'Api\EmployeeController@index')->name('api.employees');
Route::post('v1/employees', 'Api\EmployeeController@store')->name('api.employees');
Route::post('v1/employees/{id}', 'Api\EmployeeController@store')->name('api.employees');
Route::delete('v1/employees/{id}', 'Api\EmployeeController@store')->name('api.employees');