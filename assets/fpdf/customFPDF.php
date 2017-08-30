<?php
require('fpdf.php');
class customFPDF extends FPDF
{
	public function getCustomHeight($var, $max, $h = 10) {
		return ($var >= $max ? $h*2 : $h);
	}

	public function getCustomY($height) {
		return $this->GetY() - $height;
	}
	public function getQuery($tabel) {
		return $sql = "select * from ".$tabel."" ;
	}
	public function tableHeight($row, $max, $height = 7, $height1 = 7) {
		return (strlen($row) >= $max ? $height*2 : $height);
		return (strlen($row) >= $max ? $height1= $height-7 : $height);
	}
	public function tableFix($row, $max, $height = 7, $height1 = 7) {
		return (strlen($row) >= $max ? $height*2 : $height);
		return (strlen($row) >= $max ? $height1= $height-7 : $height);
	}  
	public function tableWrap($row, $max, $height) {
		return (strlen($row) >= $max ? $height1= $height-7 : $height);
	} 
	public function tableWrapFix($row, $max, $y) {
		return (strlen($row) >= $max ? $y= $y-7 : $y=$y - 7);
	}
	public function marginTable($row, $max, $y) {
		return (strlen($row) >= $max ? $y= 20 : $y = 7);
	} 
	public function customHeight() {
		return "7";
	}
	public function automaticBreak($max, $y) {
		return ($y >= $max ? $this->AddPage() : $y);
	}
	public function automaticBreakTop($max, $y) {
		return ($y >= $max ? $y-=$y : $y);
	}
	public function Footer() {
   		//Ubah posisi ke 1,5 cm dari bawah
   		$this->SetY(-15);
   		//Pilih font Arial italic 8
   		$this->SetFont('Arial','I',8);
   		//Tampilkan nomor dan jumlah halaman
   		$this->Cell(0,10,'Halaman '.$this->PageNo().' Sistem Informasi Pengarsipan Dokumen PERUMNAS Regional I Medan',0,0,'C');
	}
}