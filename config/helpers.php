<?php
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

function getNamaKelurahan($link, $id_kelurahan)
{
	$query = "select nama from tb_kelurahan where id_kelurahan = '".$id_kelurahan."'";
	if ($result = mysqli_query($link, $query)) {
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		if(!empty($row)){
			return $row['nama'];
		}else{
			return "Data tidak ditemukan";
		}
	}else{
		return  mysqli_error($link);
	}
}

function getNamaKK($link, $id_keluarga)
{
	$query = "select nama as kepala_keluarga from tb_penduduk where hubungan_keluarga = 'kepala keluarga' and id_keluarga = '".$id_keluarga."'";
	if ($result = mysqli_query($link, $query)) {
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		if(!empty($row)){
			return $row['kepala_keluarga'];
		}else{
			return "Data tidak ditemukan";
		}
	}else{
		return  mysqli_error($link);
	}
}

function getNamaOperator($link, $id_kelurahan)
{
	$query = "select nama from tb_user where id_kelurahan = '".$id_kelurahan."'";
	if ($result = mysqli_query($link, $query)) {
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		if(!empty($row)){
			return $row['nama'];
		}else{
			return "Data tidak ditemukan";
		}
	}else{
		return  mysqli_error($link);
	}
}

function getNamaLogin($link, $id_login, $isKeluarga)
{
	if($isKeluarga){
		$query = "select kg.nomor_kk, kl.nama as kelurahan
		from tb_keluarga kg
		inner join tb_kelurahan kl on kg.id_kelurahan = kl.id_kelurahan
		where kg.id_keluarga = '".$id_login."'";
		if ($result = mysqli_query($link, $query)) {
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			if(!empty($row)){
				return "<div class='login_as'>Data Login : Nomor KK ".$row['nomor_kk']." <br>Kelurahan : ".$row['kelurahan']."</div>";
			}
		}else{
			return  mysqli_error($link);
		}
	}else{
		$query = "select u.id_kelurahan, u.nama, kl.nama as kelurahan
		from tb_user u
		left join tb_kelurahan kl on kl.id_kelurahan = u.id_kelurahan
		where u.id_user = '".$id_login."'";
		if ($result = mysqli_query($link, $query)) {
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			if(!empty($row)){
				return $row['id_kelurahan'] != 0 ? "<div class='login_as'>Data Login : Operator ".$row['nama']." <br>Kelurahan : ".$row['kelurahan']."</div>" : "<div class='login_as'>Login sebagai : Administrator Kecamatan </div>";
			}
		}else{
			return  mysqli_error($link);
		}
	}
}

function cegahPengunjung()
{
	echo '<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="">

		<!-- Deklarasi css-->
		<link href="" rel="stylesheet">

		<title>Situs Pendataan Penduduk Kecamatan Medan Petisah</title>
	</head>
	<body>
		Anda tidak boleh mengakses halaman ini.
		<script src=""></script>
	</body>
	</html> ';
}

function setSelectedItem($value, $param){
	return ($value == $param ? "selected" : "");
}

function linkLampiran($path)
{
	if($path != null){
		$data = explode("/", $path);
		return "<a target='_blank' href='".$data[1]."/".$data[2]."/".$data[3]."'>Ada</a>";
	}else{
		return "Kosong";
	}
}

function isLogged(){
	if(isset($_SESSION['id_user']) || isset($_SESSION['id_keluarga'])){
		return true;
	}else{
		return false;
	}
}

function pageLoginCheck($page){
	if(isset($_SESSION['id_user']) || isset($_SESSION['id_keluarga'])){
		include $page;
	}else{
		//include "login/login.php";
		echo "<script>window.location.replace('?page=login');</script>";
	}
}