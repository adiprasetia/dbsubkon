<?php 
include 'data/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$cekdidb = mysqli_query ($konek,"SELECT * FROM profil WHERE username = '$username' AND password = '$password'" );

$cekbaris = mysqli_num_rows($cekdidb);

$tampil = mysqli_fetch_assoc($cekdidb);

// print_r($tampil);

// echo $cekbaris;

if ($cekbaris > 0)
{

	session_start();
	$_SESSION['id'] = $tampil['id'];
	$_SESSION['nama'] = $tampil['nama'];
	header('location:data/tampildata.php');
}
else
{
	echo "Username/Password salah!";
}


?>