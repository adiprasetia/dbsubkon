<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>coba alert</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div>
	<form action="coba.php" method="GET">
		<table>
			<tr>
				<td>Nama</td><td>:</td><td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>&nbsp</td><td>&nbsp</td><td><input type="button" name="kirim" value="KIRIM" onclick="alert('apakah sudah benar?')"></td>
			</tr>
		</table>
	</form>
	</div>
	
<?php 
if(isset($_GET['kirim'])){

header("location:coba2.php");
}


?>
</body>
</html>