<?php

require __DIR__ .'/../../autoload.php';



use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;


function teste(){
  $connector = new WindowsPrintConnector("itautec");

        /* Print a "Hello world" receipt" */
  $printer = new Printer($connector);

      // Enter the share name for your USB printer here
  //    $connector = "itautec";
  $printer -> initialize();
try {




    $printer->setJustification(Printer::JUSTIFY_CENTER);
      $printer->text("Hello World!");
$printer->cut();

      /* Close printer */
$printer->close();

      } catch(Exception $e) {
  echo "Couldn't print to this printer: " . $e -> getMessage() . "\n";
}

}
