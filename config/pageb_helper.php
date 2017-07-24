<?php
require_once "helpers.php";

if(isset($_GET['pageb'])){

	switch ($_GET['pageb']) {
		
		case 'home':
		include "pageb/home.php";
		break;
		case 'logout':
		include "login/logout.php";
		break;
		
        //operator
		case 'user_operator':
		include("pageb/data_operator.php");
		break;
		case 'tambah_operator':
		include("pageb/tambah_operator.php");
		break;
            
        //Surat Masuk
        case 'form_suratmasuk':
		include("pageb/form_suratmasuk.php");
		break;
        case 'form_suratkeluar':
		include("pageb/form_suratkeluar.php");
		break;
        case 'daftar_surat_masuk':
		include("pageb/daftar_surat_masuk.php");
		break;
        case 'daftar_surat_keluar':
		include("pageb/daftar_surat_keluar.php");
		break;
        case 'surat_keluar':
		include("pageb/surat_keluar.php");
		break;
        case 'laporan_operator':
		include("pageb/laporan_operator.php");
		break;
		}

}else{
	include "pageb/home.php";
}