<?php

// -- route for Jobapps

Route::get('/pdf', 'PdfController@invoice');

// Provide controller methods with object instead of ID
Route::model('jobapps', 'Jobapp');
Route::model('positions', 'Position');
Route::model('marriages', 'Marriage');

Route::get('jobapps/{jobapps}/pdf',array(
	'as' =>'jobapps.pdf'
	,'uses' => 'JobappsController@pdf'));
Route::resource('jobapps','JobappsController');
Route::resource('positions','PositionsController');
Route::resource('marriages','MarriageController');


Route::bind('jobapps', function($value, $route) {
	return App\Models\Hr\Jobapp::whereJob_app_no($value)->first();
});