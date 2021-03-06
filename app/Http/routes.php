<?php

Route::get('/', function () {
    return view('auth/login');
    //return view('welcome');
});

Route::get('/portal', ['middleware' => 'auth',function () {	
    return view('portal',compact('user'));
}]);

Route::get('/home', ['middleware' => 'auth',function () {
	$user = Auth::user();
    return view('portal', compact('user'));
}]);

Route::get('/hr', function () {
    return view('hr.portal');
});




// Include HR routes files
require __DIR__.'/routes/hr.php';
require __DIR__.'/routes/authen.php';
//- See more at: http://laravelsnippets.com/snippets/split-routes-into-different-files#sthash.xTsA2Ah3.dpuf