<?php
    include('../assets/fpdf/fpdf.php');
    include('../inc/koneksi.php');
	
    $pdf = new FPDF();
    $pdf->AddPage('P','A4');
	
	
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(0,5,'CAFE PAPUA CODE','0','1','C',false);
    $pdf->SetFont('Arial','B',12);
    $pdf->Ln(2);
    $pdf->Cell(0,5,"SP 1 Jlr 5 Kampung Waraitama",'0','1','C',false);
    $pdf->Line(10, 25, 225-20, 25);
    $pdf->Ln(12);


    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(0,5,'DAFTAR PESANAN HARI INI','0','1','C',false);
    $pdf->Ln(4);
    $pdf->SetFont('Arial','B',7);
    $pdf->Cell(10,6,'No',1,0,'C');
    $pdf->Cell(20,6,'Tanggal',1,0,'C');
    $pdf->Cell(40,6,'Nama Meja',1,0,'L');
    $pdf->Cell(75,6,'Nama Pesanan',1,0,'L');
    $pdf->Cell(25,6,'Jumlah',1,0,'C');
    $pdf->Cell(25,6,'Status',1,0,'C');
    $pdf->Ln(2);
	
	
	$date=date('Y-m-d');
    $no = 0;
    $sql = mysqli_query($con, "SELECT * FROM pesanan,meja WHERE meja_idmeja=idmeja AND tanggal='$date' AND status BETWEEN 'proses' AND 'selesai' ORDER BY tanggal DESC") or die (mysqli_error($con));
    $count = mysqli_num_rows($sql);
    while ($data = mysqli_fetch_array($sql)) {
        $no++;
        $pdf->Ln(4);
        $pdf->SetFont('Arial','',7);
        $pdf->Cell(10,4,$no.".",1,0,'C');
        $pdf->Cell(20,4,$data['tanggal'],1,0,'C');
        $pdf->Cell(40,4,$data['namameja'],1,0,'L');
        $pdf->Cell(75,4,$data['namapesanan'],1,0,'L');
        $pdf->Cell(25,4,$data['jumlah'],1,0,'C');
        $pdf->Cell(25,4,$data['status'],1,0,'C');
    }
    $pdf->Ln(5);
    $pdf->Cell(0,5,"Jumlah Pesanan hari ini pada Cafe Papua Code : ".$count." Pesanan",'0','1','C',false);
    $pdf->Line(10, 25, 225-20, 25);
    $pdf->Ln(10);
    // $pdf->AliasNbPages('{totalPages}');
    // $pdf->Cell(0, 5, "Page " . $pdf->PageNo() . "/{totalPages}", 0, 1);
    $pdf->Output('',"Laporan Pesanan Hari Ini.pdf");

?>