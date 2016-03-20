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
Route::get('/admin/dashboard', 'AuthController@index');

Route::get('admin/article/new', function(){

    $category = Category::lists('category', 'id');
    return View::make('admin.newpost')->with('category',$category);
});

Route::get('article/{slug}/edit', 'ArticlesController@edit');
Route::resource('article', 'ArticlesController',['except' => ['destroy']]);
Route::post('/article/{slug}/delete',array('uses'=>'ArticlesController@removeArticle', 'as' => 'remove.article'));
Route::post('/uploadimg','ArticlesController@uploadsource');

Route::get('test', function(){

    $all = Article::all();
    $h = $all->take(5)->slice(1);
    return $h;
});



// ADMIN DASHBOARD ROUTES

Route::get('api/articles', function(){

    $articles = Article::all();

    return json_encode($articles);

});


//Route::get('getdata', function(){
//
//    $term = Str::lower(Input::get('term'));
//
//    $data = Article::where('title', 'LIKE', '%'.$term.'%')->groupBy('title')->get();
//
//    foreach ($data as $v) {
//    	$return_array[] = array('value' => $v->title);
//    }
//
//    return Response::json($return_array);
//});

Route::get('/articles/all','AdminsController@ListAllArticles');

Route::post('category/add',array('uses' => 'AdminsController@AddCategory', 'as' => 'add.category'));













