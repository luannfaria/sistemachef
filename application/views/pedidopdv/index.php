<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>PDV</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">

  <link rel="stylesheet" href="<?php echo site_url('resources/css/jquery-ui-1.10.4.min.css');?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


      <link rel="stylesheet" href="<?php echo site_url('resources/css/stylepdv.css')?>">


</head>

<body>

  <div class="register">

  <div class="left">
    <div class="teste">

<div class="col-lg-6">
      <label for="idservico" class="control-label"><i class="fa fa-spinner"> </i> Produtos</label>
<input type="text" class="form-control  input-lg  required" name="produtobusca" id="produtobusca" onkeyup="somenteNumeros(this);" placeholder="Codigo de barras" required/>
</div>

      <input type="hidden" name="idproduto" id="idproduto" value=""/>
        <input type="hidden" id="idpdv" name="idpdv" value="<?php echo $pdv->idpedidopdv?>"/>


<?php date_default_timezone_set('America/Sao_Paulo'); ?>
<input type="hidden" name="hora" id="hora" value="<?php echo date('H:i') ;?>" />

<input type="hidden" name="venda" id="venda" />

<input type="hidden" name="totalvenda" id="totalvenda"/>
      <input type="hidden" name="nomeproduto" id="nomeproduto" />
        <input type="hidden" name="codbarra" id="codbarra" />
      <input type="hidden" name="quantidade" id="quantidade" value="1"/>
<div class="col-lg-2">
<span></span>
</div>

<div class="col-lg-3">

</div>


    </div>

    <div class="order-window">
      <table id="item">
        <tbody>
          <tr>
            <td>Cod barras</td>
            <td>Descrição</td>
            <td>Qtdd</td>
            <td>Total</td>
            <td>Ações</td>
          </tr>

          <?php $totalvenda=0;  foreach ($itenspdv as $it) { $totalitem=0;
  ?>
            <tr>
                <td><?php echo $it['codbarra']; ?></td>
          <td><?php echo $it['nomeproduto']; ?></td>
          <td><?php echo $it['quantidade']; ?></td>
          <td>R$ <?php echo number_format(($it['valor']*$it['quantidade']), 2, '.', '.')?></td>
<td><span idAcao="<?php echo $it['iditenspedidodelivery'] ; ?>" title="Excluir" class="btn btn-danger btn-xs"> Excluir</span></td>
          </tr>

<?php } ?>

        </tbody>
      </table>
    </div>
    <div class="payment-keys">
      <ul>
        <li href="#receber" data-toggle="modal">

          <i class="fas fa-money-bill-alt fa-2x fa-fw" data-fa-transform="up-2"></i> Receber

        </li>
        <li  href="#desconto" data-toggle="modal">
          <i class="fas fa-cart-arrow-down fa-2x fa-fw" data-fa-transform="up-2"></i> Desconto
        </li>
        <li>
          <i class="fas fa-print fa-2x fa-fw" data-fa-transform="up-2"></i> Imprimir
        </li>
        <li  href="<?php echo site_url('pedidopdv/remove/'.$pdv->idpedidopdv); ?>" id="excluirpedido" data-confirm="Tem certeza que deseja excluir essa mesa?"  >

          <i class="fas fa-times fa-2x fa-fw"  ></i> Cancelar venda
        </li>

      </ul>
    </div>

    <div class="buttons">
    </div>
  </div>
  <div class="right">

    <div class="teste2">
      <span>
      <H3 style="text-align: center"><?php echo date('d/m/Y'); ?></H3>
      </span>
      <span>

<h3 style="text-align: center"> <div id="real-clock"></DIV></h3>


        </span>


<span><h3 style="text-align: center">Nº: <?php echo $pdv->idpedidopdv; ?> </h3>
</span>
    </div>

    <div id="todos" class="menu-items">

          <span>



<h3> Cliente</h3>
            <input type="text" class="form-control required" name="cliente" id="cliente" placeholder="Digite o nome do cliente"  onfocus="this.value=''" required/>
          </span>
          <span>
