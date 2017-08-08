<?php
// dd($_POST);
/*
'nomor_urut' => string 'Nomor Urut' (length=10)
  'nomor_berkas' => string 'Nomor Berkas' (length=12)
  'penerima' => string 'Penerima' (length=8)
  'tanggal_keluar' => string '06/08/2017' (length=10)
  'no_surat_masuk' => string 'Nomor Surat Masuk' (length=17)
  'jenis_surat' => string '5' (length=1)
  'perihal' => string 'Mohon Perbaikan Komputer di Bagian SDM' (length=38)


  array (size=1)
  'fileToUpload' => 
    array (size=5)
      'name' => string 'Unified Modeling Language.pdf' (length=29)
      'type' => string 'application/pdf' (length=15)
      'tmp_name' => string 'C:\wamp64\tmp\php2233.tmp' (length=25)
      'error' => int 0
      'size' => int 129316
*/

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

			$sql = "insert into tp_arsip_surat_keluar (id_jenis_surat, nomor_urut,  nomor_berkas, nomor_surat_keluar, tanggal_keluar, penerima, perihal, path_berkas) 
			values ('$jenis_surat', '$nomor_urut', '$nomor_berkas', '$nomor_surat_keluar', '$tanggal_keluar', '$penerima', '$perihal', '$path_berkas')";
			if(execStatementQuery($sql)) {
			// dd($tanggal_masuk);
				//berhasil menyimpan dokumen
				redirect('?page=daftar_surat_keluar');
			}
		} else {
			die('Permintaan tidak dikenali, silahkan menambah berkas melalui form yang disediakan.');
		}
	break;

	case 'edit':
	// code here
	break;
}