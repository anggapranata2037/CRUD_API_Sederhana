<?php

include "koneksi.php";

$nim=$_GET['nim'];


$sql="delete from mahasiswa  where nim='$nim'";
$data=mysqli_query($db,$sql);


if($data){
	
echo json_encode(array('status'=>'OK'));
	
	
}else{
	
	echo json_encode(array('status'=>'Gagal'));
}


?>