<!DOCTYPE html>
<html>
	<head>
		<title>Upload Image</title>
	</head>
	<body>

	<h1 align="center">Upload Image</h1>

	<form id="upload" action="register.php" method="post" align="center">
		<fieldset>
		
			<input type="hidden" name="submitted" id="submitted" value="1"/>
			<label for="pic" >Picture(.jpeg only)*:</label>
			<input type="file" name="pic" id="pic" accept="image/jpeg"/><br></br>
			<label for="caption" >Caption*:</label>
			<input type="text" name="caption" id="caption" maxlength="140" /><br></br>
			<input type="submit" name="Submit" value="Submit" />
			 
		</fieldset>
	</form>

	</body>
</html>
