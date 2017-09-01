<?php

switch (e($_GET['ref'])) {
	case 'edit':

	$sql = "update tp_user set ";
	$sql .= (isset($_POST['nama']) && !empty($_POST['nama'])) ? "nama = '".e($_POST['nama'])."'" : "" ;
	$sql .= (isset($_POST['tanggal_lahir']) && !empty($_POST['tanggal_lahir'])) ? ", tanggal_lahir = '".date('Y-m-d', strtotime(e($_POST['tanggal_lahir'])))."'" : "" ;
	$sql .= (isset($_POST['jenis_kelamin']) && !empty($_POST['jenis_kelamin'])) ? ", jenis_kelamin = '".e($_POST['jenis_kelamin'])."'" : "" ;
	$sql .= (isset($_POST['bidang_pekerjaan']) && !empty($_POST['bidang_pekerjaan'])) ? ", bidang_pekerjaan = '".e($_POST['bidang_pekerjaan'])."'" : "" ;
	$sql .= (isset($_POST['alamat']) && !empty($_POST['alamat'])) ? ", alamat = '".e($_POST['alamat'])."'" : "" ;
	$sql .= (isset($_POST['email']) && !empty($_POST['email'])) ? ", email = '".e($_POST['email'])."'" : "" ;
	$sql .= (isset($_POST['nomor_hp']) && !empty($_POST['nomor_hp'])) ? ", nomor_hp = '".e($_POST['nomor_hp'])."'" : "" ;
	$sql .= " where id_user = '".e($_POST['idUserOld'])."'" ;
	if(execStatementQuery($sql)) {
		if(getAuth()['id_user'] == $_POST['idUserOld']){
			saveLoginUserInfo(getAuth()['id_user'], true);
		}
		redirect('?page=profil&token='.kunci(e($_POST['idUserOld'])));
	}
	break;

	case 'update_profil':
	$upload = saveUploadedDocument('avatar', $_FILES, getAuth()['username']);
	$sql = "update tp_user set avatar = '".$upload['uploadedPath']."' where id_user = '".e($_POST['idUserOld'])."'";
	if(execStatementQuery($sql)) {
		if(getAuth()['id_user'] == $_POST['idUserOld']){
			saveLoginUserInfo(getAuth()['id_user'], true);
		}
		redirect('?page=profil&token='.kunci(e($_POST['idUserOld'])));
	}
	break;
}