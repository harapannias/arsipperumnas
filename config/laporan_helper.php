<?php
if(isset($_GET['jenis'])){

	switch ($_GET['jenis']) {
		case 'data_kelurahan':
		include "laporan/data_kelurahan.php";
		break;
		case 'data_operator':
		include "laporan/data_operator.php";
		break;
		case 'data_keluarga':
		include "laporan/data_keluarga.php";
		break;
		case 'data_penduduk':
		include "laporan/data_penduduk.php";
		break;
		case 'data_penduduk_pindah_masuk':
		include "laporan/data_penduduk_pindah_masuk.php";
		break;
		case 'data_penduduk_pindah_keluar':
		include "laporan/data_penduduk_pindah_keluar.php";
		break;
		case 'data_penduduk_lahir':
		include "laporan/data_penduduk_lahir.php";
		break;
		case 'data_penduduk_meninggal':
		include "laporan/data_penduduk_meninggal.php";
		break;
	}
}else{
	include "page/home.php";
}