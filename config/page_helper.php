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
		case 'user_operator':
		include("page/data_operator.php");
		break;
		case 'tambah_operator':
		include("page/operator/tambah_operator.php");
		break;
		case 'edit_operator':
		include("page/operator/edit_operator.php");
		break;
            
        //Surat Masuk
        case 'form_suratmasuk':
		include("page/form_suratmasuk.php");
		break;
        case 'form_suratkeluar':
		include("page/form_suratkeluar.php");
		break;
        case 'daftar_surat_masuk':
		include("page/daftar_surat_masuk.php");
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