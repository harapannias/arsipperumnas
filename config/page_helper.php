<?php
require_once "helpers.php";

if(isset($_GET['page'])){

	switch ($_GET['page']) {
		
		case 'logout':
		include "login/logout.php";
		break;
		
        //operator
		case 'user_operator':
		include("page/data_operator.php");
		break;
		case 'tambah_data_operator':
		include("page/form_data_operator.php");
		break;
		case 'edit_data_operator':
		include("page/form_data_operator.php");
		break;
		case 'hapus_data_operator':
		include("proses/hapus_data_operator.php");
		break;
            
        //Surat Masuk
        case 'surat_masuk':
		include("page/surat_masuk.php");
		break;
        case 'surat_keluar':
		include("page/surat_keluar.php");
		break;
        case 'laporan':
		include("page/laporan.php");
		break;
		}

}else{
	include "page/home.php";
}