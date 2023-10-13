<?php

include "koneksi.php";

$nim=$_GET['nim'];
$nama=$_GET['nama'];
$alamat=$_GET['alamat'];
$hp=$_GET['hp'];

$sql="update mahasiswa set nim='$nim',nama='$nama',alamat='$alamat',hp='$hp' where nim='$nim'";
$data=mysqli_query($db,$sql);


if($data){
	
echo json_encode(array('status'=>'OK'));
	
	
}else{
	
	echo json_encode(array('status'=>'Gagal'));
}


?>