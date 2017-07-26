<?php
require('../assets/fpdf/customFPDF.php');
require('../config/koneksi.php');

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
		$o->GetX(25); 
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


		$sql = $o->getQuery('tb_user');
		$result = mysqli_query($link, $sql);
		mysqli_num_rows($result);
		$no = 0; 
		while ($row = mysqli_fetch_assoc($result)) {
			$no++;
			$x=25;
			$y+=10;              
			$o->SetXY($x, $y);
			$height = $o->tableHeight($row['nama'], 50);
			$height1 = $o->tableWrap($row['nama'], 50, $height);

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
			$y += $o->marginTable($row['nama'], 50, $y);			
			$y-=10;
			$o->customHeight();
			$o->MultiCell(30,$height,$row['status'],1,'C');
			$x+=30;
			$o->SetXY($x, $y);
			$o->automaticBreak(170, $y);
			$y = $o->automaticBreakTop(170, $y);

		}
		$o->automaticBreak(130, $y);
		$y = $o->automaticBreakTop(130, $y);

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