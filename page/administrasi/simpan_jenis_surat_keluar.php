<?php

if(isset($_GET['ref'])) {
	switch (e($_GET['ref'])) {
		case 'tambah':
			# code...
			$sql = "insert into tr_jenis_surat_keluar (jenis, keterangan, status, id_rekam) values('$_POST[jenis_surat]', '$_POST[keterangan]', '$_POST[status]', '".getAuth()['username']."')";
			
			if(execStatementQuery($sql)) {
				//berhasil menyimpan
				redirect('?page=jenis_surat_keluar');
			}
			break;

		case 'edit':
			# code...
			$sql = "update tr_jenis_surat_keluar set ";
			$sql .= (isset($_POST['jenis_surat']) && !empty($_POST['jenis_surat']) ? " jenis = '".e($_POST['jenis_surat'])."'" : "");
			$sql .= (isset($_POST['keterangan']) && !empty($_POST['keterangan'])? ", keterangan = '".e($_POST['keterangan'])."'" : "");
			$sql .= (isset($_POST['status']) ? ", status = '".e($_POST['status'])."'" : "");
			$sql .= ", id_ubah ='".getAuth()['username']."' where id_jenis_surat_keluar = '".$_POST['oldIdJenis']."'";

			if(execStatementQuery($sql)) {
				//berhasil menyimpan
				redirect('?page=jenis_surat_keluar');
			}
			break;
	}
}