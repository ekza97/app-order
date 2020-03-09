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
    $pdf->Cell(0,5,'DAFTAR MEJA','0','1','C',false);
    $pdf->Ln(4);
    $pdf->SetFont('Arial','B',7);
    $pdf->Cell(10,6,'No',1,0,'C');
    $pdf->Cell(185,6,'Nama Meja',1,0,'C');
    $pdf->Ln(2);
	
	
	
    $no = 0;
    $sql = mysqli_query($con, "SELECT * FROM meja ORDER BY namameja");
    $count = mysqli_num_rows($sql);
    while ($data = mysqli_fetch_array($sql)) {
        $no++;
        $pdf->Ln(4);
        $pdf->SetFont('Arial','',7);
        $pdf->Cell(10,4,$no.".",1,0,'C');
        $pdf->Cell(185,4,$data['namameja'],1,0,'L');
    }
    $pdf->Ln(5);
    $pdf->Cell(0,5,"Jumlah Meja pada Cafe Papua Code : ".$count." Meja",'0','1','C',false);
    $pdf->Line(10, 25, 225-20, 25);
    $pdf->Ln(10);
    // $pdf->AliasNbPages('{totalPages}');
    // $pdf->Cell(0, 5, "Page " . $pdf->PageNo() . "/{totalPages}", 0, 1);
    $pdf->Output('',"Laporan Data Meja.pdf");

?>