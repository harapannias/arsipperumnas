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
		$o->cell(240,10,'Laporan Surat Keluar',0,0,'C');

		//tabel
		$o->ln();
		$o->setY($y+40);
		$o->setX(2);
		$o->GetX(2); 
		$x = $o->GetX();
		$y = $o->GetY();
		$o->setFillColor(233,233,233);  

		$o->SetFont('Arial','',10);
               

		$o->MultiCell(15,5,'Nomor Urut',1,'C',0,0); 
		$x+=15;                           
		$o->SetXY($x, $y);               

		$o->MultiCell(35,10,'Nomor Berkas',1,'C',0,0);
		$x+=35;
		$o->SetXY($x, $y);               

		$o->MultiCell(85,10,'Penerima',1,'C',0,0);
		$x+=85;
		$o->SetXY($x, $y);               
		$o->SetFont('Arial','',8);
		$o->MultiCell(20,5,'Tanggal Keluar',1,'C',0,0);
		$x+=20;
		$o->SetXY($x, $y);
		$o->SetFont('Arial','',10);
		$o->MultiCell(33,5,'Nomor Surat Keluar',1,'C',0,0);
		$x+=33;
		$o->SetXY($x, $y);

		$o->MultiCell(30,10,'Jenis Surat',1,'C',0,0);
		$x+=30;
		$o->SetXY($x, $y);

		$o->MultiCell(73,10,'Perihal',1,'C',0,0);
		$x+=73;
		$y+=3;
		$o->SetFont('Arial','',8);

		$sql = $o->getQuery('tp_arsip_surat_keluar');
		$result = mysqli_query($link, $sql);
		mysqli_num_rows($result);
		$no = 0; 
		while ($row = mysqli_fetch_assoc($result)) {
			$no++;
			$x=2;
			$y+=7;              
			$o->SetXY($x, $y);
			$height = $o->tableHeight($row['perihal'], 45);
			$height1 = $o->tableWrap($row['perihal'], 45, $height);


			$o->MultiCell(15,$height,$row['nomor_urut'],1,'C');
			$x+=15;
			$o->SetXY($x, $y);

			$o->MultiCell(35,$height,$row['nomor_berkas'],1,'L');
			$x+=35;
			$o->SetXY($x, $y);

			$o->MultiCell(85,$height,$row['penerima'],1,'L');
			$x+=85;
			$o->SetXY($x, $y);
			$y += $o->marginTable($row['nomor_berkas'], 50, $y);			
			
			$y-=$o->customHeight();
			
			$o->MultiCell(20,$height,$row['tanggal_keluar'],1,'C');
			$x+=20;
			$o->SetXY($x, $y);
			
			$o->MultiCell(33,$height,$row['nomor_surat_keluar'],1,'C');
			$x+=33;
			$o->SetXY($x, $y);
			
			$o->MultiCell(30,$height,$row['id_jenis_surat'],1,'C');
			$x+=30;
			$o->SetXY($x, $y);

			$o->MultiCell(73,$height1,$row['perihal'],1,'L');
			$x+=73;
			$o->SetXY($x, $y);
			
			$y += $o->tableWrapFix($row['penerima'], 25, $height);
			$o->automaticBreak(170, $y);
			$y = $o->automaticBreakTop(170, $y);

		}
		$o->SetFont('Arial','',10);
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

	header('Content-type: application/pdf');
	$o->Output();
?>