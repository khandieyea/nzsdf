<?php


class nzsdf {
	

	static protected $path = '/../sdf/';

	
	static function path()
	{

		//Some other shit.

		return realpath(dirname(__FILE__).static::$path);

	}



}


?>