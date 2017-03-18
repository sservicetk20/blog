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


Route::get('/',[
	'as' => 'front.index',
	'uses' => 'HomeController@index'
	]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'],function(){

	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy', [
		'uses' => 'UsersController@destroy',
		'as' => 'users.destroy'
    ]);

	Route::resource('categories','CategoriesController');
	Route::get('categories/{id}/destroy', [
		'uses' => 'CategoriesController@destroy',
		'as' => 'categories.destroy'
		]);

	Route::resource('tags','TagsController');
	Route::get('tags/{id}/destroy', [
		'uses' => 'TagsController@destroy',
		'as' => 'tags.destroy'
		]);

	Route::resource('articles','ArticlesController');
	Route::get('articles/{id}/destroy', [
		'uses' => 'articlesController@destroy',
		'as' => 'articles.destroy'
		]);
	Route::get('images', [
		'uses' => 'ImagesController@index',
		'as' => 'images.index'
		]);

	Route::get('/',['as' => 'admin.index', function(){
		return view('admin.index');
	}]);

});

Auth::routes();

Route::get('/', 'HomeController@index');
