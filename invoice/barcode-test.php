<?php
require('fpdf_barcode.php');

$pdf = new PDF_BARCODE('P','mm','A4');

$pdf->AddPage();

//EAN13 test
$pdf->EAN13(10,10,'123456789012',5,0.5,9);
$pdf->EAN13(10,20,'123456789012',5,0.35,9);
$pdf->EAN13(10,30,'123456789012',10,0.35,9);

//UPC_A test
$pdf->UPC_A(100,10,'123456789012',5,0.5,9);
$pdf->UPC_A(100,20,'123456789012',5,0.35,9);
$pdf->UPC_A(100,30,'123456789012',10,0.35,9);

$pdf->EAN13(130,50,'123456789012',30,0.35,9);
$pdf->EAN13(130,90,'123456789012',30,0.5,9);


$pdf->Output();
