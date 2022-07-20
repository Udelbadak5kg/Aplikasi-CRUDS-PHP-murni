<?php 
require 'function.php';

if (isset($_POST["submit"])) {
	login($_POST);
		
	
	

}



?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>
	<form action="" method="post">
		<label for="username">Username</label><br>
		<input type="text" name="username" id="username"><br>
		<label for="password">Password</label><br>
		<input type="password" name="password" id="password"><br>
		<button type="submit" name="submit">Login</button>
	
	 
	
	</form>

</body>
</html>