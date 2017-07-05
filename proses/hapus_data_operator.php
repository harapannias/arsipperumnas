<?php
if(!isset($_SESSION['username']) || empty($_SESSION['username']) || $_SESSION['username'] == ""){
	echo "Anda tidak boleh mengakses halaman ini";
}
if(isset($_GET['id'])){
	$id_user = htmlspecialchars($_GET['id']);
	include "config/koneksi.php";
	$sql = "DELETE FROM tb_user WHERE id_user='" . $id_user . "'";
	if (mysqli_query($link, $sql)) {
		//header("Location: ?page=operator_kelurahan");
		echo "<script>window.location.replace('?page=operator_kelurahan');</script>";
	} else {
		echo "Gagal menghapus data operator: " . mysqli_error($link);
	}
	mysqli_close($link);
}