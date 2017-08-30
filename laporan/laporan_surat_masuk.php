<?php
require('../assets/fpdf/customFPDF.php');
require('../config/koneksi.php');
require('../config/helpers.php');

	$o = new customFPDF('L');
		$o->AddPage('A4');

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

		$o->MultiCell(20,10,'Nomor Urut',1,'C',0,0); 
		$x+=20;                           
		$o->SetXY($x, $y);               

		$o->MultiCell(50,20,'Nomor Berkas',1,'C',0,0);
		$x+=50;
		$o->SetXY($x, $y);               

		$o->MultiCell(40,20,'Pengirim',1,'C',0,0);
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


		$sql = 'select m.*, jm.jenis from tp_arsip_surat_masuk m inner join tr_jenis_surat_masuk jm on jm.id_jenis_surat_masuk = m.id_jenis_surat_masuk';
		$result = mysqli_query($link, $sql);
		mysqli_num_rows($result);
		$no = 0; 
		while ($row = mysqli_fetch_assoc($result)) {
			$no++;
			$x=25;
			$y+=10;              
			$o->SetXY($x, $y);
			$height = $o->tableHeight($row['id_arsip_surat_masuk'], 25);
			$height1 = $o->tableWrap($row['id_arsip_surat_masuk'], 25, $height);

			$o->MultiCell(20,$height,$row['nomor_urut'],1,'C');
			$x+=20;
			$o->SetXY($x, $y);

			$o->MultiCell(50,$height,$row['nomor_berkas'],1,'L');
			$x+=50;
			$o->SetXY($x, $y);

			$o->MultiCell(40,$height1,$row['pengirim'],1,'L');
			$x+=40;
			$o->SetXY($x, $y);
			$y += $o->marginTable($row['id_jenis_surat_masuk'], 50, $y);			
			
			$y-=$o->customHeight();
			// dd($row);
			$o->MultiCell(30,$height,date('d-m-Y', strtotime($row['tanggal_masuk'])),1,'C');
			$x+=30;
			$o->SetXY($x, $y);
			
			$o->MultiCell(30,$height,$row['nomor_surat_masuk'],1,'C');
			$x+=30;
			$o->SetXY($x, $y);
			
			$o->MultiCell(30,$height,$row['jenis'],1,'C');
			$x+=30;
			$o->SetXY($x, $y);

			$o->MultiCell(40,$height,$row['perihal'],1,'C');
			$x+=40;
			$o->SetXY($x, $y);
			
			$y += $o->tableWrapFix($row['id_arsip_surat_masuk'], 25, $height);
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
		
	header('Content-type: application/pdf');
	$o->Output();
?>
