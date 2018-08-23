<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>PEDIDO MESA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">

  <link rel="stylesheet" href="<?php echo site_url('resources/css/jquery-ui-1.10.4.min.css');?>">




      <link rel="stylesheet" href="<?php echo site_url('resources/css/stylepedidos.css')?>">


</head>

<body>

  <div class="register">

  <div class="left">
    <div class="teste">

      <span>PEDIDO: <?php echo $pedidomesa['idpedidomesa'] ?></span>
<span>INICIO: <?php echo $pedidomesa['horaabertura'] ?></span>
      <span><STRONG>MESA <?php echo $pedidomesa['numeromesa'] ?> </STRONG></span>+



    </div>

    <div class="order-window">
      <table id="item">
        <tbody>
          <tr>
            <td>Hora</td>
            <td>Qtdd</td>
            <td>Item</td>
            <td>Total</td>
            <td>Ações</td>
          </tr>
          <?php foreach($itenspedidomesa as $item){ ?>

            <tr>
              <td><strong><?php echo $item['horapedidoitem']; ?><strong></td>
    <td><strong><?php echo $item['quantidade']; ?><strong></td>

    <td><strong><?php echo $item['nomeitem']; ?></strong></td>
    <td><strong><?php echo number_format((float)$item['preco'],2,'.',''); ?></strong></td>




  <td><span idAcao="<?php echo $item['iditenspedidomesa'] ; ?>" title="Excluir" class="btn btn-danger btn-xs"> Excluir</span></td>
  </tr>

          <?php } ?>
        </tbody>
      </table>
    </div>
    <div class="descricao">


    </div>
    <div class="order-total">

    </div>

    <div class="buttons">
    </div>
  </div>
  <div class="right">

    <div class="teste2">
      <div class="col-lg-5">

              <label for="idservico" class="control-label"> Produtos</label>

              <input type="text" class="form-control" name="produto" id="produto"  placeholder="Pesquisar" required/>

              <input type="hidden" name="idproduto" id="idproduto" />



      <?php date_default_timezone_set('America/Sao_Paulo'); ?>
      <input type="hidden" name="hora" id="hora" value="<?php echo date('H:i') ;?>" />

              <input type="hidden" name="nomeproduto" id="nomeproduto" />
              <input type="hidden" name="venda" id="venda" />
                <input type="hidden" name="idpedido" id="idpedido" value="<?php echo $pedidomesa['idpedidomesa']?>" />

<input type="hidden" id="vendaprodutoadicionado" value="" />
<input type="hidden" id="nomeprodutoadicionado" value=""/>
<input type="hidden" id="idprodutoadicionado" value=""/>
<input type="hidden" id="subtotalitemadicionado" value=""/>
                    <input type="hidden" name="numeromesa" id="numeromesa" value="<?php echo  $pedidomesa['numeromesa'] ?>"/>


      </div>


      <div class="col-lg-5">

          <label for="qtde" class="control-label"> Qtdd</label>

        <div class="input-group input-number-group">
        <div class="input-group-button">
          <span class="input-number-decrement">-</span>
        </div>
        <input class="input-number" type="number" id="qtdd"value="1" min="0" max="1000">
        <div class="input-group-button">
          <span class="input-number-increment">+</span>
        </div>
      </div></div>




    </div>
    <div class="categories">


      <ul id="categorias">
        <?php foreach($categoria as $cat) {?>
        <li data-idcat=<?php echo $cat['idcategoria']?>><a><?php echo $cat['nomecategoria']?></a></li>
      <?php } ?>
      </ul>
    </div>
    <div id="todos" class="menu-items">
      <ul id="produtolista">



      </ul>


    </div>


      <div class="modal fade" id="modalprodutopedido" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">ADICIONAR PRODUTO</h4>
            </div>
            <div class="itempedidomesa">
              <div class="produtomodal">
                <span id="itemselecionado">

                </span>
