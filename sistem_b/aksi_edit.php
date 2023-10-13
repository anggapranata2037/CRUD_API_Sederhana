<?php

$nim=urlencode($_POST['nim']);
$nama=urlencode($_POST['nama']);
$alamat=urlencode($_POST['alamat']);
$hp=urlencode($_POST['hp']);

$url="http://localhost/crud_api/sistem_a/service_edit.php?nim=".$nim."&nama=".$nama."&alamat=".$alamat."&hp=".$hp;
$json=@json_decode(file_get_contents($url));

$respon=$json->status;

if($respon="OK"){
	
    echo "Data Berhasil DiEdit";
	echo"<a href='tampi.php'> <br>Ok </a><br></br>";
	
}else{
	
	echo "Data Gagal DiEdit";
}




?>
	