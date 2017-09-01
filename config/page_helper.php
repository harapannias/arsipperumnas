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

	    //profil
	    case 'profil':
			include("page/operator/profil.php");
		break;
		case 'edit_profil':
			include("page/operator/edit_profil.php");
		break;
		case 'simpan_profil':
			include("page/operator/simpan_profil.php");
		break;
		
	    //operator
		case 'daftar_operator':
		if(getAuth()['level'] == 1)
			include("page/operator/daftar_operator.php");
		else 
			echo "Anda tidak punya hak akses pada halaman ini.";
		break;

		case 'tambah_operator':
		if(getAuth()['level'] == 1)
			include("page/operator/tambah_operator.php");
		else 
			echo "Anda tidak punya hak akses pada halaman ini.";
		break;
		
		case 'edit_operator':
		if(getAuth()['level'] == 1)
			include("page/operator/edit_operator.php");
		else 
			echo "Anda tidak punya hak akses pada halaman ini.";
		break;
		
		case 'simpan_operator':
		if(getAuth()['level'] == 1)
			include("page/operator/simpan_operator.php");
		else 
			echo "Anda tidak punya hak akses pada halaman ini.";
		break;
            
        //Surat Masuk
        case 'tambah_surat_masuk':
		include("page/surat_masuk/tambah_surat_masuk.php");
		break;
		case 'edit_surat_masuk':
		include("page/surat_masuk/edit_surat_masuk.php");
		break;
        case 'simpan_surat_masuk':
		include("page/surat_masuk/simpan_surat_masuk.php");
		break;
		case 'daftar_surat_masuk':
		include("page/surat_masuk/daftar_surat_masuk.php");
		break;
		case 'detail_surat_masuk':
		include("page/surat_masuk/detail_surat_masuk.php");
		break;

		//Surat Keluar
        case 'tambah_surat_keluar':
		include("page/surat_keluar/tambah_surat_keluar.php");
		break;
		case 'edit_surat_keluar':
		include("page/surat_keluar/edit_surat_keluar.php");
		break;
        case 'daftar_surat_keluar':
		include("page/surat_keluar/daftar_surat_keluar.php");
		break;
        case 'simpan_surat_keluar':
		include("page/surat_keluar/simpan_surat_keluar.php");
		break;
		case 'detail_surat_keluar':
		include("page/surat_keluar/detail_surat_keluar.php");
		break;

        //laporan
        case 'laporan_operator':
		include("page/laporan_operator.php");
		break;

		//Administrasi
		case 'jenis_surat_masuk':
			include("page/administrasi/daftar_jenis_surat_masuk.php");
		break;
		case 'tambah_jenis_surat_masuk':
			include("page/administrasi/tambah_jenis_surat_masuk.php");
		break;
		case 'edit_jenis_surat_masuk':
			include("page/administrasi/edit_jenis_surat_masuk.php");
		break;
		case 'jenis_surat_keluar':
			include("page/administrasi/daftar_jenis_surat_keluar.php");
		break;
		case 'tambah_jenis_surat_keluar':
			include("page/administrasi/tambah_jenis_surat_keluar.php");
		break;
		case 'edit_jenis_surat_keluar':
			include("page/administrasi/edit_jenis_surat_keluar.php");
		break;
		}


}else{
	include "page/home.php";
}