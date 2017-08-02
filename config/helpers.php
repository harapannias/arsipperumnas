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
