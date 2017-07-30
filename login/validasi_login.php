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
	$dataLogin = execSelectQuery($loginQuery);

	//store login information to session
	$_SESSION['login_detail'] = array_shift($dataLogin);
	header('Location: ../index.php');

} else {
	echo 'Maaf, pengguna "'.$username.'" tidak dikenali dalam sistem ini';
}
	var_dump($_SESSION);