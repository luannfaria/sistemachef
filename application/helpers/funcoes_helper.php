<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



function subtotalpdv($idpedidopdv){


  $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('Itenspedidopdv_model');
    //$CI->load->model('Empresa_model');
    // Call a function of the model
    $totalitens = $CI->Itenspedidopdv_model->subtotalpdv($idpedidopdv);
  //  $taxa = $CI->Empresa_model->get_taxa();
  //  $valortaxa = ($totalitens*$taxa)/100;
  //  $subtotal = $totalitens+$valortaxa;
    return $totalitens;

}
function retornaestoqueitem($iditem){

  $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('Produto_model');
    //$CI->load->model('Empresa_model');
    // Call a function of the model
    $estoque = $CI->Produto_model->retornaestoque($iditem);
  //  $taxa = $CI->Empresa_model->get_taxa();
  //  $valortaxa = ($totalitens*$taxa)/100;
  //  $subtotal = $totalitens+$valortaxa;

  if($estoque!=null){
    return $estoque;
  }
  else{
    $estoque=0;
    return $estoque;
  }
}

function valordesconto($idpedidopdv){

  $CI = get_instance();

  $CI->load->model('Pedidopdv_model');
  $desconto = $CI->Pedidopdv_model->descontovlr($idpedidopdv);

  return $desconto;


}

function valordescontomesa($idpedidomesa){

  $CI = get_instance();

  $CI->load->model('Pedidomesa_model');
  $desconto = $CI->Pedidomesa_model->descontovlr($idpedidomesa);

  return $desconto;


}
function countitens($idpedidopdv){
  $CI = get_instance();

  $CI->load->model('Itenspedidopdv_model');
  $itens = $CI->Itenspedidopdv_model->countitens($idpedidopdv);

  return $itens;

}
function pagopdv($idpedidopdv){

  $CI = get_instance();

  $CI->load->model('Pagamentopedidopdv_model');
  $pago = $CI->Pagamentopedidopdv_model->pagopdv($idpedidopdv);

  return $pago;

}
function subtotal($idpedidomesa){

  $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('Itenspedidomesa_model');
    $CI->load->model('Empresa_model');
    // Call a function of the model
    $totalitens = $CI->Itenspedidomesa_model->subtotal($idpedidomesa);
    $taxa = $CI->Empresa_model->get_taxa();
    $valortaxa = ($totalitens*$taxa)/100;
    $subtotal = $totalitens+$valortaxa;
    return $subtotal;
}

function valortaxa($idpedidomesa){

  $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('Itenspedidomesa_model');
    $CI->load->model('Empresa_model');
    // Call a function of the model
    $totalitens = $CI->Itenspedidomesa_model->subtotal($idpedidomesa);
    $taxa = $CI->Empresa_model->get_taxa();
    $valortaxa = ($totalitens*$taxa)/100;

    return $valortaxa;



}

function pago($idpedidomesa){

  $CI = get_instance();

  $CI->load->model('Pagamentopedidomesa_model');
  $pago = $CI->Pagamentopedidomesa_model->pago($idpedidomesa);

  return $pago;

}