<span id="valoritemselecionado"></span>
<span id="qtdditemselecionado"></span>
              </div>


              <span></span>

            </div>
            <div class="adicionais">

                  <span>
                  <table class="table table-condensed">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Adicional
                          </th>
                          <th>
                            Preço
                          </th>
                        </tr>
                          <div id="check">
                        <?php foreach ($adicionais as $ad) { ?>
                          <tr>
                              <td><input type="checkbox" name="adicionais[]" data-venda="<?php echo $ad['valor'] ?>" data-nome="<?php echo $ad['nome'] ?>"value="<?php echo $ad['idadicionais'] ?>" >
<input type="hidden" name="vendaadicional[]" value="<?php echo $ad['valor'] ?>">
                                  <input type="hidden" name="nomeadicional[]" value="<?php echo $ad['nome'] ?>">
                              </td>
                              <td>
                                <?php echo $ad['nome'] ?>
                              </td>
                              <td>
                                <?php echo $ad['valor'] ?>
                              </td>
                          </tr>
                <?php        } ?>

</div>
                      </thead>
                    </table>

                  </span>
                  <span>

                    <table class="table table-condensed">
                        <thead>
                          <tr>
                            <th>
                              #
                            </th>
                            <th>
                              Observação
                            </th>

                          </tr>



                          <?php foreach ($observacoes as $ob) { ?>
                            <tr>
                              <td><input type="checkbox" name="observacao[]" value="<?php echo $ob['idobservacoes'] ?>" >

                                  <input type="hidden" name="nomeobservacao[]" value="<?php echo $ob['nome'] ?>">
                              </td>
                                <td>
                                  <?php echo $ob['nome'] ?>
                                </td>

                            </tr>
                  <?php        } ?>


                        </thead>
                      </table>

                  </span>
                </div>
            </div>
            </div>
          </div>

    <div id="total"class="totalizador">

      <?php
          $idpedido =$pedidomesa['idpedidomesa'];
       $this->load->helper("funcoes");
       $troco =0;

       $desconto=0;
      $total = subtotal($idpedido);
    $valortaxa = valortaxa($idpedido);
    $valorpago = pago($idpedido);
    $desconto = valordescontomesa($idpedido);
      ?>
      <span><strong>Pago R$ <?php echo  number_format((float)$valorpago,2,'.','') ?></strong></span>
        <span><strong>Desconto R$ <?php echo  number_format((float)$desconto,2,'.','') ?></strong></span>
      <span><strong>Serviço R$ <?php echo  number_format((float)$valortaxa,2,'.','') ?></strong></span>
      <span><strong>Total R$ <?php echo  number_format((float)$total,2,'.','') ?></strong></span>
    </div>
    <form id="form_insert" action="" method="post">

            <fieldset style="display: none;"></fieldset>

          </form>
    <div class="payment-keys">
      <ul>
        <li href="#receber" data-toggle="modal">

          <i class="fas fa-money-bill-alt fa-2x fa-fw" data-fa-transform="up-2"></i> Receber

        </li>
        <li  href="#desconto" data-toggle="modal">
          <i class="fas fa-cart-arrow-down fa-2x fa-fw" data-fa-transform="up-2"></i> Desconto
        </li>
        <li href="<?php echo base_url('pedidomesa/imprimiconta/'.$pedidomesa['idpedidomesa']);?>">
          <i class="fas fa-print fa-2x fa-fw" data-fa-transform="up-2"></i> Imprimir
        </li>
        <li  href="<?php echo site_url('pedidomesa/excluirpedido/'.$pedidomesa['idpedidomesa']); ?>" id="excluirpedido" data-confirm="Tem certeza que deseja excluir essa mesa?">
          <i class="fas fa-trash fa-2x fa-fw"  ></i> Excluir
        </li>
        <li  onclick="sair();">
          <i class="fas fa-sign-out-alt fa-2x fa-fw" data-fa-transform="up-2"></i>Voltar
        </li>
      </ul>
    </div>
  </div>



