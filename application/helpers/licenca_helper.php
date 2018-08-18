<?php


function licencasistema(){

  $bd_secundario = $this->load->database('sistema', TRUE);
  return $bd_secundario->query('SELECT * FROM licencasistema');

}

 ?>
