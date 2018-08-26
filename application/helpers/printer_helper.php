<?php

require __DIR__ .'/../autoload.php';


use Mike42\Escpos\Printer;
use Mike42\Escpos\ImagickEscposImage;
use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;


function teste(){

$pdf = require __DIR__.'/../src/mike42/escpos/resources/document.pdf';
  $connector = new WindowsPrintConnector("pos");
     /* Print a "Hello world" receipt" */
     $printer = new Printer($connector);
  //$connector = new FilePrintConnector("php://stdout");

  try {
    $pages = ImagickEscposImage::loadPdf($pdf);
    foreach ($pages as $page) {
        $printer -> graphics($page);
    }
    $printer -> cut();
} catch (Exception $e) {
    /*
	 * loadPdf() throws exceptions if files or not found, or you don't have the
	 * imagick extension to read PDF's
	 */
    echo $e -> getMessage() . "\n";
} finally {
    $printer -> close();
}

}
