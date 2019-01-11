<?php

// Put all API routes here
Route::group(['prefix' => 'api/v1', 'namespace' => 'Api'], function() {

	// https://laravel.com/docs/5.7/controllers#resource-controllers
	Route::resource('departments', 'DepartmentController');

	// You may register many resource controllers at once by passing an array 
	// to the resources method:
	// Route::resources([
	//     'photos' => 'PhotoController',
	//     'posts' => 'PostController'
	// ]);
});
