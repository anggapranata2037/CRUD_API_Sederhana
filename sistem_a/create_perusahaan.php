<?php

error_reporting(0);
include_once('db_connection.php');
$insert = " INSERT INTO perusahaan(
			kd_perusahaan,
			nama_perusahaan,
			alamat,
			pemilik)
			
			value 
			('$_GET[kd_perusahaan]'
			  '$_GET[nama_perusahaan]'
			  '$_GET[alamat]'
			  '$_GET[pemilik]')";
			  
			  $exeinsert = mysqli_query($con,$insert);
			  $response=array();
			  
			  if($exeinsert)
			  {
				  $response['code']=1;
				  $response['messege']="Sukses tambah Data !";
			  }else
			  {
				  $response['code']=0;
				  $response['messege']="Gagal  tambah Data !"; 
			  }
				
				echo json_encode($response);
?>