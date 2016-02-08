<?php

class Category extends \Eloquent {

	protected $table = 'categories';

	public $timestamps = false ;

	public function article(){
		$this->hasOne('Article');
	}
}