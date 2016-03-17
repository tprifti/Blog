<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		$gethealth = Category::where('category', 'Health')->first()->id;
		$getEntertainment = Category::where('category', 'Entertainment')->first()->id;

		$entertainmentArticles = Article::where('category_id',$getEntertainment)->orderBy('created_at','DESC')->get();

		$healthArticles = Article::where('category_id',$gethealth)->orderBy('created_at', 'DESC')->get();
		$getlifstyle = Category::where('category', 'Lifestyle')->first()->id;
		$latestArticles = Article::orderBy('created_at', 'DESC')->take(10)->get();
		$articles = Article::where('category_id', $getlifstyle)->orderBy('created_at','DESC')->get();
		$entertainmentHeader = $entertainmentArticles->take(1);
		$eArticles = $entertainmentArticles->take(5)->slice(1);
		$slides= $latestArticles->take(4);
		$related = $articles->take(2);
		$small = $articles->slice(2);
		$gethealthArticle = $healthArticles->take(1);
		$smallHealthArticles = $healthArticles->take(5)->slice(1);


		return View::make('home')->with('slides',$slides)
								 ->with('latestArticles',$latestArticles)
								 ->with('related',$related)
			                     ->with('articles',$articles)
			                     ->with('small', $small)
			                     ->with('gethealthArticle',$gethealthArticle)
			                     ->with('smallHealthArticles',$smallHealthArticles)
			                     ->with('entertainmentHeader', $entertainmentHeader)
			                     ->with('eArticles',$eArticles);


	}


	
}
