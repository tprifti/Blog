<?php

class ArticlesController extends \BaseController
{


	/**
	 * Display a listing of the resource.
	 * GET /articles
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('home');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /articles/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /articles
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = Article::$rules;
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()) {
			$messages = $validator->messages();
			return $messages;
		}
		$admin = Auth::admin();
		$article = new Article;
		$article->admin_id = Auth::admin()->get()->id;
		$article->title = Input::get('title');
		$article->body = Input::get('body');
		$article->category_id = Input::get('category_id');
		$article->save();


		$thumb = new Photo;
		$image = Input::file('image');
		$filename = time() . '-' . $image->getClientOriginalName();
		$destinationPath = public_path('thumbs/' . $filename);
		$a = Image::make($image->getRealPath())->fit(1280,720)->save($destinationPath,50);
		// SAVE TO DB
		$thumb->image = 'thumbs/' . $filename;
		$thumb->article_id = $article->id;
		$thumb->save();

		return View::make('admin.home');

	}

	/**
	 * Display the specified resource.
	 * GET /articles/{id}
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function show($slug)
	{
		$article = Article::where('slug', $slug)->first();
		return View::make('single')->with('article', $article);

	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /articles/{id}/edit
	 *
	 * @param  string $slug
	 * @return Response
	 */
	public function edit($slug)
	{
		$articles = Article::where('slug', $slug)->first();
		return View::make('admin.editpost')->with('articles', $articles, $slug);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /articles/{id}
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function update($slug)
	{
		$article = Article::where('slug', $slug)->first();
		$article->title = Input::get('title');
		$article->body = Input::get('body');
		$article->save();


		return View::make('admin.home')->withMessage('Article Saved!');
	}

	public function uploadsource()
	{
		$image = Input::file('file');
		
		if ($image->isValid(Input::file('file'))) {
		$filename = time() . '-' . $image->getClientOriginalName();
		$destinationPath = public_path('source/' . $filename);
		$a = Image::make($image->getRealPath())->save($destinationPath,50);
		return $filename;

		}	else {
			return Redirect::back()->withErrors($image->errors);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /articles/{slug}/delete
	 *
	 * @param  int $slug
	 * @return Response
	 */


	public function removeArticle($slug)
	{
		$item = Article::find($slug);
		if (!is_null($item)) {
			$item->delete();
		}
		return "Item deleted";

	}
}