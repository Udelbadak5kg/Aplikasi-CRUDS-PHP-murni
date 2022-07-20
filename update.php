<?php
require 'function.php'; 
$id=$_GET["id"];
$data= query("SELECT * FROM `data wafid` WHERE ID=$id")[0];


if (isset($_POST["submit"])) {
	if (update($_POST)>0) {
		echo "<script>
		alert('Changge succes')
		document.location.href='wafid.php'




		</script>";
	}else{
		echo "<script>
		alert('Changge failed')
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
		<input type="hidden" name="id" value="<?= $data["ID"]  ?>">
		<input type="text" name="nama" placeholder="Nama..." required value="<?= $data["Nama"] ?>"><br><br>	
		<input type="text" name="kesukaan" placeholder="kesukaan..."required value="<?= $data["Kesukaan"] ?>"><br><br>	
		<input type="text" name="hobi" placeholder="Hobi..."required value="<?= $data["Hobi"] ?>"><br><br>	
		<button type="submit" name="submit">Submit</button>
		
	
	 
	
	</form>


</body>
</html>