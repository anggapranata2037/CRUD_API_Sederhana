<?php

include "koneksi.php";

$nim=$_GET['nim'];
$nama=$_GET['nama'];
$alamat=$_GET['alamat'];
$hp=$_GET['hp'];

$sql="insert into mahasiswa (nim,nama,alamat,hp) value ('$nim','$nama','$alamat','$hp')";
$data=mysqli_query($db,$sql);


if($data){
	
echo json_encode(array('status'=>'OK'));
	
	
}else{
	
	echo json_encode(array('status'=>'Gagal'));
}


?>