<?php namespace ;

use Eloquent;

class Student_info extends Eloquent {

	protected $fillable = [];
	public function getdata(){
		return "hello";
	}

}