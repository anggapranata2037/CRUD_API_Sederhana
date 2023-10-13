<?php

$nim=urlencode($_GET['id']);


$url="http://localhost/crud_api/sistem_a/service_delate.php?nim=".$nim;
$json=@json_decode(file_get_contents($url));

$respon=$json->status;

if($respon=="OK"){
	
    echo "Data Berhasil DiHapus";
	echo"<a href='tampi.php'> Ok </a><br></br>";
	
}else{
	
	echo "Data Gagal DiHapus";
}




?>