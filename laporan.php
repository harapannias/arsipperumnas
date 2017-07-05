<?php session_start(); ?>
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
	<link href="assets/css/laporan.css" rel="stylesheet">

	<title>Laporan</title>
</head>
<body>
	<?php 
	
	include "config/helpers.php";
	if(isset($_GET['mode'])){
		switch ($_GET['mode']) {
			case '1':
			?>
			<div class="halaman">
				<table class="tblKop" border="0">
					<tr>
						<td align="left" width="100px">
							<img src="assets/img/logo_kota_medan.png" width="100px">
						</td>
						<td>
							<div class="kop_caption">
								<div class="kota">PEMERINTAH KOTA MEDAN</div>
								<div class="kecamatan">KECAMATAN MEDAN PETISAH</div>
								<div>Jl. Iskandar Muda No.270 A, Kota Medan, Sumatera Utara 20181</div>
							</div>
						</td>
					</tr>
				</table>
				<?php include "config/laporan_helper.php" ?>
				<div class="tandatangan">
					<table class="tblTtd">
						<tr>
							<td width="69%"></td>
							<td width="120px">Dibuat di</td>
							<td>:</td>
							<td width="100px">Medan</td>
						</tr>
						<tr>
							<td></td>
							<td class="pembatas">Pada Tanggal</td>
							<td class="pembatas">:</td>
							<td class="pembatas"><?= date('d M Y')?></td>
						</tr>
						<tr>
							<td></td>
							<td colspan="3" style="padding-top: 10px;">Camat Medan Petisah,</td>
						</tr>
						<tr>
							<td></td>
							<td height="85px" colspan="3"></td>
						</tr>
						<tr>
							<td></td>
							<td colspan="3">____________________</td>
						</tr>
					</table>
				</div>
			</div>			
			<?php
			break;
			
			case '2':
			?>
			<div class="halaman_lsp">
				<table class="tblKop" border="0">
					<tr>
						<td align="left" width="100px">
							<img src="assets/img/logo_kota_medan.png" width="100px">
						</td>
						<td>
							<div class="kop_caption">
								<div class="kota">PEMERINTAH KOTA MEDAN</div>
								<div class="kecamatan">KECAMATAN MEDAN PETISAH</div>
								<div>Jl. Iskandar Muda No.270 A, Kota Medan, Sumatera Utara 20181</div>
							</div>
						</td>
					</tr>
				</table>
				<?php include "config/laporan_helper.php" ?>
				<div class="tandatangan_lsp">
					<table class="tblTtd_lsp">
						<tr>
							<td width="78%"></td>
							<td width="120px">Dibuat di</td>
							<td>:</td>
							<td width="100px">Medan</td>
						</tr>
						<tr>
							<td></td>
							<td class="pembatas">Pada Tanggal</td>
							<td class="pembatas">:</td>
							<td class="pembatas"><?= date('d M Y')?></td>
						</tr>
						<tr>
							<td></td>
							<td colspan="3" style="padding-top: 10px;">
								<?php 
								if($_SESSION['level'] == 1){
									echo "Camat Medan Petisah,";
								}else{
									include "config/koneksi.php";
									echo "Lurah ".getNamaKelurahan($link, $_SESSION['id_kelurahan']);
								}
								?>
							</td>
						</tr>
						<tr>
							<td></td>
							<td height="65px" colspan="3"></td>
						</tr>
						<tr>
							<td></td>
							<td colspan="3">____________________</td>
						</tr>
					</table>
				</div>
			</div>			
			<?php
			break;
		}
	}
	?>
	
</body>
</html> 