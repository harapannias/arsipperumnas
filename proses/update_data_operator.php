<?php
  if(isset($_POST['nama_operator'],$_POST['id_kelurahan'],$_POST['username'], $_POST['password'], $_POST['keterangan'])){
  	$nama_operator = $_POST['nama_operator'];
  	$id_kelurahan = $_POST['id_kelurahan'];
  	$username = $_POST['username'];
  	$password = $_POST['password'];
  	$keterangan = $_POST['keterangan'];
  	$id_user = $_POST['id_user'];

  	if (empty($nama_operator) || $nama_operator == null) {
  		header('Location: ../?page=tambah_daftar_operator&error=1');
  	}elseif(empty($id_kelurahan) || $id_kelurahan == null){
  		header('Location: ../?page=tambah_daftar_operator&error=2');
  	}elseif (empty($username) || $username == null) {
  		header('Location: ../?page=tambah_daftar_operator&error=3');
  	}elseif (empty($password) || $password == null) {
  		header('Location: ../?page=tambah_daftar_operator&error=4');
  	}else{
  		include "../config/koneksi.php";
  		session_start();
  		$sql = "update tb_user set id_kelurahan='".$id_kelurahan."', nama='".$nama_operator."', username='".$username."', password='".$password."', keterangan='".$keterangan."', id_ubah='".$_SESSION['username']."', wk_ubah='".Date('Y-m-d m:s')."' where id_user = '".$id_user."'";
  		if (mysqli_query($link, $sql)) {
  			header('Location: ../?page=operator_kelurahan');
  		} else {
  			echo "Gagal mengubah data operator: <br> ". $sql ." <br>". mysqli_error($link);
  		}
  		mysqli_close($link);
  	}
  }