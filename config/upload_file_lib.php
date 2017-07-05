<?php
function UploadFile($uploaddir, $filename, $filesize, $tmp_name, $ekstensi, $max_size, $uploaded_filename)
{
	$ext = pathinfo($filename, PATHINFO_EXTENSION);
	$uploadfile = $uploaddir . $uploaded_filename.".".$ext;

	if (!in_array($ext, $ekstensi)) {
		return "ekstensi_tidak_sesuai";
	} else {
		if ($filesize > ($max_size * 1000000)) {
			return "ukuran_file_melampaui_batas";
		} else {
			// echo $uploadfile;
			if (move_uploaded_file($tmp_name, $uploadfile)) {
				return 'file_berhasil_diupload';
			} else {
				return 'file_gagal_diupload';
			}
		}
	}
}