<?php

class Category extends \Eloquent {

	protected $table = 'categories';

	public $timestamps = false ;

	public function articles(){
		$this->hasMany('Article');
	}
}