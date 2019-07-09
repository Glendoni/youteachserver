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
| Test CI
*/
	Route::post('login', 'AuthController@login')->name('log');
	Route::post('signup', 'AuthController@signup');  
	Route::get('signup/activate/{token}', 'AuthController@signupActivate');
	Route::middleware('auth:api')->get('/user', function (Request $request) {
	    return $request->user();
	});
  	Route::group([
      'middleware' => 'auth:api'
    ], function() {
	});
