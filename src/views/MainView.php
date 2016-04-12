<?php

namespace Image_Rating\views;

require_once "View.php";
use Image_Rating as B;
class MainView extends View{

	public function render($data){
		
		?>
		<!DOCTYPE html><html>
		<head>
			<title>Image Rating</title>
			<link rel="stylesheet" type="text/css" href="../styles/indexStyle.css">
		</head>

		<body>

			<h1 align="center">Image Rating</h1>
			
			<form method="post" action="./index.php?c=signup">
				<input type="submit" id="signup" name="signup" value="Sign Up"/>
			</form>
			
			<form method="post" action="./index.php?c=signin">
				<input type="submit" id="signin" name="signin" value="Sign In"/>
			</form>
			<?php
	//		if(!empty($_REQUEST['signup'])){
	//			$_REQUEST['c'] = "signup";
	//			/*$full_name = B\NS_CONTROLLERS. ucfirst($_REQUEST['c']). "Controller";
	//			$c_folder = __DIR__ . "/../controllers/";
	//			$path_name = $c_folder . $_REQUEST['c']. "Controller.php";
	//			if (file_exists($path_name)) {
	//				require_once $path_name;
	//				$controller = new $full_name();
	//				$controller->processRequest();
	//			}*/
	//		} else if(!empty($_REQUEST['signin'])){
	//			$_REQUEST['c'] = "signin";
	//			$full_name = B\NS_CONTROLLERS. ucfirst($_REQUEST['c']). "Controller";
	//			$c_folder = __DIR__ . "/../controllers/";
	//			$path_name = $c_folder . $_REQUEST['c']. "Controller.php";
	//			if (file_exists($path_name)) {
	//				require_once $path_name;
	//				$controller = new $full_name();
	//				$controller->processRequest();
	//			}
	//		}
	//		else{
			?>
			


			<h2>Recent</h2>

			/*Each image item should consist of a correctly oriented image, beneath which is a caption, the user who uploaded the image, a rating from 1-5, and a date when the image was uploaded. Before the first three image items, should be an h2 tag with Recent in it. These three items should be the three most recently added images in order from most recent to least.*/


			<h2>Popular</h2>


			/*Up to ten image items should be displayed beneath this header. These items should be the most popular uploaded items ranked from most to least popular, ties being broken by recentness with more recent on top.*/
			<?php
	//		}
			?>


		</body>
		</html>
		<?php
	}
}