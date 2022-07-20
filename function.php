<?php 
$conn= mysqli_connect("localhost","root","","phpdasar");

function query($query){
	global $conn;
	$result= mysqli_query($conn,$query);
	$rows=[];
	while ($row= mysqli_fetch_assoc($result)) {

		$rows[]=$row;
	}
	return $rows;

}

function input($data){
	global $conn;
	$nama=htmlspecialchars($data["nama"]);
	$kesukaan=htmlspecialchars($data["kesukaan"]);
	$hobi=htmlspecialchars($data["hobi"]);

	mysqli_query($conn,"INSERT INTO `data wafid` (`Nama`, `ID`, `Kesukaan`, `Hobi`) VALUES ('$nama', NULL, '$kesukaan', '$hobi')");

	return mysqli_affected_rows($conn);


}

function delete($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM `data wafid` WHERE `data wafid`.`ID` = $id");
	return mysqli_affected_rows($conn);
}

function update($data){
	global $conn;
	$id=$data["id"];
	$nama=htmlspecialchars($data["nama"]);
	$kesukaan=htmlspecialchars($data["kesukaan"]);
	$hobi=htmlspecialchars($data["hobi"]);
	$query= "UPDATE `data wafid` SET `Nama` = '$nama', `Kesukaan` = '$kesukaan', `Hobi` = '$hobi' WHERE `data wafid`.`ID` = $id";

	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}
function search($keyword){
	$query="SELECT * FROM `data wafid` WHERE `Nama`LIKE'%$keyword%' OR `Kesukaan`LIKE'%$keyword%' OR `Hobi`LIKE'%$keyword%'";
	return query($query);
}

function login($data){
	global $conn;
	$username=$data["username"];
	$password=$data["password"];
	$query= "SELECT * FROM `data gaje` WHERE `Nama`=$username , `Password`=$password ";
	$result=mysqli_query($conn,$query);
	//cek baris
	$cek=mysqli_num_rows($result);
	if( $cek ===1 ){
		//password
		$rw=mysqli_fetch_assoc($result);
		if ( password_verify($password, $rw["Password"])) {
			header("location:'Login.php'");
			
		}else{
			echo "<script>
			alert('Login failed')
			document.location.href='Login.php'



			</script>";


		}
	}




	

}

?>