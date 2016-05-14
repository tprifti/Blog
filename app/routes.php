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

Route::get('api/articles', function(){

    $articles = Article::orderBy('created_at','DESC')->get();

    return $articles;

});
Route::get('api/categories',function(){
	$categories = Category::all();
	return $categories;
});

Route::get('/article/{slug}',array('uses' => 'ArticlesController@show','as'=>'article.show'));

Route::group(['prefix' => '/dashboard', 'before' => 'auth.admin'], function () {

	Route::post('/category/add',array('uses' => 'AdminsController@AddCategory', 'as' => 'add.category'));
	//Article Routes
	Route::get('/article/all',array('uses' => 'ArticlesController@index','as' => 'article.index'));
	Route::get('/article/create',array('uses' => 'ArticlesController@create','as' => 'article.create'));
	Route::post('/article',array('uses' => 'ArticlesController@store','as' => 'article.store'));
	Route::get('/article/{slug}/edit',array('uses' => 'ArticlesController@edit','as' => 'article.edit'));
	Route::put('/article/{slug}',array('uses' => 'ArticlesController@update','as' => 'article.update'));
	Route::get('/article/new',array('uses' => 'ArticlesController@create', 'as' => 'article.new'));
	Route::post('/article/{id}/delete',array('uses'=>'ArticlesController@removeArticle', 'as' => 'remove.article'));
	Route::post('/uploadimg','ArticlesController@uploadsource');
	//Auth routes
	Route::get('/',array('uses' => 'AuthController@index', 'as' => 'admin.home'));
	Route::any('/logout',array('uses' => 'AuthController@AdminLogout','as' => 'admin.logout'));
	Route::post('/uploadthumb','ArticlesController@uploadthumb');
});

Route::get('/hello',function(){
	return View::make('hello');
});

















