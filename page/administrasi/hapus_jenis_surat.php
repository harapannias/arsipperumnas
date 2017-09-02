<?php

if(isset($_GET['jenis'])) {

	$idToDelete = buka(e($_GET['token']));
	$jenis = e($_GET['jenis']);

	$sql = "delete from tr_jenis_surat_$jenis where id_jenis_surat_$jenis = $idToDelete";

	if(execStatementQuery($sql)) {
		//berhasil menyimpan
		redirect('?page=jenis_surat_'.$jenis);
	}
}