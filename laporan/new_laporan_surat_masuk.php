<?php

require('../assets/fpdf/customFPDF.php');
require('../config/koneksi.php');
require('../config/helpers.php');

$default_height = 7;

function getHeight($l_, $mx_) {
	global $default_height;
	// var_dump($l_ .' > '.$mx_ .' = ' . ($l_/$mx_));
	if($l_ > $mx_) {
		return (int)  (($l_/$mx_) +1)* $default_height;
	}
	return $default_height;
}

function height($h, $max) {
	global $default_height;
	// if($h <= $max && $h > $default_height) {
	// 	return $default_height;
	// }
	// return $max;
	// 
	if($h == $default_height) {
		return $max;
	}else if($h < $max && $h > $default_height) {
		return ($max/$h)*$default_height;
	}
	return $default_height;
}

function testLoop($loop, $max) {
	return $loop > 0 ? $max : $loop-1;
}

$o = new customFPDF('L');
$o->AddPage();

//Logo
$y = 31;
$o->setY($y);
$o->Image('../assets/img/logo.jpg',175,10,-1300,0,0,'R');

//Judul
$o->SetFont('Arial','B',14);
$o->setY($y+20);
$o->setX(25);
$o->cell(240,10,'Laporan Surat Masuk',0,0,'C');

// Judul Tabel
$o->SetFont('Arial', '', 12);
$o->ln();
$o->cell(20,10,'No Urut',1,0,'C');
$o->cell(25,10,'No Berkas',1,0,'L');
$o->cell(40,10,'No Surat Masuk',1,0,'L');
$o->cell(35,10,'Tanggal Masuk',1,0,'C');
$o->cell(60,10,'Pengirim',1,0,'L');
$o->cell(95,10,'Perihal',1,0,'L');

// isi table
// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=false)
$rows = execSelectQuery("select nomor_urut, nomor_berkas, nomor_surat_masuk, tanggal_masuk, pengirim, perihal from tp_arsip_surat_masuk where status = 1 order by wk_rekam");
//init text
/*
$no_urut = 123456789;
$no_berkas = 10;
$no_surat_masuk = 100;
$tgl_masuk = '2017-07-10';
$pengirim = "Lorem ipsum dolor sit amet";
$perihal = "Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet";
*/

// tentukan maxlength per kolom 
$mx_no_urut = 8;
$mx_no_berkas = 10;
$mx_no_surat_masuk = 17;
$mx_tgl_masuk = 14;
$mx_pengirim = 28;
$mx_perihal = 47;

$before = [];
foreach ($rows as $loop => $row) {
// hitung berapa baris terpanjang
$h_no_urut = getHeight(strlen($row['nomor_urut']), $mx_no_urut);
$h_no_berkas = getHeight(strlen($row['nomor_berkas']), $mx_no_berkas);
$h_no_surat_masuk = getHeight(strlen($row['nomor_surat_masuk']), $mx_no_surat_masuk);
$h_tgl_masuk = getHeight(strlen($row['tanggal_masuk']), $mx_tgl_masuk);
$h_pengirim = getHeight(strlen($row['pengirim']), $mx_pengirim);
$h_perihal = getHeight(strlen($row['perihal']), $mx_perihal);
$max = max($h_no_urut, $h_no_berkas, $h_no_surat_masuk, $h_tgl_masuk, $h_pengirim, $h_perihal);
$before[$loop] = $max;
// dd($loop > 0);
// 
$o->ln($loop == 0 ? 10 : ($loop > 0 ? $before[$loop-1] : $max));

//8
$o->MultiCell(20, height($h_no_urut, $max), (($max/$h_perihal)), 1,'R', false);
$o->setXY(30, $o->GetY()-$max) + 1;

// 10
// dd(height($h_no_berkas, $max));
$o->MultiCell(25, height($h_no_berkas, $before[$loop]), $row['nomor_berkas'],1,'', false);
$o->setXY(30+25, $o->GetY()-$max);

// //17
$o->MultiCell(40, height($h_no_surat_masuk, $max), $row['nomor_surat_masuk'],1,'', false);
$o->setXY(30+25+40, $o->GetY()-$max);

// //14
$o->MultiCell(35, height($h_tgl_masuk, $max),$row['tanggal_masuk'],1,'C', false);
$o->setXY(30+25+40+35, $o->GetY()-$max);

// //28
$o->MultiCell(60, height($h_pengirim, $max), $row['pengirim'], 1,'', false);
$o->setXY(30+25+40+35+60, $o->GetY()-$max);

// //47
// dd(height($h_perihal, $max));
$o->MultiCell(95, height($h_perihal, $max), $row['perihal'] ,1,'', false);
$o->setXY(30+25+40+35+60+95, $o->GetY()-$max);
// dd($o->getY());
}

header('Content-type: application/pdf');
$o->Output();