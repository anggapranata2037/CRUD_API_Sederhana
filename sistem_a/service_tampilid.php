<?php

include "koneksi.php";
$sql="select * from mahasiswa where nim ='$_GET[id]'";

$data=mysqli_query($db,$sql);

$row=mysqli_fetch_array($data);
	
	$result=array(
		
		'nim' => $row['nim'],
		'nama' => $row['nama'],
		'alamat' => $row['alamat'],
		'hp' => $row['hp']
	);


$json= json_encode($result);
echo"$json";

?>