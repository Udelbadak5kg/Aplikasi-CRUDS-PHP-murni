<?php
require "function.php";
$keyword= $_GET["keyword"];
$data= query("SELECT * FROM `data wafid` WHERE `Nama`LIKE'%$keyword%' OR `Kesukaan`LIKE'%$keyword%' OR `Hobi`LIKE'%$keyword%'");






?>
<html>
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
</html>
		
		
		

		