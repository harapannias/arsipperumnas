<?php
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
$o->cell(240,10,'Laporan Operator',0,0,'C');

//tabel
$o->ln();
$o->setY($y+40);
$o->setX(25);
$start_awal=$o->GetX(); 
$x = $o->GetX();
$y = $o->GetY();
$o->setFillColor(233,233,233);  

$o->SetFont('Arial','',12);

$o->MultiCell(10,10,'No',1,'C',0,0); 
$x+=10;                           
$o->SetXY($x, $y);               

$o->MultiCell(30,10,'Kode Operator',1,'C',0,0); 
$x+=30;                           
$o->SetXY($x, $y);               

$o->MultiCell(120,10,'Nama',1,'C',0,0);
$x+=120;
$o->SetXY($x, $y);               

$o->MultiCell(50,10,'Username',1,'C',0,0);
$x+=50;
$o->SetXY($x, $y);               

$o->MultiCell(30,10,'Status',1,'C',0,0);
$x+=30;


// $o->ln();
// $o->setY($y+40);
// $o->setX(25);
// $start_awal=$o->GetX(); 
// $x = $o->GetX();
// $y = $o->GetY();
// $o->setFillColor(233,233,233);  

// $o->SetFont('Arial','',12);

// $o->MultiCell(10,10,'No',0,'L',0,0); 
// $x+=15;                           
// $o->SetXY($x, $y);               

// $o->MultiCell(30,10,'Kode Operator',0,'L',0,0); 
// $x+=35;                           
// $o->SetXY($x, $y);               

// $o->MultiCell(120,10,'Nama',0,'L',0,0);
// $x+=125;
// $o->SetXY($x, $y);               

// $o->MultiCell(40,10,'Username',0,'L',0,0);
// $x+=45;
// $o->SetXY($x, $y);               

// $o->MultiCell(30,10,'Status',0,'L',0,0);
// $x+=35;

// $o->setlineWidth(0,1);
// $o->line(270,$y,23,$y);
require('../config/koneksi.php');
$sql = "select * from tb_user";
$no = 0;
if ($result = mysqli_query($link, $sql)) {
	if(mysqli_num_rows($result) > 0){
		$no = 0; 
		while ($row = mysqli_fetch_assoc($result)) {
			// $no++;
			// $x=$start_awal;
			// $y+=10;              
			// $o->SetXY($x, $y);
			// $o->setlineWidth(0,1);
			// $o->line(270,$y,23,$y);

			// $o->MultiCell(10,10,$no,0,'L');
			// $x+=15;
			// $o->SetXY($x, $y);

			// $o->MultiCell(30,10,$row['kode_operator'],0,'L');
			// $x+=35;
			// $o->SetXY($x, $y);

			// $o->MultiCell(120,10,$row['nama'],0,'L');
			// $x+=125;
			// $o->SetXY($x, $y);

			// $o->MultiCell(40,10,$row['username'],0,'L');
			// $x+=45;
			// $o->SetXY($x, $y);

			// if (strlen($row['nama'])>=50) {
			// 	$y+=20;
			// }else {
			// 	$y+=10;
			// }
			// $y-=10;
			// $o->MultiCell(30,10,$row['status'],0,'L');
			// $x+=35;
			// $o->SetXY($x, $y);

			$no++;
			$x=$start_awal;
			$y+=10;              
			$o->SetXY($x, $y);
			if (strlen($row['nama'])>=50) {
				$height=20;
				$height1=$height-10;
			}else {
				$height=10;
				$height1=10;
			}
			
			$o->MultiCell(10,$height,$no,1,'C');
			$x+=10;
			$o->SetXY($x, $y);

			$o->MultiCell(30,$height,$row['kode_operator'],1,'C');
			$x+=30;
			$o->SetXY($x, $y);

			$o->MultiCell(120,$height1,$row['nama'],1,'L');
			$x+=120;
			$o->SetXY($x, $y);

			$o->MultiCell(50,$height,$row['username'],1,'C');
			$x+=50;
			$o->SetXY($x, $y);

			if (strlen($row['nama'])>=50) {
				$y+=20;
			}else {
				$y+=10;
			}
			$y-=10;
			$o->MultiCell(30,$height,$row['status'],1,'C');
			$x+=30;
			$o->SetXY($x, $y);
			if ($y>=170) {
				$o->AddPage();
				$y-=$y;
			}

		}
	}
}
if ($y>=130) {
	$o->AddPage();
	$y-=$y;
}

$prow=10;
$y =$y+$prow;
$o->setY($y);
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
$y =$y-201;
$o->setY($y);
$o->setX(25);
$o->cell(170,10);
$o->cell(90,10,'NIP : 010100100100 10 10 1',0,0,'L',0);
$o->Output();
?>