<div class="cliente" id="listnome"></div>
 <div class="cliente" id="listfixo"></div>
                        <input type="hidden" class="form-control" name="nomecliente" id="nomecliente">
                          <input type="hidden" class="form-control" name="telfixo" id="telfixo">
                            <input type="hidden" class="form-control" name="celular" id="celular">
                              <input type="hidden" class="form-control" name="rua" id="rua">
                                <input type="hidden" class="form-control" name="numero" id="numero">
                                <input type="hidden" class="form-control" name="idclientes" id="idclientes">
          </span>
          <span> </span>
          <span>



          </span>
          <span></span>
    </div>
    <div  class="pgtorecebido">

      <table class="table table-bordered">
        <tbody>
          <tr>
            <td style="align-tex">Valor</td>
  <td style="align-tex">Tipo</td>
    <td style="align-tex">Excluir</td>
          </tr>

          <?php foreach ($formpago as $pg){?>
            <tr>
              <td style="align-tex"><?php echo $pg['valor']?></td>
                <td style="align-tex"><?php echo $pg['formapgto']?></td>
                    <td style="align-tex"><?php echo $pg['idpagamentopedidomesa']?></td>

            </tr>

          <?php }?>
        </tbody>
      </table>
  </div>
    <div id="total"class="totalizador">

      <?php
          $idpedido = $pdv->idpedidopdv;
       $this->load->helper("funcoes");
       $troco =0;
       $desconto=0;
      $total = subtotalpdv($idpedido);
  //  $valortaxa = valortaxa($idpedido);
  $valorpago = pagopdv($idpedido);
  $itens = countitens($idpedido);
  $desconto = valordesconto($idpedido);
      ?>
      <span><strong>Itens <?php echo $itens ?> </strong></span>
        <span><strong>Pago R$ <?php echo  number_format((float)$valorpago,2,'.','') ?> </strong></span>
<span><strong>Desconto R$  <?php echo  number_format((float)$desconto,2,'.','') ?> </strong></span>
      <span><strong>Total R$ <?php echo  number_format((float)$total,2,'.','') ?></strong></span>
    </div>
    <form id="form_insert" action="" method="post">

            <fieldset style="display: none;"></fieldset>

          </form>




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
<input type="hidden" name="formdescontoid" value="<?php echo $pdv->idpedidopdv ?>">
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
                        <div class="payment-method">
                        <ul id="ulpag">
               <li class="lipag" data-pgto="dinheiro">

                 <input name="pag" type="radio" class="radio hidden" value="DINHEIRO" id="dinheiro">
<label class="label" for="dinheiro"> DINHEIRO</label>
               </li>

               <li class="lipag"  data-pgto="credito">

                 <input name="pag" type="radio"  class="radio hidden"value="CREDITO" id="credito">
                   <label class="label" for="credito">CRÉDITO</label>
               </li>

               <li class="lipag" data-pgto="debito">

                 <input name="pag" type="radio"  class="radio hidden" value="DEBITO" id="debito">
              <label class="label" for="debito">DEBITO</label>
               </li>
               <li class="lipag"  data-pgto="cheque">

                 <input name="pag" type="radio"  class="radio hidden" value="CHEQUE" id="cheque">
           <label class="label"for="cheque">  CHEQUE</label>
               </li>

            <!--   <li class="lipag"  data-pgto="fiado">

                 <input name="pag" type="radio"  class="radio hidden"value="fiado" id="fiado">
            <label class="label" for="fiado">  PRAZO</label>
          </li>!-->
             </ul>


</div>
<div id="cedulas" class="cedulas" style="visibility:hidden;">

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
                      <div class="direita">


<div class="totalvendamodal">
                          <span>Pago em: </span>
                          <span>Recebido </span>
                          <span>Troco </span>
<span id="frm"></span>
 <span id="totalrecebido">R$ 0.00</span>
 <span id="troco">R$ 0.00</span>
                      </div>



                    </div>
                      <div class="modal-footer">

                                                      <form id="pagamento" action="" method="post">

                                                        <input type="hidden" name="descricao" value="PAGAMENTO VENDA PDV Nº <?php echo $pdv->idpedidopdv ?>">
                                                        <input type="hidden"  name="vlrpgto" value="" id="vlrpgto">
                                                        <input type="hidden" name="idpedidopagamento" value="<?php echo $pdv->idpedidopdv?>" id="idpedidopagamento">
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
<script src="<?php echo site_url('resources/js/maskmoney.js');?>"></script>

<script>
$('#receber').on('hidden.bs.modal', function () {
    location.reload();
})

