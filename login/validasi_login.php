<?php

$username = null;
$password = null;

if(isset($_POST['username'], $_POST['password'])){
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);
}

include "../config/koneksi.php";

	$query = "select * from tb_user where username = '".$username."' and password = '".$password."'";
	if ($result = mysqli_query($link, $query)) {
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		if(!empty($row)){
			session_start();
			$_SESSION['level'] = $row['level'];
            $_SESSION['nama'] = $row['nama'];
			header('Location: ../index_admin.php');

		}else{
			header('Location: ../index.php?page=login&pesan=salah');
		}
	}else{
		echo mysqli_error($link);
	}

function is_penduduk($link, $username){
	$query = "select * from tb_keluarga where nomor_kk = '".$username."'";
	if ($result = mysqli_query($link, $query)) {
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		if(!empty($row)){
			return true;
		}else{
			return false;
		}
	}else{
		echo mysqli_error($link);
	}
}