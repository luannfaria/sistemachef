<?php

require __DIR__ .'/../../autoload.php';


use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\CapabilityProfiles\DefaultCapabilityProfile;


    try {
        // Enter the share name for your USB printer here
        $nomeimpressora= "pos";
          $connector = new WindowsPrintConnector($nomeimpressora);

        /* Print a "Hello world" receipt" */
        $printer = new Printer($connector);
        $printer -> text("Hello World!");
        $printer -> cut();

        /* Close printer */
        $printer -> close();
    } catch(Exception $e) {
        echo "Couldn't print to this printer: " . $e -> getMessage() . "\n";
    }
