<?php

switch (e($_GET['ref'])) {
	case 'tambah':
		# simpan user baru
		$nama_operator = e($_POST['nama_operator']);
		$level_operator = e($_POST['level_operator']);
		$username = e($_POST['username']);
		$password = md5(e($_POST['password']));
		$id_rekam = e($_SESSION['login_detail']['username']);

		$sql = "insert into tp_user (nama, username, password, level, status, id_rekam)
		values ('$nama_operator', '$username', '$password', $level_operator, 1, '$id_rekam')";
		execStatementQuery($sql);
		redirect('?page=daftar_operator');
	break;

	case 'edit':
		# update data user
		$nama_operator = e($_POST['nama_lengkap']);
		$level_operator = e($_POST['level_operator']);
		$username = e($_POST['username']);
		isset($_POST['password']) ? $password = md5(e($_POST['password'])) : '';
		$status = e($_POST['status']);
		$id_ubah = e($_SESSION['login_detail']['username']);
		$id_user = e($_POST['id_ref']);

		$sql = "update tp_user set 
		nama = '$nama_operator', 
		username = '$username', 
		". (isset($_POST['password']) ? "password = '$password',": "")." 
		level = $level_operator, 
		status = $status, 
		id_ubah = '$id_ubah' where id_user = '$id_user'";
		execStatementQuery($sql);
		redirect('?page=daftar_operator');

	break;
}
