<?php
/* Call this file 'hello-world.php' */

require __DIR__ . '/../vendor/autoload.php';
use Proner\PhpPimaco\Tag;
use Proner\PhpPimaco\Pimaco;
use Proner\PhpPimaco\Tags\Barcode;
function teste($data){





  $count = count($data);
$pimaco = new Pimaco('6180');
 //echo $count;

 for($i=0;$i<$count;$i++){
   $cod = $data[$i];
   $tag = new Tag();

   $tag->barcode($cod,"TYPE_CODE_128");

$pimaco->addTag($tag);


//$tag = new Barcode($cod,"TYPE_EAN_13");




 }



 $pimaco->output();
}
