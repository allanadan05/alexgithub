<?php
require_once("fpdf17/fpdf.php");
require_once("phpqrcode/qrlib.php");

QRcode::png("coded number here","test.png");

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

$pdf->Image("http://localhost/pdf/qr_generator.php?code=content here", 10, 10, 20, 20, "png");

$pdf->Image("test.png", 40, 10, 20, 20, "png");

$pdf->Output();
