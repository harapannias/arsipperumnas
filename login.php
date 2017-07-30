<?php 
	session_start();
	include "config/helpers.php";
	authenticateCheck('login')
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="assets/img/logo.png">
	<link rel="stylesheet" href="assets/css/style_login.css">
	<title>Sistem Informasi Pengarsipan Perumnas Regional 1 Medan</title>
</head>
<body>

	<div class="login-first">
	<?php if(isset($_GET['pesan'])){ ?>
	<div class="error">Username atau password salah<br> silahkan login kembali.</div>
	<?php } ?>
		<div class="login-data">
			<form action="login/validasi_login.php" method="post">
				<div class="login-caption-header"><img src="assets/img/logo.png" class="logologin"></div>
				<div class="login-header">SISTEM INFORMASI PENGARSIPAN PERUMNAS REGIONAL I MEDAN</div>
				<div class="label">
					<label>Username</label>
				</div>
				<div>
					<input type="text" name="username" class="input">
				</div>
				<div class="label">
					<label>Password</label>
				</div>
				<div>
					<input type="password" class="input" name="password" require>
				</div>
				<div>
					<button type="submit" class="btn-login">LOGIN</button>
				</div>
			</form>
		</div>
	</div>
	<div class="footer"><font color="#3366ff">PERUMNAS Regional I Medan</font><p></p>2017</div>
</body>
</html>