</div>

<div class="modal fade" id="desconto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-contentdesconto">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">DESCONTO</h4>
        </div>

        <div class="desconto">

          <span>

        <div class="col-lg-8">
            <h3>Porcent. %</h3>
          <input type="text" class="form-control  input-lg"   name="descontoporcentagem" id="descontoporcentagem"/>
    </div>
  </span>
  <span>

    <div class="col-lg-8">
    <h3>Valor R$</h3>
    <form id="formdesconto" action="" method="post">
<input type="hidden" name="formdescontoid" value="<?php echo $pedidomesa['idpedidomesa'] ?>">
<input type="hidden" class="form-control  input-lg"  name="formdescontovalor" id="formdescontovalor" >
      <input type="text" class="form-control  input-lg"  name="descontovalor" id="descontovalor" value="">
</div>
</span>
        </div>
  <div class="modal-footer">

  <button type="submit" onclick="desconto" class="btn btn-success btn-lg">CONFIRMAR </button>

</form>
  </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="receber" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">RECEBER</h4>
        </div>


                      <div class="esquerda">
                        <div id="paymentmethod"class="payment-method">
                        <ul id="ulpag">
               <li class="lipag" data-pgto="DINHEIRO">

                 <input name="pag" type="radio" class="radio hidden" value="DINHEIRO" id="DINHEIRO">
  <label class="label" for="dinheiro"> DINHEIRO</label>
               </li>

               <li class="lipag"  data-pgto="CREDITO">

                 <input name="pag" type="radio"  class="radio hidden"value="CREDITO" id="CREDITO">
                   <label class="label" for="credito">CRÉDITO</label>
               </li>

               <li class="lipag" data-pgto="DEBITO">

                 <input name="pag" type="radio"  class="radio hidden" value="DEBITO" id="DEBITO">
              <label class="label" for="debito">DEBITO</label>
               </li>
               <li class="lipag"  data-pgto="CHEQUE">

                 <input name="pag" type="radio"  class="radio hidden" value="CHEQUE" id="CHEQUE">
           <label class="label"for="cheque">  CHEQUE</label>
               </li>


             </ul>


  </div>
  <div id="cedulas" class="cedulas" style="display:none;">
<div class="buttons">


                <button class="btn btn-default btn-lg" value="2" onclick="dois(this);"><strong>R$ 2.00</strong> </button>
                <button  class="btn btn-default btn-lg" value="5"  onclick="cinco(this)"><strong>R$ 5.00 </strong></button>
                <button  class="btn btn-default btn-lg" value="10"  onclick="dez(this)"><strong>R$ 10.00 </strong></button>
                <button  class="btn btn-default btn-lg" value="20"  onclick="vinte(this)"><strong>R$ 20.00 </strong></button>
                      <button class="btn btn-default btn-lg" value="50"  onclick="cinquenta(this)"><strong>R$ 50.00</strong> </button>
                      <button  class="btn btn-default btn-lg" value="100"  onclick="cem(this)"><strong>R$ 100.00 </strong></button>
                        <button  class="btn btn-default btn-lg" value="0"  onclick="restante(this)"><strong>RESTANTE<br>R$ <?php echo $total - $desconto - number_format((float)$valorpago,2,'.',''); ?></strong></button>
                        <span>
                          </div>
  </div>
<div class="tabelavalorespagos  ">
  <table class="table table-condensed">
      <thead>

        <tr>


          <th>
          VALOR PAGO
          </th>
          <th>
          AÇÕES
          </th>
        </tr>

        <?php foreach($valorespago as $vl){ ?>
          <tr>


            <td> <?php echo $vl['valor'] ?></td>
<td>
  <span onclick="removepgto(<?php echo $vl['idcaixa'] ?>)" title="Excluir" class="btn btn-danger btn-xs"> Excluir</span>

</td>
          </tr>

        <?php }?>
      </thead>
    </table>
