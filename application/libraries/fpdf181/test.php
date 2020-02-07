<?php
require('fpdf.php');

$pdf = new FPDF('P','mm',array(148,210));
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->Cell(45);
$pdf->MultiCell(100,1,'BANK MANDIRI');

$pdf->MultiCell(20,10,'');
$pdf->Cell(44);
$pdf->MultiCell(100,8,'LOKET TES8888');
$pdf->Cell(35);
$pdf->MultiCell(100,1,'(PPOB ARINDO PRATAMA)');
$pdf->Cell(28);
$pdf->MultiCell(100,8,'(JL. MATRAMAN NO.11 BANDUNG)');
$pdf->Cell(20);
$pdf->MultiCell(160,1,'(STRUK PEMBAYARAN BPJS KESEHATAN)');

$pdf->Cell(15);
$pdf->Cell(60,20,'ID TRANS');
$pdf->MultiCell(150,20,': XXYYZZ XXYYZZ');
$pdf->Cell(15);
$pdf->Cell(60,-10,'TANGGAL');
$pdf->MultiCell(150,-10,': XXYYZZ XXYYZZ');
$pdf->Cell(15);
$pdf->Cell(60,20,'NOKA');
$pdf->MultiCell(150,20,': XXYYZZ XXYYZZ');
$pdf->Cell(15);
$pdf->Cell(60,-10,'NAMA');
$pdf->MultiCell(150,-10,': XXYYZZ XXYYZZ');
$pdf->Cell(15);
$pdf->Cell(60,20,'JUMLAH PESERTA');
$pdf->MultiCell(150,20,': XXYYZZ XXYYZZ');
$pdf->Cell(15);
$pdf->Cell(60,-10,'SISA SEBELUMNYA');
$pdf->MultiCell(150,-10,': XXYYZZ XXYYZZ');
$pdf->Cell(15);
$pdf->Cell(60,20,'PERIODE');
$pdf->MultiCell(150,20,': XXYYZZ XXYYZZ');
$pdf->Cell(15);
$pdf->Cell(60,-10,'JUMLAH TAGIHAN');
$pdf->MultiCell(150,-10,': XXYYZZ XXYYZZ');

$pdf->Cell(22);
$pdf->MultiCell(160,35,'BPJS KESEHATAN MENYATAKAN STRUK');
$pdf->Cell(17);
$pdf->MultiCell(160,-25,'INI SEBAGAI BUKTI PEMBAYARAN YANG SAH');

$pdf->Cell(15);
$pdf->Cell(60,45,'BIAYA ADMIN');
$pdf->MultiCell(150,45,': XXYYZZ XXYYZZ');
$pdf->Cell(15);
$pdf->Cell(60,-35,'BIAYA ADMIN');
$pdf->MultiCell(150,-35,': XXYYZZ XXYYZZ');

$pdf->Cell(25);
$pdf->Cell(10,55,'Rincian tagihan dapat diakses pada');
$pdf->MultiCell(160,65,'www.bpjs-kesehatan.go.id');

// $pdf->Cell(1);
// $pdf->MultiCell(100,50,'PPOB ARINDO PRATAMA');

$pdf->Output();
?>
