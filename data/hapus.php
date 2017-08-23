<?php
include 'koneksi.php';
$nomor = $_GET['nomor'];
mysqli_query($konek, "DELETE FROM tbl_subkon WHERE nomor='$nomor'");

header("location:tampildata.php?pesan=hapus");


?>