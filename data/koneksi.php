<?php //file ini koneksi nya bisa berhasil, mohon jangan dirubah
$host = "localhost";
$user = "u736771851_adi";
$pass = "Adicaem2";
$db = "u736771851_dbpek";

//create connection
$konek = mysqli_connect($host, $user, $pass, $db);

//check connection
/*if (mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}else{
	echo 'Koneksi Berhasil';
}

?>*/