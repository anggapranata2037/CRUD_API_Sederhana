<?php

$url="http://localhost/crud_api/sistem_a/service_tampil.php";

$json=@json_decode(file_get_contents($url));



echo"
<a href='tambah.php'>Tambah</a><br></br>
<table border = '1'>
<tr>
<td>NIM</td>
<td>Nama</td>
<td>Alamat</td>
<td>Hp</td>
<td>Aksi</td>
</tr>";


foreach($json as $key => $jsons){
echo"	
<tr>
<td>".$jsons ->nim."</td>
<td>".$jsons ->nama."</td>
<td>".$jsons ->alamat."</td>
<td>".$jsons ->hp."</td>
<td><a href='edit.php?id=".$jsons->nim."'> Edit</a>/ 
	<a href='aksi_hapus.php?id=".$jsons->nim."'> Hapus</a>/ 
</tr>";	
}


echo"</table>";




?>