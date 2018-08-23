<?php

require __DIR__ .'/../../autoload.php';


use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

$nomeimpressora= "pos";
  $connector = new WindowsPrintConnector($nomeimpressora);
$printer = new Printer($connector);
      try {

    } catch (Exception $e) {
      echo "Couldn't print to this printer: " . $e -> getMessage() . "\n";
    }

    $printer->text("\n"."TESTETSTETS"."\n");
    $printer->setJustification(Printer::JUSTIFY_RIGHT);
    $printer->text("\n"."TESTETSTETS"."\n");

    $printer->cut();


    $printer->pulse();


    $printer->close();
