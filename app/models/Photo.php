<?php

class Photo extends \Eloquent {

	protected $table = 'images';

	public $timestamps = false ;

	public function user(){
		return $this->belongsTo('User');
	}
}