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
			header('Location: index.php?page=home');
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

function getUserInfo($id_user, $nama_field){
	$tmpUser = execSelectQuery("select * from tp_user where id_user = $id_user limit 0,1");
	$user = array_shift($tmpUser);
	if (!array_key_exists($nama_field, $user)) {
		die('Data "'.$nama_field.'" pada user tidak ditemukan');
	} else {
		return $user[$nama_field] === null ? '' : $user[$nama_field];
	}
}

function execStatementQuery($sql_query) {
	global $link;
	if (mysqli_query($link, $sql_query) or die(mysqli_error($link). ' for sql ('.$sql_query.')')) {
		return true;
	}
}

function getLastInsertedID() {
	global $link;
	return mysqli_insert_id($link);
}

function e($arg) {
	global $link;
	return mysqli_escape_string($link, htmlspecialchars($arg));
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
	return $_SERVER['REQUEST_URI'] === $subDirectory.$url || preg_match("/^.+".$url."+/", $_SERVER['REQUEST_URI']);
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

function saveLoginUserInfo($id_user, $isReload = false) {
	// record user login time
	updateUserLastLogin($id_user);

	$finalQuery = "select id_user, nama, username, bidang_pekerjaan, tanggal_lahir, jenis_kelamin, alamat, email, nomor_hp, level, avatar, login_terakhir, status, id_rekam, wk_rekam, id_ubah, wk_ubah from tp_user where id_user = $id_user";
	$tmpLogin = execSelectQuery($finalQuery);
	$_SESSION['login_detail'] = array_shift($tmpLogin);
	return;
}

function saveUploadedDocument($jenis, $file, $newFileName = null) {
	switch ($jenis) {
		case 'surat_masuk':
		$target_dir = 'uploads/surat_masuk/';
		break;
		case 'surat_keluar':
		$target_dir = 'uploads/surat_keluar/';
		break;
		case 'avatar':
		$target_dir = 'uploads/avatar/';
		break;
	}

	if($newFileName === null) {
		$fileName = basename($_FILES["fileToUpload"]["name"]);
	} else {
		$fileName = $newFileName.'.'.explode('.', $file['fileToUpload']['name'])[1];
	}
	$target_file = $target_dir . $fileName;
	$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
	$fileSize = $file['fileToUpload']['size'];
	$fileContent = $file['fileToUpload']['tmp_name'];
	if (move_uploaded_file($fileContent, $target_file)) {
		return [
		'fileName' => $fileName, 
		'uploadedPath' => $target_file, 
		];
	} else {
		die("Maaf, terjadi kesalahan saat mengupload file");
	}
}

function deleteUpluoadedDocument($filepath) {
	unlink($filepath);
	return;
}

function tgl($date){
	$tmpDate = explode('/', $date);
	return $tmpDate[2].'-'.$tmpDate[1].'-'.$tmpDate[0];
}

function getDisposisi($id) {
	switch ($id) {
		case '1':
		return 'Ya';
		break;
		case '0':
		return 'Tidak';
		break;
	}
}

function getJenisSurat($id) {
	$tmpData = execSelectQuery("select * from tr_jenis_surat where id_jenis_surat = $id limit 0,1");
	$data = array_shift($tmpData);
	return $data['jenis'];
}

function cariSuratMasuk($jenisPencarian, $kataKunci) {	
	$data = execSelectQuery("select * from tp_arsip_surat_masuk where $jenisPencarian like '%$kataKunci%'");
	return $data;
}

function cariSuratKeluar($jenisPencarian, $kataKunci) {	
	$data = execSelectQuery("select * from tp_arsip_surat_keluar where $jenisPencarian like '%$kataKunci%'");
	return $data;
}

function getPost($arg) {
	return isset($_POST[$arg]) ? e($_POST[$arg]) : '';
}

function kunci($arg) {
	$rand = rand(111,999);
	$rand2 = rand(111,999);
	$bs1 = bin2hex($rand.$arg.$rand2);
	$bs0 = convert_uuencode(bin2hex($bs1));
	return base64_encode($bs0);
}

function buka($arg) {
	$data0 = base64_decode($arg);
	$data = convert_uudecode($data0);
	$de0 = hex2bin($data);
	$de1 = hex2bin($de0);
	$de2 = substr($de1, 3);
	return substr($de2, 0, -3);
}

function getJenisKelamin($kd) {
	switch ($kd) {
		case 'L':
		return 'Laki-laki';
		break;
		case 'P':
		return 'Perempuan';
		break;		
		default:
		return '';
		break;
	}
}

function getUserAvatar() {
		return getAuth()['avatar'] === null ? 'uploads/avatar/default.png' : getAuth()['avatar']; 
}

function getAvatar($avatar) {
		return !file_exists($avatar) ? 'uploads/avatar/default.png' : $avatar; 
}

function cegahPengunjung()
{
	echo "<center>Anda tidak diperbolehkan mengakses halaman ini.</center>";
}