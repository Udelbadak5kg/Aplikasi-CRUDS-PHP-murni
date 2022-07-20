<?php
require 'function.php'; 



if (isset($_POST["submit"])) {
	if (input($_POST)>0) {
		echo "<script>
		alert('Input succes')
		document.location.href='wafid.php'




		</script>";
	}else{
		echo "<script>
		alert('Input failed')
		document.location.href='wafid.php'




		</script>";
	}
	

	

	


 	
 } 

?>	

<!DOCTYPE html>
<html>
<head>
	<title>Tambah data</title>
</head>
<body>
	<h1>Tambah</h1>
	<form action="" method="post">
		<input type="text" name="nama" placeholder="Nama..." required="" autocomplete="off"><br><br>	
		<input type="text" name="kesukaan" placeholder="kesukaan..."required="" autocomplete="off"><br><br>	
		<input type="text" name="hobi" placeholder="Hobi..."required="" autocomplete="off"><br><br>	
		<button type="submit" name="submit">Submit</button>
		
	
	 
	
	</form>


</body>
</html>