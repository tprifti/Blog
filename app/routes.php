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

Route::get('/', function()
{
return View::make('home');
});

Route::get('login','AuthController@getUserLogin');

Route::post('login','AuthController@postUserLogin');

Route::get('logout', 'AuthController@userLogout');

Route::get('admin/login', 'AuthController@getAdminLogin');

Route::post('admin/login', 'AuthController@postAdminLogin');

Route::any('admin/logout', 'AuthController@AdminLogout');
Route::get('/admin/dashboard', 'AuthController@index');

Route::get('admin/article/new', function(){

    $category = Category::lists('category', 'id');
    return View::make('admin.newpost')->with('category',$category);
});

Route::get('article/{slug}/edit', 'ArticlesController@edit');
Route::resource('article', 'ArticlesController');
// Route::post('/article/{slug}',array('uses'=>'ArticlesController@update', 'as' => 'update.article'));
Route::post('/uploadimg','ArticlesController@uploadsource');



// ADMIN DASHBOARD ROUTES

Route::get('/articles/all','AdminsController@ListAllArticles');

Route::post('category/add',array('uses' => 'AdminsController@AddCategory', 'as' => 'add.category'));


Route::groy







