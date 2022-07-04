<?php
require('fpdf/fpdf.php');
include('config.php');

$pdf = new FPDF();
///var_dump(get_class_methods($pdf));

$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,10,'Date:'.date('d-m-Y').'',0,"R");
$pdf->Ln(15);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'USERS',1,1,"C");
$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,8,'No.',1);
$pdf->Cell(35,8,'Nombre',1);
$pdf->Cell(25,8,'Nombre',1);
$pdf->Cell(25,8,'Sexo',1);
$pdf->Cell(35,8,'Email',1);

$query="SELECT * FROM users";
$result = mysqli_query($mysqli, $query);
$no=0;
while($row = mysqli_fetch_array($result)){
	$no=$no+1;
	$pdf->Ln(8);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(10,8,$no,1);
	$pdf->Cell(35,8,$row['nombre'],1);
	$pdf->Cell(25,8,$row['username'],1);
	$pdf->Cell(25,8,$row['sexo'],1);
	$pdf->Cell(35,8,$row['email'],1);
}
$pdf->Output();
?>