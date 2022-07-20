<?php 
require 'function.php';
$data= query("SELECT * FROM `data wafid`");
if (isset($_GET["cari"])) {

	$data= search($_GET["keyword"]);
}
elseif (isset($_GET["reset"])) {
	$data=query("SELECT * FROM `data wafid`");

	
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Database wafid</title>
</head>
<body>
<h1>Data</h1>
<a href="input.php">Tambah data</a><br><br>
<form action="" method="get">
			<input type="text" name="keyword" autocomplete="off" autofocus="" id="keyword">
			<button type="submit" name="cari">cari</button> <button type="reset" name="reset">reset</button><br><br>
		
		 
		
		</form>
		<div id="container">

	<table border="1" cellspacing="0" cellpadding="5">
		
		
		

		<tr>
			<th>Nomer</th>
			<th>action</th>
			<th>Nama</th>
			<th>ID</th>
			<th>Kesukaan</th>
			<th>Hobi</th>


		</tr>
		<?php $i=1 ?>

		
		<?php foreach ($data as $mhs) :?>

		<tr>
			<td><?= $i ?></td>
			<td>
				<a href="update.php?id=<?= $mhs["ID"] ?>">Ubah</a>|<a href="delete.php?id=<?=$mhs["ID"] ?>">hapus</a>
			</td>
			<td><?=$mhs["Nama"] ?></td>
			<td><?=$mhs["ID"] ?></td>
			<td><?=$mhs["Kesukaan"] ?></td>
			<td><?=$mhs["Hobi"] ?></td>
			
		</tr>
		<?php $i++ ?>

	<?php endforeach; ?>
	







	

	</table>
	</div>
	<script src="xml.js"></script>

</body>
</html>