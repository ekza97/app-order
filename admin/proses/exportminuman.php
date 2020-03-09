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
    $pdf->Cell(0,5,'DAFTAR MINUMAN','0','1','C',false);
    $pdf->Ln(4);
    $pdf->SetFont('Arial','B',7);
    $pdf->Cell(10,6,'No',1,0,'C');
    $pdf->Cell(99,6,'Nama Minuman',1,0,'C');
    $pdf->Cell(35,6,'Harga',1,0,'C');
    $pdf->Cell(50,6,'Foto',1,0,'C');
    $pdf->Ln(2);
	
	
	
    $no = 0;
    $sql = mysqli_query($con, "SELECT * FROM minuman ORDER BY namaminuman");
    $count = mysqli_num_rows($sql);
    while ($data = mysqli_fetch_array($sql)) {
        $no++;
        $pdf->Ln(4);
        $pdf->SetFont('Arial','',7);
        $pdf->Cell(10,4,$no.".",1,0,'C');
        $pdf->Cell(99,4,$data['namaminuman'],1,0,'L');
        $pdf->Cell(35,4,number_format($data['harga'],2,",","."),1,0,'R');
        $pdf->Cell(50,4,$data['image'],1,0,'C');
    }
    $pdf->Ln(5);
    $pdf->Cell(0,5,"Jumlah Minuman pada Cafe Papua Code : ".$count." Minuman",'0','1','C',false);
    $pdf->Line(10, 25, 225-20, 25);
    $pdf->Ln(10);
    // $pdf->AliasNbPages('{totalPages}');
    // $pdf->Cell(0, 5, "Page " . $pdf->PageNo() . "/{totalPages}", 0, 1);
    $pdf->Output('',"Laporan Data Makanan.pdf");

?>