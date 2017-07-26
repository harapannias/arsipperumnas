<?php

function dd($arg) {
	var_dump($arg);
	die();
}


require('../assets/fpdf/customFPDF.php');
$o = new customFPDF('L');
$o->AddPage();
//Logo
$y = 31;
$o->setY($y);
$o->Image('../assets/img/logo.jpg',175,10,-1300,0,0,'R');

//Judul
$o->SetFont('Arial','B',16);
$o->setY($y+20);
$o->setX(25);
$o->cell(240,10,'Laporan Surat Masuk',0,0,'L');

//tabel
$o->ln();
$o->setY($y+40);
$o->setX(25);
$start_awal=$o->GetX(); 
$get_xxx = $o->GetX();
$get_yyy = $o->GetY();
$o->setFillColor(233,233,233);
$height_cell = 10;     

$o->SetFont('Arial','',12);

$o->MultiCell(10,$height_cell,'No',0,'L',0,0); 
$get_xxx+=15;                           
$o->SetXY($get_xxx, $get_yyy);               

$o->MultiCell(30,$height_cell,'Kode Operator',0,'L',0,0); 
$get_xxx+=35;                           
$o->SetXY($get_xxx, $get_yyy);               

$o->MultiCell(120,$height_cell,'Nama',0,'L',0,0);
$get_xxx+=125;
$o->SetXY($get_xxx, $get_yyy);               

$o->MultiCell(40,$height_cell,'Username',0,'L',0,0);
$get_xxx+=45;
$o->SetXY($get_xxx, $get_yyy);               

$o->MultiCell(30,$height_cell,'Status',0,'L',0,0);
$get_xxx+=35;

$o->setlineWidth(0,1);
$o->line(270,$get_yyy,23,$get_yyy);

$link = mysqli_connect("localhost", "root", "", "pendataan_penduduk");
$sql = "select * from tb_user";
$no = 0;
if ($result = mysqli_query($link, $sql)) {
	if(mysqli_num_rows($result) > 0){
		$no = 1; 
		while ($row = mysqli_fetch_assoc($result)) {

			$height = $o->getCustomHeight(strlen($row['nama']), 50);

			$o->SetFont('Arial', '', 12);
			$o->Cell(13);
			$o->Cell(15, $height, $no, 1, 0, 'L');
			$o->Cell(35, $height, $row['kode_operator'], 1, 0, 'L');
			$o->MultiCell(125, $height, $row['nama'], 1);

			$o->SetY($o->getCustomY($height));
			$o->SetX(198);
			$o->Cell(45, $height, $row['username'], 1, 0, 'L');
			$o->Cell(35, $height, $row['status'], 1, 0, 'L');

			$o->Ln();
			$no++;
		}
	}
}
$get_yyy+=$height_cell;
$o->setlineWidth(0,1);
$o->line(270,$get_yyy,23,$get_yyy);
$prow = 10;
$y = $get_yyy;
$y =$y+$prow;
$o->setY($y= $y+110);
$o->setX(25);
$o->cell(170,10);
$o->cell(90,10,'Medan,',0,0,'L',0);
$y =$y+$prow;
$o->setY($y);
$o->setX(25);
$o->cell(170,10);
$o->cell(90,10,'Kepala Bagian SDM',0,0,'L',0);
$y =$y+30;
$o->setY($y);
$o->setX(25);
$o->cell(170,10);
$o->cell(90,10,'Berkat Jaya Harefa',0,0,'L',0);
$y =$y+10;
$o->setY($y);
$o->setX(25);
$o->cell(170,10);
$o->cell(90,10,'NIP : 010100100100 10 10 1',0,0,'L',0);
$o->Output();
?>