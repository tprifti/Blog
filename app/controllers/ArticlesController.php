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
		$article = Article::all();
		return View::make('article.viewall')->with('article',$article);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /articles/create
	 *
	 * @return Response
	 */
	public function create()
	{
		 $category = Category::lists('category', 'id');

    	return View::make('article.newpost')->with('category',$category);
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
		$article->category_id = 1; // Should fix this
		$article->save();

		$thumb = new Photo;
		$image = Input::file('file');
		if($image){
		$filename = time() . '-' . $image->getClientOriginalName();
		$destinationPath = public_path('thumbs/' . $filename);
		$a = Image::make($image->getRealPath())->fit(1280,720)->save($destinationPath,50);
		// SAVE TO DB
		$thumb->image = 'thumbs/' . $filename;
		$thumb->article_id = $article->id;
		$thumb->save();

		}else{
			Response::json(['error' => 'Image is Required'], 400);
		}

	
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
	 * PUT /articles/{slug}
	 *
	 * @param  int $slug
	 * @return Response
	 */
	public function update($slug)
	{

		$thumbPath = Input::get('thumbPath');
		$thumbId = Input::get('thumbId');
		$image = Input::file('image');

		$article = Article::where('slug', $slug)->first();
		$article->title = Input::get('title');
		$article->body = Input::get('body');
		$article->save();


		if($image){
			 File::delete($thumbPath);
			$file = Photo::where('id', $thumbId)->delete();

			$thumb = new Photo;
		$image = Input::file('image');
		$filename = time() . '-' . $image->getClientOriginalName();
		$destinationPath = public_path('thumbs/' . $filename);
		$a = Image::make($image->getRealPath())->fit(1280,720)->save($destinationPath,50);
		// SAVE TO DB
		$thumb->image = 'thumbs/' . $filename;
		$thumb->article_id = $article->id;
		$thumb->save();
		return Redirect::to('/dashboard')->with('message', 'Thumbnail updated successfully');

		} else {
			return Redirect::to('/dashboard')->with('message','Article Updated successfully');
		}
		

		

		// return View::make('admin.home')->withMessage('Article Saved!');
	}

	public function uploadsource()
	{
		$image = Input::file('file');
		
		if ($image->isValid(Input::file('file'))) {
		$filename = time() . '-' . $image->getClientOriginalName();
		$destinationPath = public_path('source/' . $filename);
		$a = Image::make($image->getRealPath())->save($destinationPath,50);
		
		return $filename;
		}	

	}
	/**
	 * Return response of dropzone
	 */
	
	public function uploadthumb(){
		$file = Input::file('image');

		 $arrayfile = array('image' => $file);

		$rules = array(
	  		'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000' // max 10000kb
		);
		
		$validator = Validator::make($arrayfile, $rules);
		 if ($validator->fails())
	    {
	          // Redirect or return json to frontend with a helpful message to inform the user 
	          // that the provided file was not an adequate type
	          return Response::json(['error' => $validator->errors()->getMessages()], 400);
	    } else
	    {
        // Store the File Now
        // read image from temporary file
        	return $file;
	    };
			
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /articles/{slug}/delete
	 *
	 * @param  int $slug
	 * @return Response
	 */


	public function removeArticle($id)
	{
		$item = Article::where('id',$id)->first();
			$item->delete();

			return Redirect::route('admin.home')->with('message', "Item deleted successfully");

	}
}

