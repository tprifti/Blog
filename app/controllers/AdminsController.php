<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/6/2016
 * Time: 6:53 PM
 */

class AdminsController extends \BaseController{


    public function AddCategory()
    {

        $category = New Category();

        $cat = Input::get('category');

        $category->category = $cat;
        $category->save();
        return Redirect::route('article.new');
    }

}