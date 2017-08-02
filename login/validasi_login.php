<?php 
session_start();
include "../config/koneksi.php";
include "../config/helpers.php";

$username = null;
$password = null;

if(isset($_POST['username'], $_POST['password'])){
	$username = e($_POST['username']);
	$password = e($_POST['password']);
}


$query = "select * from tp_user where username = '$username'";
$loginPass = md5($password);

$loginQuery = "select * from tp_user where username = '$username' and password = '$loginPass'";

if(execGetCount($query) > 0) {
	$_tmpData = execSelectQuery($query);
	$tmpData = array_shift($_tmpData);

	if($tmpData['password'] !== $loginPass) {
		die('Username atau password salah');
	} else {
		$tmpLogin = execSelectQuery($loginQuery);
		$dataLogin = array_shift($tmpLogin);
		
		if(getUserInfo($dataLogin['id_user'], 'status') != 1) {
			die('Maaf, user sudah dinonaktifkan dari sistem.');
		}	

		saveLoginUserInfo($dataLogin['id_user']);
	}

	# store login information to session
	header('Location: ../index.php');

} else {
	die('Username tidak dikenali');
}