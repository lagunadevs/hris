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


// Route::get('/companies', function() {

// 	$companies = Company::all();

// 	return response()->json($companies);

// });

// Route::delete('/companies/{id}', function($id) {

// 	$companies = Company::find($id);

// 	$companies->delete();

// 	return response()->json($companies);

// });

// Route::get('/companies/{id}', function($id) {

// 	$companies = Company::find($id);

// 	return response()->json($companies);

// });

// Route::post('/companies', function(Request $request) {

// 	$company = new Company;
// 	$company->contact_person = request('name');
// 	$company->company_email = request('company_email');
// 	$company->phone_number = request('phone_number');
// 	$company->company_type = false;
// 	$company->name = request('company_name');
// 	$company->address = request('company_address');
// 	$company->save();
// 	$data['company'] = $company;
// 	$data['message'] = 'Success';
// 	return response()->json($company, 200);

// });

Route::group(['prefix' => 'companies'], function() {

	Route::get('/', 'Api\CompanyController@get');
	Route::post('/', 'Api\CompanyController@store');
	Route::get('/{id}', 'Api\CompanyController@edit');
	Route::delete('/{id}', 'Api\CompanyController@delete');
	Route::get('/user/{id}', 'Api\CompanyController@verify');
	
});



Route::get('v1/employees', 'Api\EmployeeController@index')->name('api.employees');
Route::post('v1/employees', 'Api\EmployeeController@store')->name('store.employees');
Route::get('v1/employees/{id}', 'Api\EmployeeController@edit')->name('edit.employees');
Route::delete('v1/employees/{id}', 'Api\EmployeeController@delete')->name('delete.employees');

