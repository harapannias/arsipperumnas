<?php



switch (e($_GET['ref'])) {
	case 'tambah':
		if(isset($_POST['btnSimpan']) && e($_POST['btnSimpan']) === 'simpan_surat_masuk') {
			if(!isset($_FILES['fileToUpload'])) {
				die('Anda harus mengupload dokumen sebagai lampiran.');
			}

			$upload = saveUploadedDocument('surat_masuk', $_FILES);
			$nomor_urut = e($_POST['nomor_urut']);
			$nomor_berkas = e($_POST['nomor_berkas']);
			$pengirim = e($_POST['pengirim']);
			$tanggal_masuk = tgl((e($_POST['tanggal_masuk'])));
			$nomor_surat_masuk = e($_POST['no_suratmasuk']);
			$jenis_surat = e($_POST['jenis_surat']);
			$perihal= e($_POST['perihal']);
			$disposisi = e($_POST['disposisi']);
			$path_berkas = e($upload['uploadedPath']);

			$sql = "insert into tp_arsip_surat_masuk (id_jenis_surat, nomor_urut,  nomor_berkas, nomor_surat_masuk, tanggal_masuk, pengirim, perihal, disposisi, path_berkas, id_rekam) 
			values ('$jenis_surat', '$nomor_urut', '$nomor_berkas', '$nomor_surat_masuk', '$tanggal_masuk', '$pengirim', '$perihal', $disposisi, '$path_berkas', '".getAuth()['username']."')";
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
			if(!isset($_FILES['fileToUpload'])) {
				$upload = saveUploadedDocument('surat_masuk', $_FILES);
				// die('Anda harus mengupload dokumen sebagai lampiran.');
			}
			
			$id_jenis_surat 	= ($_POST['jenis_surat'] != null && !empty($_POST['jenis_surat'])) ? e($_POST['jenis_surat']) : '';
			$nomor_urut 		= ($_POST['nomor_urut'] != null && !empty($_POST['nomor_urut'])) ? e($_POST['nomor_urut']) : '';
			$nomor_berkas
			$nomor_surat_masuk
			$tanggal_masuk
			$pengirim
			$perihal
			$disposisi
			$path_berkas
			$status
			$id_ubah
			$wk_ubah

			

			e($_POST['nomor_urut']) != "" ? "nomor_urut = '".e($_POST['nomor_urut'])."'" : '';
			$nomor_berkas = e($_POST['nomor_berkas']);
			$pengirim = e($_POST['pengirim']);
			$tanggal_masuk = tgl((e($_POST['tanggal_masuk'])));
			$nomor_surat_masuk = e($_POST['no_suratmasuk']);
			$jenis_surat = e($_POST['jenis_surat']);
			$perihal= e($_POST['perihal']);
			$disposisi = e($_POST['disposisi']);
			$path_berkas = e($upload['uploadedPath']);

			// $sql = "insert into tp_arsip_surat_masuk (id_jenis_surat, nomor_urut,  nomor_berkas, nomor_surat_masuk, tanggal_masuk, pengirim, perihal, disposisi, path_berkas, id_rekam) 
			// values ('$jenis_surat', '$nomor_urut', '$nomor_berkas', '$nomor_surat_masuk', '$tanggal_masuk', '$pengirim', '$perihal', $disposisi, '$path_berkas', '".getAuth()['username']."')";
			if(execStatementQuery($sql)) {
			// dd($tanggal_masuk);
				//berhasil menyimpan dokumen
				redirect('?page=daftar_surat_masuk');
			}
		}
	break;
}