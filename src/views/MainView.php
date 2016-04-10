<?php

namespace Image_Rating\views;

require_once "View.php";

class MainView extends View{

	public function render($data){
		?>
		<!DOCTYPE html><html>
		<head>
			<title>Image Rating</title>
			<link rel="stylesheet" type="text/css" href="../styles/indexStyle.css">
		</head>

		<body>

			<h1>Image Rating</h1>
			
			<button type="signIn">Sign In</button>
			<button type="signUp">Sign Up</button>
			


			<h2>Recent</h2>

			/*Each image item should consist of a correctly oriented image, beneath which is a caption, the user who uploaded the image, a rating from 1-5, and a date when the image was uploaded. Before the first three image items, should be an h2 tag with Recent in it. These three items should be the three most recently added images in order from most recent to least.*/


			<h2>Popular</h2>


			/*Up to ten image items should be displayed beneath this header. These items should be the most popular uploaded items ranked from most to least popular, ties being broken by recentness with more recent on top.*/



		</body>
		</html>
		<?php
	}
}