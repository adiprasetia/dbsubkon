<?php
include 'koneksi.php';

$nomor = $_POST['nomor'];
$nama = $_POST['nama'];
$ID = $_POST['ID'];
$bidang = $_POST['bidangpek'];
$asal = $_POST['asal'];
$jumlah = $_POST['jumlah'];

mysqli_query($konek, "UPDATE tbl_subkon SET nama='$nama', ID='$ID', bidangpek='$bidang', asal='$asal', jumlah='$jumlah' WHERE nomor='$nomor'");

header("location:tampildata.php?pesan=update");


?>