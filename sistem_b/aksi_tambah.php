<?php

$nim=urlencode($_POST['nim']);
$nama=urlencode($_POST['nama']);
$alamat=urlencode($_POST['alamat']);
$hp=urlencode($_POST['hp']);

$url="http://localhost/crud_api/sistem_a/service_simpan.php?nim=".$nim."&nama=".$nama."&alamat=".$alamat."&hp=".$hp;
$json=@json_decode(file_get_contents($url));

$respons=$json->status;

if($respons=="OK"){
	
    echo "Data Berhasil Disimpan";
	echo"<a href='tampi.php'> Ok </a><br></br>";
	
}else{
	
	echo "Data Gagal Disimpan";
}




?>