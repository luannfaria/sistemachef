<?php
require __DIR__ .'/../../third_party/pdf/barcode.php';
$pdf= new PDF_BARCODE("P","mm","A4");
$pdf->AddPage();

$i = 0;
//$array1= array(1,2,3);
$array2= array();
$b=10;


$data = [];
//$data['produto']= $_POST['codbarra'];
//print_r($_POST['codbarra']);
// $count = count($_POST['codbarra']);

foreach( $_POST['codbarra'] as $p){

  $data[]= $p;
}

//$count = count($data);


//for ($ind=0;$ind<5;$ind++) {
  // code...
$count = count($data);

  for($i=0;$i<$count;$i++){


      $pdf->EAN13(10,$b,$data[],10,0.4,10);
      $b+=20;




}


ob_start ();
$pdf->Output();







require __DIR__ .'/../third_party/pdf/barcode.php';
$pdf= new PDF_BARCODE("P","mm","A4");
$pdf->AddPage();
$b=10;
foreach( $_POST['codbarra'] as $p){
$pdf->EAN13(10,$b,$p,10,0.4,10);
$b+=10;
}
ob_start ();
$pdf->Output();
$data = array();
