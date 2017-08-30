<?php
require('../assets/fpdf/customFPDF.php');
require('../config/koneksi.php');
require('../config/helpers.php');

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
		$o->cell(240,10,'Laporan Data Operator',0,0,'C');

		//tabel
		$o->ln();
		$o->setY($y+40);
		$o->setX(5);
		$o->GetX(5); 
		$x = $o->GetX();
		$y = $o->GetY();
		$o->setFillColor(233,233,233);  

		$o->SetFont('Arial','',10);

		$o->MultiCell(10,10,'No',1,'C',0,0); 
		$x+=10;                           
		$o->SetXY($x, $y);              

		$o->MultiCell(95,10,'Nama',1,'C',0,0);
		$x+=95;
		$o->SetXY($x, $y);               

		$o->MultiCell(70,10,'Username',1,'C',0,0);
		$x+=70;
		$o->SetXY($x, $y);   

		$o->MultiCell(40,10,'Tanggal Daftar',1,'C',0,0);
		$x+=40;
		$o->SetXY($x, $y);  

		$o->MultiCell(40,10,'Login Terakhir',1,'C',0,0);
		$x+=40;
		$o->SetXY($x, $y);               

		$o->MultiCell(30,10,'Status',1,'C',0,0);
		$x+=40;
		$y+=3;


		$sql = $o->getQuery('tp_user');
		$result = mysqli_query($link, $sql);
		mysqli_num_rows($result);
		$no = 0; 
		while ($row = mysqli_fetch_assoc($result)) {
			$no++;
			$x=5;
			$y+=7;              
			$o->SetXY($x, $y);
			$height = $o->tableHeight($row['nama'], 60);
			$height1 = $o->tableWrap($row['nama'], 60, $height);

			$o->MultiCell(10,$height,$no,1,'C');
			$x+=10;
			$o->SetXY($x, $y);

			$o->MultiCell(95,$height1,$row['nama'],1,'L');
			$x+=95;
			$o->SetXY($x, $y);

			$o->MultiCell(70,$height,$row['username'],1,'C');
			$x+=70;
			$o->SetXY($x, $y);
			
			$o->MultiCell(40,$height,$row['wk_rekam'],1,'C');
			$x+=40;
			$o->SetXY($x, $y);


			$o->MultiCell(40,$height,$row['login_terakhir'],1,'C');
			$x+=40;
			$o->SetXY($x, $y);

			$y += $o->marginTable($row['nama'], 40, $y);
			$y-=$o->customHeight();
			
			$o->MultiCell(30,$height, getStatus($row['status']),1,'C');
			$x+=30;
			$o->SetXY($x, $y);
			// $y += $o->tableWrapFix($row['username'], 25, $height);
			$o->automaticBreak(170, $y);
			$y = $o->automaticBreakTop(170, $y);

		}
		// $o->automaticBreak(110, $y);
		$y = $o->automaticBreakTop(110, $y);
		$y = $o->getY();
		$prow=5;
		$y =$y+20+$prow;
		$o->setY($y);
		$o->setX(25);
		$o->cell(170,7);
		$o->cell(90,10,'Medan,',0,0,'L',0);
		$y =$y+$prow;
		$o->setY($y);
		$o->setX(25);
		$o->cell(170,10);
		$o->cell(90,10,'Kepala Bagian SDM',0,0,'L',0);
		$y =$y+20;
		$o->setY($y);
		$o->setX(25);
		$o->cell(170,10);
		$o->cell(90,10,'______________________',0,0,'L',0);
		$y =$y-204;
		$o->setY($y);
		$o->setX(25);
		$o->cell(170,10);
		$o->cell(90,10,'NIP :  ',0,0,'L',0);

	header('Content-type: application/pdf');
	$o->Output();
?>