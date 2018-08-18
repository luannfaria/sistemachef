<?php



require __DIR__. '\..\..\vendor\mpdf\mpdf.php';

class Imprimiean extends CI_Controller {


function generatebarcode(){

$pdf= new MPDF("P","pt","A4");
$pdf->AddPage();

$pdf->SetFont('arial','B',18);
$pdf->Cell(0,5,"Relatorio status $status",0,1,'C');
$pdf->Cell(0,5,"","B",1,'C');
$pdf->Ln(50);


//cabe�alho da tabela
$pdf->SetFont('arial','B',14);
$pdf->Cell(90,20,'N.Chamado',1,0,"L");
$pdf->Cell(120,20,'Nome cliente',1,0,"L");
$pdf->Cell(120,20,'Titulo',1,0,"L");
$pdf->Cell(90,20,'Data',1,0,"L");
$pdf->Cell(115,20,'DESC',1,1,"L");

//linhas da tabela
$pdf->SetFont('arial','',11);


$pdf->Output("arquivo.pdf","I");
}
}