</div>
                      </div>

                      <div class="direita">


  <div class="totalvendamodal">
                          <span>Pago em: </span>
                          <span>Recebido </span>
                          <span>Troco </span>
  <span id="frm"> - </span>
  <span id="totalrecebido">R$ 0.00</span>
  <span id="troco">R$ 0.00</span>
                      </div>



                    </div>
                      <div class="modal-footer">

                                                      <form id="pagamento" action="" method="post">

                                                        <input type="hidden" name="descricao" value="PAGAMENTO MESA Nº <?php echo $pedidomesa['numeromesa']?> - Pedido: <?php echo $pedidomesa['idpedidomesa'] ?>">
                                                        <input type="hidden"  name="vlrpgto" value="" id="vlrpgto">
                                                        <input type="hidden" name="idpedidopagamento" value="<?php echo $pedidomesa['idpedidomesa']?>" id="idpedidopagamento">
                                                          <input type="hidden" name="totalvenda" value="<?php echo  number_format((float)$total,2,'.',''); ?>" id="totalvenda">
                                                        <input type="hidden" name="subtotalpagamento" value="<?php echo $total- $desconto  ?>" id="subtotalpagamento">
                                                          <input type="hidden" id="restante" name="restante" value="<?php echo $total - $desconto - number_format((float)$valorpago,2,'.',''); ?>">
                                                        <input type="hidden" value="" name="formapgtoselecionada" id="formapgtoselecionada">
                                                          <input type="hidden" value="<?php   date_default_timezone_set('America/Sao_Paulo');
                                                            echo date('d/m/Y');?>" name="data" id="data">
                                                        <input type="hidden" name="valorpago" value="<?php echo  number_format((float)$valorpago,2,'.',''); ?>" id="valorpago">
                                                        <input type="hidden" name="tipomovimentacao" value="1" id="tipomovimentacao">
                                                      <button type="submit" class="btn btn-success btn-lg">CONFIRMAR </button>
                                                      </form>

                      </div>

                    </div>
                  </div>
                </div>

</body>

    <script  src="<?php echo site_url('resources/js/index.js')?>"></script>
<script src="<?php echo site_url('resources/js/jquery.js');?>"></script>
<script src="<?php echo site_url('resources/js/jquery-ui-1.10.4.min.js');?>"></script>
  <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>


<script>

$(document).on('click', 'a', function(event) {

  var id = $(this).attr('idAcao');
  if(($id % 1) == 0){

      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>itenspedidomesa/remove",
        data: "iditenspedidomesa="+$id,
        dataType: 'json',
        success: function(data)
        {
          if(data.result == true){

              location.reload();

}
else{

alert('Ocorreu um erro ao tentar excluir serviço.');
}
        }
        });
        return false;
  }
});



 var vlrini =0;
 var troco = 0.00;
var countEl = document.getElementById("vlrpgto");
function dois(num){

var vlrpg = document.getElementById("vlrpgto");
var valorteste = Number(document.getElementById("vlrpgto").value);
 var dois = 2.00;

 var valor = Number(valorteste+dois);
 var val = valor.toFixed(2);
 var totalvenda = Number(document.getElementById("subtotalpagamento").value);
 var tol = totalvenda.toFixed(2);
 var troco = Number(val-tol);
 if(troco>"0"){
   var tr = troco.toFixed(2);
 }
 else {
   var tr=0.00;
 }


 vlrpg.value =valor.toFixed(2);;
 document.getElementById("troco").innerHTML = tr;


  document.getElementById("totalrecebido").innerHTML =  valor.toFixed(2);
}

