<?php
/* Call this file 'hello-world.php' */

require __DIR__ . '/../../autoload.php';
use Mike42\Escpos\CapabilityProfile;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

use Mike42\Escpos\Printer;

function teste(){

      // Enter the share name for your USB printer here
    //  $connector = null;


$connector = new WindowsPrintConnector("itautec");

      /* Print a "Hello world" receipt" */
      $printer = new Printer($connector);
      $printer -> setJustification(Printer::JUSTIFY_CENTER);
      $printer -> text("Hello World!");
      $printer -> cut();

      /* Close printer */
      $printer -> close();

}
