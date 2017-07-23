<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',[
	'uses' => 'ProductController@index',
	'as' => 'product.index'
]);

Route::get('/add-to-cart/{id}', [
	'uses' => 'ProductController@addToCart',
	'as' => 'product.addToCart'
]);

Route::get('/shopping-cart', [
	'uses' => 'ProductController@getCart',
	'as' => 'product.shopping-cart'
]);

Route::get('/checkout', [
	'uses' => 'ProductController@checkout',
	'as' => 'checkout'
]);


Route::group(['prefix' => 'user'], function() {

	Route::group(['middleware' => 'guest'], function() {
	    	Route::get('/signup',[
				'uses' => 'UserController@signup',
				'as' => 'user.signup'
			]);
			Route::post('/signup',[
				'uses' => 'UserController@postSignup',
				'as' => 'user.signup'
			]);

			Route::get('/signin',[
				'uses' => 'UserController@signin',
				'as' => 'user.signin'
			]);

			Route::post('/signin',[
				'uses' => 'UserController@postSignin',
				'as' => 'user.signin'
			]);
	});

	Route::group(['middleware' => 'auth'], function() {
	    Route::get('/profile', [
			'uses' => 'UserController@profile',
			'as' => 'user.profile'
		]);

		Route::get('/logout', [
			'uses' => 'UserController@logout',
			'as' => 'user.logout'
		]);
	});

});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
