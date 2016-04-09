<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('login','AuthController@getUserLogin');

Route::post('login','AuthController@postUserLogin');

Route::get('logout', 'AuthController@userLogout');

Route::get('admin/login', 'AuthController@getAdminLogin');

Route::post('admin/login', 'AuthController@postAdminLogin');

Route::any('admin/logout', 'AuthController@AdminLogout');


// ADMIN DASHBOARD ROUTES

Route::get('api/articles', function(){

    $articles = Article::orderBy('created_at','DESC')->get();

    return $articles;

});

Route::resource('article', 'ArticlesController',['except' => ['destroy']]);	

Route::group(['prefix' => '/dashboard', 'before' => 'auth.admin'], function () {

	Route::post('category/add',array('uses' => 'AdminsController@AddCategory', 'as' => 'add.category'));
	//Article Routes
    Route::get('/article/all',array('uses' => 'ArticlesController@index', 'as' => 'article.all'));
	Route::get('/article/new',array('uses' => 'ArticlesController@create', 'as' => 'article.new'));
	Route::get('/article/{slug}/edit', 'ArticlesController@edit');
	Route::post('/articles/{id}/delete',array('uses'=>'ArticlesController@removeArticle', 'as' => 'remove.article'));
	Route::post('/uploadimg','ArticlesController@uploadsource');
	//Auth routes
	Route::get('/',array('uses' => 'AuthController@index', 'as' => 'admin.home'));
	Route::any('/logout',array('uses' => 'AuthController@AdminLogout','as' => 'admin.logout'));
});















