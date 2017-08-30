<?php

switch (e($_GET['ref'])) {
	case 'tambah':
		if(isset($_POST['btnSimpan']) && e($_POST['btnSimpan']) === 'simpan_surat_keluar') {
			if(!isset($_FILES['fileToUpload'])) {
				die('Anda harus mengupload dokumen sebagai lampiran.');
			}

			$upload = saveUploadedDocument('surat_keluar', $_FILES);
			$nomor_urut = e($_POST['nomor_urut']);
			$nomor_berkas = e($_POST['nomor_berkas']);
			$penerima = e($_POST['penerima']);
			$tanggal_keluar = tgl((e($_POST['tanggal_keluar'])));
			$nomor_surat_keluar = e($_POST['no_surat_keluar']);
			$jenis_surat = e($_POST['jenis_surat']);
			$perihal= e($_POST['perihal']);
			$path_berkas = e($upload['uploadedPath']);

			$sql = "insert into tp_arsip_surat_keluar (id_jenis_surat_keluar, nomor_urut,  nomor_berkas, nomor_surat_keluar, tanggal_keluar, penerima, perihal, path_berkas) 
			values ('$jenis_surat', '$nomor_urut', '$nomor_berkas', '$nomor_surat_keluar', '$tanggal_keluar', '$penerima', '$perihal', '$path_berkas')";
			if(execStatementQuery($sql)) {
			// dd($tanggal_keluar);
				//berhasil menyimpan dokumen
				redirect('?page=daftar_surat_keluar');
			}
		} else {
			die('Permintaan tidak dikenali, silahkan menambah berkas melalui form yang disediakan.');
		}
	break;

	case 'edit':
	// code here
	if(isset($_POST['btnSimpan']) && e($_POST['btnSimpan']) === 'simpan_surat_keluar') {
		// dd($_POST);
			$path_berkas = '';
			if(!isset($_FILES['fileToUpload'])) {
				$upload = saveUploadedDocument('surat_keluar', $_FILES);
				$path_berkas = e($upload['uploadedPath']);
				deleteUpluoadedDocument();
				// die('Anda harus mengupload dokumen sebagai lampiran.');
			}
			
			$sql = "update tp_arsip_surat_keluar set ";
			$sql .= isset($_POST['jenis_surat']) && !empty($_POST['jenis_surat']) ? "id_jenis_surat_keluar = '".e($_POST['jenis_surat'])."', " : "";
			$sql .= isset($_POST['nomor_urut']) && !empty($_POST['nomor_urut']) ? "nomor_urut = '".e($_POST['nomor_urut'])."', " : "";
			$sql .= isset($_POST['nomor_berkas']) && !empty($_POST['nomor_berkas']) ? "nomor_berkas = '".e($_POST['nomor_berkas'])."', " : "";
			$sql .= isset($_POST['nomor_surat_keluar']) && !empty($_POST['nomor_surat_keluar']) ? "nomor_surat_keluar = '".e($_POST['nomor_surat_keluar'])."', " : "";
			$sql .= isset($_POST['tanggal_keluar']) && !empty($_POST['tanggal_keluar']) ? "tanggal_keluar = '".tgl(e($_POST['tanggal_keluar']))."', " : "";
			$sql .= isset($_POST['penerima']) && !empty($_POST['penerima']) ? "penerima = '".e($_POST['penerima'])."', " : "";
			$sql .= isset($_POST['perihal']) && !empty($_POST['perihal']) ? "perihal = '".e($_POST['perihal'])."', " : "";
			$sql .= isset($_FILES['fileToUpload']) && !empty($_FILES['fileToUpload']) && !empty($path_berkas) ? "path_berkas = '$path_berkas', " : "";
			$sql .= isset($_POST['status']) && !empty($_POST['status']) ? "status = '".e($_POST['status'])."', " : "";
			$sql .= " id_ubah = '".getAuth()['username']."'";
			$sql .= " where id_arsip_surat_keluar = '".e($_POST['oldIdArsip'])."'";
			
			if(execStatementQuery($sql)) {
			// dd($tanggal_keluar);
				//berhasil menyimpan dokumen
				redirect('?page=daftar_surat_keluar');
			}
		}
	break;
}