function cinco(num){

var vlrpg = document.getElementById("vlrpgto");
var valorteste = Number(document.getElementById("vlrpgto").value);
 var dois = 5.00;

 var valor = Number(valorteste+dois);

 var val = valor.toFixed(2);
 var totalvenda = Number(document.getElementById("subtotalpagamento").value);
 var tol = totalvenda.toFixed(2);
 var troco = Number(val-tol);
 if(troco>"0"){
   var tr = troco.toFixed(2);
 }
 else {
   var tr=0.00;
 }


 vlrpg.value =valor.toFixed(2);;
 document.getElementById("troco").innerHTML = tr;

document.getElementById("totalrecebido").innerHTML =  valor.toFixed(2);
}
function dez(num){

var vlrpg = document.getElementById("vlrpgto");
var valorteste = Number(document.getElementById("vlrpgto").value);
 var dois = 10.00;

 var valor = Number(valorteste+dois);
 var val = valor.toFixed(2);
 var totalvenda = Number(document.getElementById("subtotalpagamento").value);
 var tol = totalvenda.toFixed(2);
 var troco = Number(val-tol);
 if(troco>"0"){
   var tr = troco.toFixed(2);
 }
 else {
   var tr=0.00;
 }


 vlrpg.value =valor.toFixed(2);;
 document.getElementById("troco").innerHTML = tr;

document.getElementById("totalrecebido").innerHTML =  valor.toFixed(2);

}


function vinte(num){

var vlrpg = document.getElementById("vlrpgto");
var valorteste = Number(document.getElementById("vlrpgto").value);
 var dois = 20.00;

 var valor = Number(valorteste+dois);
 var val = valor.toFixed(2);
 var totalvenda = Number(document.getElementById("subtotalpagamento").value);
 var tol = totalvenda.toFixed(2);
 var troco = Number(val-tol);
 if(troco>"0"){
   var tr = troco.toFixed(2);
 }
 else {
   var tr=0.00;
 }


 vlrpg.value =valor.toFixed(2);;
 document.getElementById("troco").innerHTML = tr;
document.getElementById("totalrecebido").innerHTML =  valor.toFixed(2);

}
function cinquenta(num){

var vlrpg = document.getElementById("vlrpgto");
var valorteste = Number(document.getElementById("vlrpgto").value);
 var dois = 50.00;

 var valor = Number(valorteste+dois);

 var val = valor.toFixed(2);
 var totalvenda = Number(document.getElementById("subtotalpagamento").value);
 var tol = totalvenda.toFixed(2);
 var troco = Number(val-tol);
 if(troco>"0"){
   var tr = troco.toFixed(2);
 }
 else {
   var tr=0.00;
 }


 vlrpg.value =valor.toFixed(2);;
 document.getElementById("troco").innerHTML = tr;
document.getElementById("totalrecebido").innerHTML =  valor.toFixed(2);
}

function cem(num){

var vlrpg = document.getElementById("vlrpgto");
var valorteste = Number(document.getElementById("vlrpgto").value);
 var dois = 100.00;

 var valor = Number(valorteste+dois);
var val = valor.toFixed(2);
var totalvenda = Number(document.getElementById("subtotalpagamento").value);
var tol = totalvenda.toFixed(2);
var troco = Number(val-tol);
if(troco>"0"){
  var tr = troco.toFixed(2);
}
else {
  var tr=0.00;
}


vlrpg.value =valor.toFixed(2);;
document.getElementById("troco").innerHTML = tr;

document.getElementById("totalrecebido").innerHTML = valor.toFixed(2);
}

function restante(num){
var pago = document.getElementById("vlrpgto");
  var vlrpg = Number(document.getElementById("restante").value);
  var val = vlrpg.toFixed(2);
  var totalvenda = Number(document.getElementById("subtotalpagamento").value);
  var tol = totalvenda.toFixed(2);
  var troco = Number(val-tol);
  if(troco>"0"){
    var tr = troco.toFixed(2);
  }
  else {
    var tr="0.00";
  }

  pago.value =vlrpg.toFixed(2);;
document.getElementById("troco").innerHTML = tr;
  document.getElementById("totalrecebido").innerHTML = val;
}

