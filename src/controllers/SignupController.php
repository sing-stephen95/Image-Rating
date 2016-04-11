<?php
namespace Image_Rating\controllers;

require_once "Controller.php";

class SignupController extends Controller{
	function processRequest(){
		$data = [];
		
		$this->view("signup")->render($data);	
	}
}
