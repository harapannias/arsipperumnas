<?php



switch (e($_GET['ref'])) {
	case 'tambah':
	//dd($_POST);
		if(isset($_POST['btnSimpan']) && e($_POST['btnSimpan']) === 'simpan_surat_masuk') {			
			$last_id = '';

			if(!isset($_FILES['fileToUpload'])) {
				die('Anda harus mengupload dokumen sebagai lampiran.');
			}

			if(isset($_POST['NewJenisSurat']) && !empty($_POST['NewJenisSurat']) && empty($_POST['jenis_surat_masuk'])) {
				//sipman jenis surat baru
				$sql = "insert into tr_jenis_surat_masuk (jenis, id_rekam) values('$_POST[NewJenisSurat]', '".getAuth()['id_user']."')";
				if(execStatementQuery($sql)) {
					//berhasil menyimpan
					$last_id = getLastInsertedID();		
				}
			}

			$upload = saveUploadedDocument('surat_masuk', $_FILES);
			$nomor_urut = e($_POST['nomor_urut']);
			$nomor_berkas = e($_POST['nomor_berkas']);
			$pengirim = e($_POST['pengirim']);
			$tanggal_masuk = tgl((e($_POST['tanggal_masuk'])));
			$nomor_surat_masuk = e($_POST['no_suratmasuk']);
			$jenis_surat_masuk = e($_POST['jenis_surat_masuk']);
			$perihal= e($_POST['perihal']);
			$disposisi = e($_POST['disposisi']);
			$path_berkas = e($upload['uploadedPath']);

			$sql = "insert into tp_arsip_surat_masuk (id_jenis_surat_masuk, nomor_urut,  nomor_berkas, nomor_surat_masuk, tanggal_masuk, pengirim, perihal, disposisi, path_berkas, id_rekam) 
			values ('$last_id', '$nomor_urut', '$nomor_berkas', '$nomor_surat_masuk', '$tanggal_masuk', '$pengirim', '$perihal', $disposisi, '$path_berkas', '".getAuth()['username']."')";
			if(execStatementQuery($sql)) {
			// dd($tanggal_masuk);
				//berhasil menyimpan dokumen
				redirect('?page=daftar_surat_masuk');
			}
		}
	break;

	case 'edit':
	// code here
	if(isset($_POST['btnSimpan']) && e($_POST['btnSimpan']) === 'simpan_surat_masuk') {
		// dd($_POST);
			$path_berkas = '';
			if(!isset($_FILES['fileToUpload'])) {
				$upload = saveUploadedDocument('surat_masuk', $_FILES);
				$path_berkas = e($upload['uploadedPath']);
				deleteUpluoadedDocument();
				// die('Anda harus mengupload dokumen sebagai lampiran.');
			}
			
			$sql = "update tp_arsip_surat_masuk set ";
			$sql .= isset($_POST['jenis_surat']) && !empty($_POST['jenis_surat']) ? "id_jenis_surat_masuk = '".e($_POST['jenis_surat'])."', " : "";
			$sql .= isset($_POST['nomor_urut']) && !empty($_POST['nomor_urut']) ? "nomor_urut = '".e($_POST['nomor_urut'])."', " : "";
			$sql .= isset($_POST['nomor_berkas']) && !empty($_POST['nomor_berkas']) ? "nomor_berkas = '".e($_POST['nomor_berkas'])."', " : "";
			$sql .= isset($_POST['no_suratmasuk']) && !empty($_POST['no_suratmasuk']) ? "nomor_surat_masuk = '".e($_POST['no_suratmasuk'])."', " : "";
			$sql .= isset($_POST['tanggal_masuk']) && !empty($_POST['tanggal_masuk']) ? "tanggal_masuk = '".tgl(e($_POST['tanggal_masuk']))."', " : "";
			$sql .= isset($_POST['pengirim']) && !empty($_POST['pengirim']) ? "pengirim = '".e($_POST['pengirim'])."', " : "";
			$sql .= isset($_POST['perihal']) && !empty($_POST['perihal']) ? "perihal = '".e($_POST['perihal'])."', " : "";
			$sql .= isset($_POST['disposisi']) && !empty($_POST['disposisi']) ? "disposisi = '".e($_POST['disposisi'])."', " : "";
			$sql .= isset($_FILES['fileToUpload']) && !empty($_FILES['fileToUpload']) && !empty($path_berkas) ? "path_berkas = '$path_berkas', " : "";
			$sql .= isset($_POST['status']) && !empty($_POST['status']) ? "status = '".e($_POST['status'])."', " : "";
			$sql .= " id_ubah = '".getAuth()['username']."'";
			$sql .= " where id_arsip_surat_masuk = '".e($_POST['oldIdArsip'])."'";
			
			if(execStatementQuery($sql)) {
			// dd($tanggal_masuk);
				//berhasil menyimpan dokumen
				redirect('?page=daftar_surat_masuk');
			}
		}
	break;
}