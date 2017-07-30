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
		$o->cell(240,10,'Laporan Surat Masuk',0,0,'C');

		//tabel
		$o->ln();
		$o->setY($y+40);
		$o->setX(25);
		$o->GetX(25); 
		$x = $o->GetX();
		$y = $o->GetY();
		$o->setFillColor(233,233,233);  

		$o->SetFont('Arial','',10);

		$o->MultiCell(10,20,'No',1,'C',0,0); 
		$x+=10;                           
		$o->SetXY($x, $y);               

		$o->MultiCell(20,10,'Nomor Urut',1,'C',0,0); 
		$x+=20;                           
		$o->SetXY($x, $y);               

		$o->MultiCell(50,20,'Nomor Berkas',1,'C',0,0);
		$x+=50;
		$o->SetXY($x, $y);               

		$o->MultiCell(40,20,'Penerima',1,'C',0,0);
		$x+=40;
		$o->SetXY($x, $y);               

		$o->MultiCell(30,20,'Tanggal Masuk',1,'C',0,0);
		$x+=30;
		$o->SetXY($x, $y);
		
		$o->MultiCell(30,10,'Nomor Surat Masuk',1,'C',0,0);
		$x+=30;
		$o->SetXY($x, $y);

		$o->MultiCell(30,20,'Jenis Masuk',1,'C',0,0);
		$x+=30;
		$o->SetXY($x, $y);

		$o->MultiCell(40,20,'Perihal',1,'C',0,0);
		$x+=40;
		$y+=10;


		$sql = $o->getQuery('tp_user');
		$result = mysqli_query($link, $sql);
		mysqli_num_rows($result);
		$no = 0; 
		while ($row = mysqli_fetch_assoc($result)) {
			$no++;
			$x=25;
			$y+=10;              
			$o->SetXY($x, $y);
			$height = $o->tableHeight($row['username'], 25);
			$height1 = $o->tableWrap($row['username'], 25, $height);

			$o->MultiCell(10,$height,$no,1,'C');
			$x+=10;
			$o->SetXY($x, $y);

			$o->MultiCell(20,$height,$row['kode_operator'],1,'C');
			$x+=20;
			$o->SetXY($x, $y);

			$o->MultiCell(50,$height,$row['nama'],1,'L');
			$x+=50;
			$o->SetXY($x, $y);

			$o->MultiCell(40,$height1,$row['username'],1,'L');
			$x+=40;
			$o->SetXY($x, $y);
			$y += $o->marginTable($row['nama'], 50, $y);			
			
			$y-=$o->customHeight();
			
			$o->MultiCell(30,$height,$row['status'],1,'C');
			$x+=30;
			$o->SetXY($x, $y);
			
			$o->MultiCell(30,$height,$row['status'],1,'C');
			$x+=30;
			$o->SetXY($x, $y);
			
			$o->MultiCell(30,$height,$row['status'],1,'C');
			$x+=30;
			$o->SetXY($x, $y);

			$o->MultiCell(40,$height,$row['status'],1,'C');
			$x+=40;
			$o->SetXY($x, $y);
			
			$y += $o->tableWrapFix($row['username'], 25, $height);
			$o->automaticBreak(170, $y);
			$y = $o->automaticBreakTop(170, $y);

		}
		$o->automaticBreak(110, $y);
		$y = $o->automaticBreakTop(110, $y);
		$y = $o->getY();
		$prow=5;
		$y =$y+10+$prow;
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
		$o->cell(90,10,'Berkat Jaya Harefa',0,0,'L',0);
		$y =$y-204;
		$o->setY($y);
		$o->setX(25);
		$o->cell(170,10);
		$o->cell(90,10,'NIP : 010100100100 10 10 1',0,0,'L',0);
	$o->Output();
?>