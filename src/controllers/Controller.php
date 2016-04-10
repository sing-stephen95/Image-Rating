<?php

namespace Image_Rating\controllers;

use Image_Rating as B;

abstract class Controller{
	
	public abstract function processRequest();

	
	public function view($name){
		static $loaded_views = [];
		if(!empty($loaded_views[$name])){
			return $loaded_views[$name];
		}
		
		$class_name = ucfirst($name) . "View";
		$full_name = B\NS_VIEWS. $class_name;
		$view_folder = __DIR__."/../views/";
		$path_name = $view_folder. $class_name . ".php";
		if(file_exists($path_name)){
		require_once $path_name;
		$loaded_views[$name] = new $full_name();
		return $loaded_views[$name];
		}
		
		return false;
	}
}