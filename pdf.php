<?php


ob_start();
require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$email= $_POST['t3'];
$pdf->Cell(40,10,$email);
$pdf->Output();
ob_end_flush(); 
?>