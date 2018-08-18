<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


function totalprodutos(){

  $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('Produto_model');
    //$CI->load->model('Empresa_model');
    // Call a function of the model
    $produtos = $CI->Produto_model->get_all_produtos_count();
  //  $taxa = $CI->Empresa_model->get_taxa();
  //  $valortaxa = ($totalitens*$taxa)/100;
  //  $subtotal = $totalitens+$valortaxa;
    return $produtos;
}

function totalpedidos(){

  $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('Pedidopdv_model');
    //$CI->load->model('Empresa_model');
    // Call a function of the model
    $pedidos = $CI->Pedidopdv_model->get_all_pedido_count();
  //  $taxa = $CI->Empresa_model->get_taxa();
  //  $valortaxa = ($totalitens*$taxa)/100;
  //  $subtotal = $totalitens+$valortaxa;
    return $pedidos;


}

function totalvendasdodia(){
  $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('Caixa_model');
    //$CI->load->model('Empresa_model');
    // Call a function of the model

    date_default_timezone_set('America/Sao_Paulo');
    $hoje = date('d/m/Y');

    $vendashoje = $CI->Caixa_model->entrada($hoje);
  //  $taxa = $CI->Empresa_model->get_taxa();
  //  $valortaxa = ($totalitens*$taxa)/100;
  //  $subtotal = $totalitens+$valortaxa;
    return $vendashoje;

}

function vendasdasemana(){



  $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('Caixa_model');
    //$CI->load->model('Empresa_model');
    // Call a function of the model

    date_default_timezone_set('America/Sao_Paulo');
    $data = date('d/m/Y', strtotime('-7 days'));
  //  $hoje = date('d/m/Y');

    $vendasemana = $CI->Caixa_model->semana($data);
  //  $taxa = $CI->Empresa_model->get_taxa();
  //  $valortaxa = ($totalitens*$taxa)/100;
  //  $subtotal = $totalitens+$valortaxa;
    return $vendasemana;


}

function maisvendidos(){


    $CI = get_instance();

      // You may need to load the model if it hasn't been pre-loaded
      $CI->load->model('itenspedidopdv_model');
      //$CI->load->model('Empresa_model');
      // Call a function of the model


    //  $hoje = date('d/m/Y');

      $maisvendidos = $CI->itenspedidopdv_model->maisvendidos();
    //  $taxa = $CI->Empresa_model->get_taxa();
    //  $valortaxa = ($totalitens*$taxa)/100;
    //  $subtotal = $totalitens+$valortaxa;
      return $maisvendidos;


}
