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


$query = "select * from tp_user where username = '$username' and status = 1";

$loginPass = md5($password);
$loginQuery = "select * from tp_user where username = '$username' and password = '$loginPass'";

if(execGetCount($query) > 0) {
	$dataLogin = execSelectQuery($loginQuery);

	//store login information to session
	$_SESSION['login_detail'] = array_shift($dataLogin);
	header('Location: ../index.php');

} else {
	echo '<h3 align="center">Maaf, pengguna "'.$username.'" tidak dikenali atau sudah dinonaktifkan dalam sistem ini.</h3><h3 align="center"><a href="../index.php">Kembali</a></h3>';
}