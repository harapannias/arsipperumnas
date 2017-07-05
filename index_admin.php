<?php 
session_start();
include "config/helpers.php";
if(empty(isset($_SESSION['level']))){
    cegahPengunjung();
}else {
?>
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
	<div class="menu-atas">
		<ul class="top-menu">
			<li><a href="index_admin.php">Home</a></li>
			<?php 
			if ($_SESSION['level'] == 1) {
				?>
				<li><a href="?page=user_operator">Operator</a></li>
            <?php } ?>
                <li><a href="?page=surat_masuk">Surat Masuk</a></li>
                <li><a href="?page=surat_keluar">Surat Keluar</a></li>
                <li><a href="?page=laporan">Laporan</a></li>
            <li><a href="?page=logout" onclick="return confirm('Anda yakin ingin logout?')">Logout</a></li>
		</ul>
	</div>
	<div class="container">
		<?php include "config/page_helper.php" ?>
	</div>
	<div class="footer">&copy; 2017 - PERUMNAS Regional I Medan</div>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery-ui-1.11.4/jquery-ui.js"></script>
	<script src="assets/js/app.js"></script>
</body>
</html>
<?php }?>