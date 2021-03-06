<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',[
	'uses' => '\App\Http\Controllers\WelcomeController@index',
	'as'=>'welcome']
	);

Route::get('welcome',[
	'uses' => '\App\Http\Controllers\WelcomeController@index',
	'as'=>'welcome']
	);	

Route::get('home', [
	'uses' => '\App\Http\Controllers\HomeController@index',
	'as'=>'home']
	);
	
Route::get('alert', function(){
	return redirect()->route('welcome')->with('info','You have signed in successfully!');
});



/** Authentication **/
Route::get('/signup',[
	'uses' => '\App\Http\Controllers\AuthController@getSignUp',
	'as'=>'auth.signup',
	'middleware' => ['guest']
	]);
	
Route::post('/signup',[
	'uses' => '\App\Http\Controllers\AuthController@postSignUp',
	'middleware' => ['guest'],
	]);
	
Route::get('/signin',[
	'uses' => '\App\Http\Controllers\AuthController@getSignIn',
	'as'=>'auth.signin',
	'middleware' => ['guest']
	]);
	
Route::post('/signin',[
	'uses' => '\App\Http\Controllers\AuthController@postSignIn',
	'middleware' => ['guest']
	]);
	
Route::get('/signout',[
	'uses' => '\App\Http\Controllers\AuthController@getSignOut',
	'as' => 'auth.signout'
	]);
		
/** Search**/
Route::get('/search',[
	'uses' => '\App\Http\Controllers\SearchController@getResults',
	'as' => 'search.results'
	]);
		