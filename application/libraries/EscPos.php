<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  class Escpos
  {
  	public function __construct()
  	{
      require_once APPPATH . 'third_party/Mike42/autoloader.php';


    try {
    // Enter the device file for your USB printer here
    // You can check the tutorial here: https://mike42.me/blog/2015-03-getting-a-usb-receipt-printer-working-on-linux
    $connector = new WindowsPrintConnector("itautec");
    /* Print a "Hello world" receipt" */
    $printer = new Printer($connector);
    $printer -> text("Hello World!\n");
    $printer -> cut();
    /* Close printer */
    $printer -> close();
} catch (Exception $e) {
    echo "Couldn't print to this printer: " . $e -> getMessage() . "\n";
}
  }

}