var clock = document.getElementById('real-clock');


  setInterval(function () {
      clock.innerHTML = ((new Date).toLocaleString().substr(11, 8));
  }, 1000);



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
 document.getElementById("troco").innerHTML = 'R$ '+tr;


  document.getElementById("totalrecebido").innerHTML = 'R$ '+ valor.toFixed(2);
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
 document.getElementById("troco").innerHTML ='R$ '+ tr;

document.getElementById("totalrecebido").innerHTML = 'R$ '+ valor.toFixed(2);
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
 document.getElementById("troco").innerHTML ='R$ '+ tr;

document.getElementById("totalrecebido").innerHTML = 'R$ '+ valor.toFixed(2);

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
$("#descontoporcentagem").blur(function(){

  var descontoporcentagem = Number(document.getElementById("descontoporcentagem").value);

  var totalvenda = Number(document.getElementById("subtotalpagamento").value);

  var tol = totalvenda.toFixed(2)

  var vlrdesconto = (descontoporcentagem*totalvenda)/100;

$("#descontovalor").val(vlrdesconto.toFixed(2));

})

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
 document.getElementById("troco").innerHTML ='R$ '+ tr;
document.getElementById("totalrecebido").innerHTML = 'R$ '+ valor.toFixed(2);

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
 document.getElementById("troco").innerHTML ='R$ '+ tr;
document.getElementById("totalrecebido").innerHTML ='R$ '+  valor.toFixed(2);
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
document.getElementById("troco").innerHTML ='R$ '+ tr;

document.getElementById("totalrecebido").innerHTML ='R$ '+ valor.toFixed(2);
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
document.getElementById("troco").innerHTML = 'R$ '+tr;
  document.getElementById("totalrecebido").innerHTML = 'R$ '+val;
}

function ok(){


  var idpedidopdv = document.getElementById("idpedido").value;
    //var venda = $this.attr("data-venda");

  $.ajax({
  type: "POST",
  url:"<?php echo base_url();?>pedidopdv/excluirpedido",
  data:"idpedidopdv="+idpedidopdv,
  dataType:'json',
  success:function(data)
  {

  if(data.result == true){

window.location.href="<?php echo base_url();?>pedidopdv/index";
  }

  else{


  location.reload();


  }

  }

  });
  return false;

}

