<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Article extends Eloquent implements UserInterface, RemindableInterface, SluggableInterface {

	use UserTrait, RemindableTrait, SluggableTrait;

	protected $guarded = ['id'];

	protected $sluggable = [
		'build_from' => 'title',
		'save_to'    => 'slug',
	];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'articles';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public static $rules = [
		'title' => 'required|regex:/(^[A-Za-z0-9 ]+$)+/|max:35'

	];

	public function getCategory()
	{
		return DB::table('categories')->select('category')
			->where('id', $this->category_id)->first()->category;
	}

	public function getImage(){
		return $this->hasOne('Photo');
	}


}