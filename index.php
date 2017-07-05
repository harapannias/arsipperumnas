<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="assets/img/logo_kota_medan.png">
	<!-- Deklarasi css-->
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/js/jquery-ui-1.11.4/jquery-ui.min.css" rel="stylesheet">

	<title>Sistem Informasi Pengarsipan Perumnas Regional 1 Medan</title>
</head>
<body>
	<div class="header_admin">
        <center><h1>PERUMNAS REGIONAL I MEDAN</h1></center>
	</div>
	<div class="container">
        <div style="text-align: center;">
	<div class="login-container">
		<div class="login-header">Form Login Aplikasi</div>
		<div class="login-data">
			<form action="login/validasi_login.php" method="post">
				<div class="login-caption-header">Silahkan login terlebih dahulu untuk mengakses aplikasi.</div>
				<?php if(isset($_GET['pesan'])){ ?>
					<div class="error"><i>Username atau password salah, silahkan login kembali.</i></div>
					<?php } ?>
					<div class="form-login">
						<label class="form-login-caption">Username</label>
						<input type="text" class="form-login-control" name="username" autocomplete="false">
					</div>
					<div class="form-login">
						<label class="form-login-caption">Password</label>
						<input type="password" class="form-login-control" name="password" autocomplete="false">
					</div>
					<div class="form-login">
						<label class="form-login-caption">&nbsp;</label>
						<div class="form-login-control">
							<a href="index.php" class="btn btn-danger">Batal</a>
							<button type="submit" class="btn btn-success">Login</button>
						</div>
					</div>
				</form>
			</div>
			<div style="text-align: right; padding: 0 10px; font-size: 11px"><i>&nbsp;</i></div>
		</div>
	</div>
	</div>
	<div class="footer">&copy; 2017 - PERUMNAS Regional I Medan</div>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery-ui-1.11.4/jquery-ui.js"></script>
	<script src="assets/js/app.js"></script>
</body>
</html>