$('#modalprodutopedido').keypress(function(e) {

  if(e.wich == 13 || e.keyCode == 13){
//on('hidden.bs.modal', function () {





        var hora = document.getElementById("hora").value;

     var idpedido = document.getElementById("idpedido").value;
     var numeromesa = document.getElementById("numeromesa").value;
var qtdd = document.getElementById("qtdd").value;
var valordoitem = (qtdd*(Number(document.getElementById("vendaprodutoadicionado").value)));

var nomeprodutoadicionado = document.getElementById("nomeprodutoadicionado").value;
var insereadicional = '';
var insereobs = '';
var idprodutoadicionado = document.getElementById("idprodutoadicionado").value;

     var elems= document.getElementsByName('adicionais[]');
     var obser = document.getElementsByName('observacao[]');
     var nomeobs = document.getElementsByName('nomeobservacao[]');
       var nomeadd = document.getElementsByName('nomeadicional[]');
       var valoradd = document.getElementsByName('vendaadicional[]');
                     for (var i=0;i<elems.length;i++)
                     {

                         var isChecked =elems[i].checked;
                         if(isChecked==true){
                           var adicional = elems[i].value;
                           var nome = nomeadd[i].value;
                           insereadicional += '<br />&nbsp;&nbsp;&nbsp; + '+ nome;
                           valordoitem+=Number(valoradd[i].value);
                         //  var $this = $(this);
                         //  var pgto = elems[i].;
                           alert(nome);
                         }
                       //  console.log(isChecked);

                     }

                     for (var i=0;i<obser.length;i++)
                     {

                         var isChecked =obser[i].checked;
                         if(isChecked==true){
                           var adicional = elems[i].value;
                           var nome = nomeobs[i].value;
                           insereobs += '<br />&nbsp;&nbsp;&nbsp; - '+ nome;

                         //  var $this = $(this);
                         //  var pgto = elems[i].;
                           alert(nome);
                         }
                       //  console.log(isChecked);

                     }

'<br />teste';
  var tr = '<tr>'+
  '<td>'+hora+'</td>'+
    '<td>'+qtdd+'</td>'+
    '<td><strong>'+nomeprodutoadicionado+insereadicional+insereobs+'</strong></td>'+
    '<td><strong>'+valordoitem.toFixed(2)+'</strong></td>'+


    '<td></td>'




    '</tr>'
  $('#item').find('tbody').append( tr );



                  var hiddens =  '<input type="hidden" name="nomeproduto[]" value="'+nomeprodutoadicionado+insereadicional+insereobs+'" />'+

                    '<input type="hidden" name="hora[]" value="'+hora+'" />'+

                    '<input type="hidden" name="idpedido[]" value="'+idpedido+'" />'+
                    '<input type="hidden" name="vendaitem[]" value="'+valordoitem+'" />'+
                    '<input type="hidden" name="numeromesa[]" value="'+numeromesa+'" />'+
  '<input type="hidden" name="quantidade[]" value="'+qtdd+'" />'+
                    '<input type="hidden" name="idproduto[]" value="'+idprodutoadicionado+'" />';

                  $('#form_insert').find('fieldset').append( hiddens );
$('input:checkbox').removeAttr('checked');
  $("#qtdd").val("1");
    $('#modalprodutopedido').modal('hide');
  return false;
}

});



function removepgto(valor){

  $.ajax({
    type: "POST",
    url: "<?php echo base_url();?>pagamentopedidomesa/removepgto",
    data: "idpgto="+valor,
    dataType: 'json',
    success: function(data)
    {
      if(data.result == true){

          location.reload();

}
else{

alert('Ocorreu um erro ao tentar excluir serviço.');
}
    }
    });
    return false;
}



