<?php

include "koneksi.php";
$sql="select * from mahasiswa order by nama asc";

$data=mysqli_query($db,$sql);
$result = array();

while($row=mysqli_fetch_array($data)){
	
	$result[]= array(
		
		'nim' => $row['nim'],
		'nama' => $row['nama'],
		'alamat' => $row['alamat'],
		'hp' => $row['hp']
	);
}

$json= json_encode($result);
echo"$json";

?>