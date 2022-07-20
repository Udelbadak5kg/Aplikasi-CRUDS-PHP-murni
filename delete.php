<?php 
require 'function.php';

$id=$_GET["id"];

if(delete($id)>0){
	echo "<script>
		alert('delete succes')
		document.location.href='wafid.php'
            </script>";

}else{
	echo "<script>
		alert('delete succes')
		document.location.href='wafid.php'




		</script>";
}




?>