$('#excluirpedido').click(function(){


  var verificapgto = document.getElementById("valorpago").value;
if(verificapgto > 1){

var ok = "VENDA NÃO PODE SER CANCELA. EXISTE PAGAMENTO JÁ REALIZADO PARA ESSA VENDA";
alert(ok);

}
else{
var href = $(this).attr('href');
if(!$('#dataConfirmModal').length){
$('body').append('<div id="dataConfirmModal" class="modal fade" role="dialog" aria-labelledby="myModalLabel" tabindex="-1"aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button><h2 id="dataConfirmLabel">Pedido</h2></div><h2><div class="modal-body"></div></h2><div class="modal-footer"><a class="btn btn-success btn-lg col-lg-4" id="dataConfirmOK">SIM</a> <button  class="btn btn-danger btn-lg col-lg-4" data-dismiss="modal" aria-hidden="true">NÃO</button></div></div></div></div>');
}
$('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
$('#dataConfirmOK').attr('href',href);
$('#dataConfirmModal').modal({show:true});
return false;
}








});

$('#produto').autocomplete({

    source: "<?php echo base_url(); ?>produto/autoCompleteProduto",

    minLength: 2,

    select: function(event, ui) {



        $("#idproduto").val(ui.item.produto_id);

        $("#venda").val(ui.item.vendaproduto);
          $("#nomeproduto").val(ui.item.nomeproduto);
        //  $("#nomeprodutoadd").val(ui.item.nomeproduto);







    }

});


$('#formdesconto').submit(function(){

  var dados = $('#formdesconto').serialize();

$.ajax({
type: "POST",
url:"<?php echo base_url();?>pedidomesa/desconto",
data:dados,
dataType:'json',
success:function(data)
{

if(data.result == true){

location.reload();


// /$("#total").load("<?php echo current_url();?> #total" );


}

else{


location.reload();


}

}

});
return false;




});

$("#descontoporcentagem").blur(function(){

  var descontoporcentagem = Number(document.getElementById("descontoporcentagem").value);

  var totalvenda = Number(document.getElementById("totalvenda").value);

  var tol = totalvenda.toFixed(2)

  var vlrdesconto = (descontoporcentagem*totalvenda)/100;

$("#descontovalor").val(vlrdesconto.toFixed(2));

})

$('#pagamento').submit(function(){

  var dados = $('#pagamento').serialize();

$.ajax({
type: "POST",
url:"<?php echo base_url();?>pagamentopedidomesa/add",
data:dados,
dataType:'json',
success:function(data)
{

if(data.result == true){

  location.reload();

// /$("#total").load("<?php echo current_url();?> #total" );


}

else{


window.location.href="<?php echo base_url();?>pedidomesa/index";


}

}

});
return false;




});

$('#receber').on('hidden.bs.modal', function () {
  location.reload();
});
$('#ulpag li').click(function(){

  var $this = $(this);
  var pgto = $this.attr("data-pgto");

document.getElementById("frm").innerHTML = pgto;


                   $("#formapgtoselecionada").val(pgto);
                       document.getElementById("paymentmethod").style.display = 'none';
                   document.getElementById("cedulas").style.display = 'block';

})

$('#categorias li').click(function(){

 $('#produtolista').empty();
  var $this = $(this);
  var idcat = $this.attr("data-idcat");

  $.ajax({
  type: "POST",
  url:"<?php echo base_url();?>produto/buscaitemporcategoria",
  data:'idcategoria='+idcat,
  dataType:'json',
  success:function(data)
  {






    var len = data.length;



    if(len>0){
    for(var i=0; i<len; i++){

      var span = document.createElement("span");
       var span2 = document.createElement("span");
      span2.className =("category");
       span.className =("item");
       var produto = data[i].vendaproduto;
       var idpro = data[i].produto_id;
var name = data[i].nomeproduto;

      var li = document.createElement('li');
      document.getElementById('produtolista').appendChild(li);
li.setAttribute('data-nome',nomeproduto);
      li.appendChild(span);
     li.appendChild(span2);

      	//		li.innerHTML += name;
        span.innerHTML+=name;
span2.innerHTML+='R$ '+produto;

  //    var li = document.createElement("li");
  //  var ul = document.createElement("ul");
      var nome =document.createAttribute("data-nome");
      var venda =document.createAttribute("data-venda");
      var id =document.createAttribute("data-id");
li.setAttribute('data-nome',name);
li.setAttribute('data-venda',produto);
li.setAttribute('data-id',idpro);





    }




  }
}

  });
  return false;

//  alert(idcat);
})

/*ADICIONA PRODUTO / ADICIONAIS / OBSERVAÇÕES */
$( "#produtolista" ).on( "click", "li", function( ) {

var qtdd = document.getElementById("qtdd").value;
    var $this = $(this);
    var idproduto = $this.attr("data-id");
      var venda = $this.attr("data-venda");


var nomeproduto = $this.attr("data-nome");
document.getElementById("itemselecionado").innerHTML = nomeproduto;
document.getElementById("valoritemselecionado").innerHTML = 'R$ '+venda;
document.getElementById("qtdditemselecionado").innerHTML = 'Qtde: '+qtdd;
   document.getElementById('idprodutoadicionado').value = idproduto;

document.getElementById('vendaprodutoadicionado').value = venda;
document.getElementById('nomeprodutoadicionado').value = nomeproduto;



       var subtotal = (venda*qtdd).toFixed(2);
document.getElementById('subtotalitemadicionado').value = subtotal;

       $('#modalprodutopedido').modal('show');






    return false;
})


function sair() {
  var dados = $('#form_insert').serialize();

$.ajax({
type: "POST",
url:"<?php echo base_url();?>itenspedidomesa/addproduto",
data:dados,
dataType:'json',
success:function(data)
{

if(data.result == true){



window.location.href="<?php echo base_url();?>pedidomesa/index";
}

else{


location.reload();


}

}

});
return false;



}


$("#produto").keypress(function(e) {

  if(e.wich == 13 || e.keyCode == 13){




var idproduto = document.getElementById("idproduto").value;
var venda = document.getElementById("venda").value;
var qtdd = document.getElementById("qtdd").value;
//var garcom = document.getElementById("garcom").value;
      var hora = document.getElementById("hora").value;
    var nomeproduto = document.getElementById("nomeproduto").value;
   var idpedido = document.getElementById("idpedido").value;

var subtotal = (venda*qtdd).toFixed(2);
var tr = '<tr>'+
  '<td>'+qtdd+'</td>'+
  '<td><strong>'+nomeproduto+'</strong></td>'+
  '<td><strong>'+subtotal+'</strong></td>'+


  '<td></td>'




  '</tr>'
$('#item').find('tbody').append( tr );



                var hiddens =  '<input type="hidden" name="nomeproduto[]" value="'+nomeproduto+'" />'+

                  '<input type="hidden" name="hora[]" value="'+hora+'" />'+

                  '<input type="hidden" name="idpedido[]" value="'+idpedido+'" />'+
                  '<input type="hidden" name="vendaitem[]" value="'+venda+'" />'+
                  '<input type="hidden" name="numeromesa[]" value="'+numeromesa+'" />'+
'<input type="hidden" name="quantidade[]" value="'+qtdd+'" />'+
                  '<input type="hidden" name="idproduto[]" value="'+idproduto+'" />';

                $('#form_insert').find('fieldset').append( hiddens );

 $("#qtdd").val("1");


return false;
  }
$('#produto').focus();

  /* Act on the event */
});

$('.input-number-increment').click(function() {
  var $input = $(this).parents('.input-number-group').find('.input-number');
  var val = parseInt($input.val(), 10);
  $input.val(val + 1);
});

$('.input-number-decrement').click(function() {
  var $input = $(this).parents('.input-number-group').find('.input-number');
  var val = parseInt($input.val(), 10);
  $input.val(val - 1);
})



</script>

</html>
