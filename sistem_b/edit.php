<?php

$id=$_GET['id'];

$url="http://localhost/crud_api/sistem_a/service_tampilid.php?id=".$id;

$json=@json_decode(file_get_contents($url));

?>


<form method="post" action="aksi_edit.php">
Nim
<input type "text" readonly="readonly" name="nim" value=" <?php echo $json->nim ; ?>"><br>
Nama
<input type "text" name="nama" value=" <?php echo $json->nama ; ?>"><br>
Alamat
<input type "text" name="alamat" value=" <?php echo $json->alamat ; ?>"><br>
Hp
<input type "text" name="hp" value=" <?php echo $json->hp ; ?>"><br>

<td><input type="submit" name="simpan" value="EDIT"></td> 

<form>