$("#produto").autocomplete({

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
url:"<?php echo base_url();?>pedidopdv/desconto",
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

$('#pagamento').submit(function(){

  var dados = $('#pagamento').serialize();

$.ajax({
type: "POST",
url:"<?php echo base_url();?>pagamentopedidopdv/add",
data:dados,
dataType:'json',
success:function(data)
{

if(data.result == true){

window.location.href="<?php echo base_url();?>pedidopdv/index";


// /$("#total").load("<?php echo current_url();?> #total" );


}

else{


location.reload();


}

}

});
return false;




});


$('#ulpag li').click(function(){

  var $this = $(this);
  var pgto = $this.attr("data-pgto");


document.getElementById("frm").innerHTML = pgto;

                   $("#formapgtoselecionada").val(pgto);

                   document.getElementById("cedulas").style.visibility = 'visible';

})


$('#produtolista li').click(function(){
    var $this = $(this);
    var idproduto = $this.attr("data-id");
      var venda = $this.attr("data-venda");
//    alert('Text ' + $this.text() + 'value ' + selKeyVal);

var nomeproduto = $this.attr("data-nome");
  //  var idproduto = document.getElementById("idproduto").value;
//    var venda = document.getElementById("venda").value;
    var qtdd = document.getElementById("qtdd").value;
    //var garcom = document.getElementById("garcom").value;
          var hora = document.getElementById("hora").value;
    //    var nomeproduto = document.getElementById("nomeproduto").value;
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
    '<input type="hidden" name="totalitem[]" value="'+subtotal+'" />'+
                      '<input type="hidden" name="idproduto[]" value="'+idproduto+'" />';

                    $('#form_insert').find('fieldset').append( hiddens );



                 $("#qtdd").val("1");

    return false;
})




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
                     '<input type="hidden" name="totalitem[]" value="'+subtotal+'" />'+
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

$("#produtobusca").keypress(function(e){


  	if(e.wich == 13 || e.keyCode == 13){


    //var codbarra = $this.find("input[name='codbarra']").val();
     var verifica = document.getElementById("produtobusca").value;
        if(verifica.length>13){
            var string =verifica.split("*");
            var codbarra = string[1];
            var qtdd= string[0];


        }

        else{
            var codbarra = verifica;
            var qtdd=1
        }
     idpdv = document.getElementById("idpdv").value;
    $.ajax({
    type: "POST",
    url:"<?php echo base_url();?>produto/getproduto",
    data:"codbarra="+codbarra,
    dataType:'json',
    success:function(data)
    {
 var len = data.length;
 if(len>0){
 for(var i=0; i<len; i++){
                 var id = data[i].produto_id;
                 var nomeproduto = data[i].nomeproduto;
                 var venda = data[i].vendaproduto;
                 var cod = data[i].codbarra;
                var quantidade =qtdd;


               }

var subtotal = (venda*quantidade).toFixed(2);
               var hiddens =  '<input type="hidden" name="nomeproduto" value="'+nomeproduto+'" />'+
               '<input type="hidden" name="quantidade" value="'+quantidade+'" />'+
'<input type="hidden" name="codbarra" value="'+cod+'" />'+
               '<input type="hidden" name="idpedidopdv" value="'+idpdv+'" />'+
                 '<input type="hidden" name="valor" value="'+venda+'" />'+
 '<input type="hidden" name="totalitem" value="'+subtotal+'" />'+
                 '<input type="hidden" name="produto_id" value="'+id+'" />';


                 var dados = $(hiddens).serialize();
                 $.ajax({
                 type: "POST",
                 url:"<?php echo base_url();?>itenspedidopdv/add",
                 data:dados,
                 dataType:'json',
                 success:function(data)
                 {

                   if(data.result == true){
                     window.location.reload();
                     $('#produto').focus();
                 //    $( "#painelvenda" ).load("<?php echo current_url();?> #painelvenda" );
                 //    $('#form_prepare').trigger("reset");
                 //  $( "#form_prepare" ).load("<?php echo current_url();?> #form_prepare" );




                   }
                   else{
                       alert('Ocorreu um erro ao tentar adicionar serviço.');
                   }

                 }

                 });
return false;
    }
    else{

      alert('NENHUM ITEM ENCONTRADO');
      window.location.reload();
    }
}
    });

return false;
}

});

function somenteNumeros (num) {
		var er = /[^0-9.*]/;
		er.lastIndex = 0;
		var campo = num;
		if (er.test(campo.value)) {
		campo.value = "";
		}
	}
  $("#cliente").autocomplete({

      source: "<?php echo base_url(); ?>cliente/autoCompleteCliente",

      minLength: 2,

      select: function(event, ui) {



          $("#idclientes").val(ui.item.idclientes);
        //  $("#nome").val(ui.item.nome);


          $("#nomecliente").val(ui.item.nomecliente);
          $("#telfixo").val(ui.item.telfixo);
          $("#celular").val(ui.item.celular);
          $("#rua").val(ui.item.rua);
          $("#numero").val(ui.item.numero);
  var nomecliente = document.getElementById("nomecliente").value;
  var telfixo = document.getElementById("telfixo").value;
  var celular = document.getElementById("celular").value;
  var rua = document.getElementById("rua").value;
  var numero = document.getElementById("numero").value;


  document.getElementById("listnome").innerHTML ='Cliente: '+nomecliente;
  document.getElementById("listfixo").innerHTML ='Fone: ' +telfixo+' Celular: '+celular;
  //document.getElementById("listcelular").innerHTML = celular;
//  document.getElementById("listrua").innerHTML = rua.' '.numero;

      }

  });

  $('#descontovalor').maskMoney();
$(document).on('click', 'span', function(event) {
            var $id = $(this).attr('idAcao');
            if(($id % 1) == 0){

                $.ajax({
                  type: "POST",
                  url: "<?php echo base_url();?>itenspedidopdv/remove",
                  data: "iditenspedidodelivery="+$id,
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



</script>
  <a href="#notification" id="call-modal" role="button" class="btn" data-toggle="modal" style="display: none ">notification</a>




<div class="modal" id="notification" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4>Log Out <i class="fa fa-lock"></i></h4>
      </div>
      <div class="modal-body">
        <p><i class="fa fa-question-circle"></i> Are you sure you want to log-off? <br /></p>
        <div class="actionsBtns">
            <form action="<?php echo site_url('pedidopdv/remove/'.$pdv->idpedidopdv); ?>"  method="post">

                <input type="submit" class="btn btn-default btn-primary" data-dismiss="modal" value="Logout" />
	                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
</html>
