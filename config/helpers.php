<?php 
include "koneksi.php";

function getAgama($id){
	switch ($id) {
		case '1':
		return "Islam";
		break;
		case '2':
		return "Kristen Protestan";
		break;
		case '3':
		return "Katholik";
		break;
		case '4':
		return "Hindu";
		break;
		case '5':
		return "Buddha";
		break;
		case '6':
		return "KongHuChu";
		break;
	}
}

function dd($var) {
	var_dump($var);
	die();
}

function authenticateCheck($fromPage) {
	switch ($fromPage) {
		case 'login':
		if(isset($_SESSION["login_detail"])) {
			header('Location: index.php');
		}
		break;

		case 'index':
		if(!isset($_SESSION["login_detail"])) {
			header('Location: login.php');
		}
		break;
	}
}

function redirect($arg) {
	header('Status: Move Permanently');	
	header('Location: ' . $arg);	
}

function execSelectQuery($sql_query) {
	global $link;
	$hasil = [];
	$result = mysqli_query($link, $sql_query) or die(mysqli_error($link). ' for sql ('.$sql_query.')');
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			array_push($hasil, $row);
		}
	}
	return $hasil;
}

function execGetCount($sql_query) {
	global $link;
	$result = mysqli_query($link, $sql_query) or die(mysqli_error($link). ' for sql ('.$sql_query.')');
	return mysqli_num_rows($result);
}

function getUserInfo($field, $arg){
	$tmpUser = execSelectQuery("select * from tp_user where id_user = $field limit 0,1");
	$user = array_shift($tmpUser);
	if (!isset($user[$arg])) {
		die('Data "'.$arg.'" pada user tidak ditemukan');
	} else {
		return $user[$arg];
	}
}

function execStatementQuery($sql_query) {
	global $link;
	if (mysqli_query($link, $sql_query) or die(mysqli_error($link). ' for sql ('.$sql_query.')')) {
		return true;
	}
}

function e($arg) {
	global $link;
	return mysqli_escape_string($link, $arg);
}

function getLevelOperator($level) {
	switch ($level) {
		case '1':
		return 'Administrator';
		break;
		case '2':
		return 'Operator';
		break;
	}
}

function getStatus($status) {
	switch ($status) {
		case 1:
		return 'Aktif';
		break;
		case 0:
		return 'Tidak Aktif';
		break;
	}
}

function getFullUrl() {
	return (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}

function isUrlMatch($url) {
	$subDirectory = $_SERVER['SCRIPT_NAME'];
	return $_SERVER['REQUEST_URI'] === $subDirectory.$url;
}

function setSelectedItem($arg1, $arg2) {
	return ($arg1 == $arg2) ? 'selected' : '';
}

function getListLevelOperator() {
	return [
	0 => ['id' => 1, 'level' => 'Administrator'], 
	1 => ['id' => 2, 'level' => 'Operator'], 
	];
}

function getUserLevel() {
	if(isset($_SESSION['login_detail']['level'])) {
		return ['id' => $_SESSION['login_detail']['level'], 'uraian' => getLevelOperator($_SESSION['login_detail']['level'])];
	} else {
		die('User belum login');
	}
}

function isAdmin($id_user = null) {
	if($id_user == null) {
		return $_SESSION['login_detail']['level'] == 1;
	} else {
		return getUserInfo($id_user, 'level') == 1;
	}
}

function getAuth() {
	return $_SESSION['login_detail'];
}

function isUserAuthenticated() {
	return getUserInfo($id_user, 'level');
}

function updateUserLastLogin($id_user) {
	return execStatementQuery("update tp_user set login_terakhir = now() where id_user = $id_user");
}

function saveLoginUserInfo($id_user) {
	// record user login time
	updateUserLastLogin($id_user);

	$finalQuery = "select id_user, nama, username, level, login_terakhir, status, wk_rekam, wk_ubah, id_rekam, id_ubah from tp_user where id_user = $id_user";
	$tmpLogin = execSelectQuery($finalQuery);
	$_SESSION['login_detail'] = array_shift($tmpLogin);
	return;
}