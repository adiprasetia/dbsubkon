<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Silahkan Login</title>
	<link rel="stylesheet" href="">
	
	<h2>FORM LOGIN</h2>
	<h4>Masukkan Username dan Password anda</h4>
</head>
<body>
	<form action="cek.php" method="post" >
	<table>
		<tr>
			<td>Username</td><td>:</td><td><input type="text" name="username" placeholder="Masukkan Username"></td>
		</tr>
		<tr>
			<td>Password</td><td>:</td><td><input type="text" name="password" placeholder="Masukkan Password"></td>
		</tr>
		<tr>
			<td>&nbsp</td><td>&nbsp</td><td><input type="submit" name="slogin" value="Login">&nbsp <input type="reset" name="" value="Hapus"></td>
		</tr>

	</table>


	</form>


</body>
</html>