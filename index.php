<?php

namespace Image_Rating;

require_once "src/controllers/MainPageController.php";
require_once "src/controllers/SigninController.php";
require_once "src/controllers/SignupController.php";

define("NS_BASE", "Image_Rating\\");
define(NS_BASE . "NS_CONTROLLERS", "Image_Rating\\controllers\\");
define(NS_BASE . "NS_VIEWS", "Image_Rating\\views\\");

$allowed_controllers = ["signup", "signin", "upload", "main"];

if(!empty($_REQUEST['c']) && in_array($_REQUEST['c'], $allowed_controllers)){
	$controller_name = NS_CONTROLLERS . ucfirst($_REQUEST['c'])."Controller";
	
}	else{
	$controller_name = NS_CONTROLLERS . "MainPageController";
}
	
$controller = new $controller_name();

$controller->processRequest();


