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

Route::group(['middleware' => 'web'], function() {

	Route::get('/', ['uses' => 'IndexController@execute', 'as' => 'home']);

	Route::get('/homeopathy', ['uses' => 'HomeopathyController@execute', 'as' => 'homeopathy']);

	Route::get('/docs', ['uses' => 'DocsController@execute', 'as' => 'docs']);

	Route::match(['get', 'post'], '/contacts', ['uses' => 'ContactsController@execute', 'as' => 'contacts']);

});

Route::group(['prefix' => 'admin', 'middleware' => 'web'], function() {

	Route::group(['prefix' => 'contacts'], function() {

		Route::get('/', ['uses' => 'ContactsShowController@execute', 'as' => 'contacts-show']);
		Route::match(['get', 'post', 'delete'], '/contact/edit/{id}', ['uses' => 'ContactEditController@execute', 'as' => 'contact-edit']);

	});

	Route::group(['prefix' => 'services'], function() {

		Route::get('/', ['uses' => 'ServicesController@execute', 'as' => 'services']);
		Route::match(['get', 'post'], '/add', ['uses' => 'ServiceAddController@execute', 'as' => 'service-add']);
		Route::match(['get', 'post', 'delete'], '/edit/{id}', ['uses' => 'ServiceEditController@execute', 'as' => 'service-edit']);

	});

	Route::group(['prefix' => 'reviews'], function() {

		Route::match(['get', 'post'], '/', ['uses' => 'ReviewsController@execute', 'as' => 'reviews']);
		Route::match(['get', 'post'], '/add', ['uses' => 'ReviewAddController@execute', 'as' => 'review-add']);
		Route::match(['get', 'post', 'delete'], '/edit/{id}', ['uses' => 'ReviewEditController@execute', 'as' => 'review-edit']);

	});

	Route::group(['prefix' => 'docs'], function() {

		Route::match(['get', 'post'], '/', ['uses' => 'DocsShowController@execute', 'as' => 'docs-show']);
		Route::match(['get', 'post'], 'add', ['uses' => 'DocAddController@execute', 'as' => 'doc-add']);
		Route::match(['get', 'post', 'delete'], '/edit/{id}', ['uses' => 'DocEditController@execute', 'as' => 'doc-edit']);

	});

});