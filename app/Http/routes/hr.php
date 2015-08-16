<?php

// -- route for Jobapps

Route::get('/pdf', 'PdfController@invoice');

// Provide controller methods with object instead of ID
Route::model('jobapps', 'Jobapp');
Route::model('positions', 'Position');
Route::model('marriages', 'Marriage');

Route::get('jobapps/{jobapps}/pdf',array(
	'as' =>'jobapps.pdf'
	,'uses' => 'Hr\JobappsController@pdf'));

Route::get('/genpass','Hr\EmployeeController@generatePassword');


Route::resource('jobapps','Hr\JobappsController');
Route::resource('positions','Hr\PositionsController');
Route::resource('marriages','Hr\MarriageController');
Route::resource('employees','Hr\EmployeeController');


Route::bind('jobapps', function($value, $route) {
	return App\Models\Hr\Jobapp::whereJob_app_no($value)->first();
});