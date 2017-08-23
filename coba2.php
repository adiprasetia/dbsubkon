<?php 

if(isset($_GET['nama'])){
	$nama=$_GET['nama'];

	echo "anda berhasil memasukkan nama".$nama;
}
else{
	echo "anda belum masukan nama...!";
	header("location:coba.php");
}
	 
?>