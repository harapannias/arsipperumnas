<?php
  if(isset($_POST['nama_operator'],$_POST['id_kelurahan'],$_POST['username'], $_POST['password'], $_POST['keterangan'])){
  	$nama_operator = $_POST['nama_operator'];
  	$id_kelurahan = $_POST['id_kelurahan'];
  	$username = $_POST['username'];
  	$password = $_POST['password'];
  	$keterangan = $_POST['keterangan'];

  	if (empty($nama_operator) || $nama_operator == null) {
  		header('Location: ../?page=tambah_daftar_operator&error=1');
  	}elseif (empty($username) || $username == null) {
  		header('Location: ../?page=tambah_daftar_operator&error=3');
  	}elseif (empty($password) || $password == null) {
  		header('Location: ../?page=tambah_daftar_operator&error=4');
  	}else{
  		include "../config/koneksi.php";
  		session_start();
  		$sql = "insert into tb_user (nama, username, password, level, keterangan, id_rekam, wk_rekam) 
  		values('".$nama_operator."', '".$username."', '".$password."', 2,'".$keterangan."', '".$_SESSION['username']."', '".Date('Y-m-d m:s')."')";
  		if (mysqli_query($link, $sql)) {
  			header('Location: ../?page=operator_kelurahan');
  		} else {
  			echo "Gagal menyimpan data operator: <br>". $sql. mysqli_error($link);
  		}
  		mysqli_close($link);
  	}
  }