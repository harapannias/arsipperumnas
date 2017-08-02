<?php
require_once "helpers.php";

if(isset($_GET['page'])){

	switch ($_GET['page']) {
		
		case 'home':
		include "page/home.php";
		break;
		case 'logout':
		include "login/logout.php";
		break;
		
        //operator
		case 'daftar_operator':
		include("page/operator/daftar_operator.php");
		break;
		case 'tambah_operator':
		include("page/operator/tambah_operator.php");
		break;
		case 'edit_operator':
		include("page/operator/edit_operator.php");
		break;
		case 'simpan_operator':
		include("page/operator/simpan_operator.php");
		break;
            
        //Surat Masuk
        case 'tambah_surat_masuk':
		include("page/surat_masuk/tambah_surat_masuk.php");
		break;
        case 'daftar_surat_masuk':
		include("page/surat_masuk/daftar_surat_masuk.php");
		break;

		//Surat Keluar
        case 'form_suratkeluar':
		include("page/form_suratkeluar.php");
		break;
        case 'daftar_surat_keluar':
		include("page/daftar_surat_keluar.php");
		break;
        case 'surat_keluar':
		include("page/surat_keluar.php");
		break;
        case 'laporan_operator':
		include("page/laporan_operator.php");
		break;
		}

}else{
	include "page/home.php";
}