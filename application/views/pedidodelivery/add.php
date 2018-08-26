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


      <link rel="stylesheet" href="<?php echo site_url('resources/css/styledelivery.css')?>">


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

            <td>Descrição</td>
            <td>Qtdd</td>
            <td>Total</td>
            <td>Ações</td>
          </tr>






        </tbody>
      </table>
    </div>
    <div class="payment-keys">
      <ul>

        <li href="#receber" data-toggle="modal">

          <i class="fas fa-money-bill-alt fa-2x fa-fw" data-fa-transform="up-2"></i> Receber

        </li>
        <li  href="#modaldesconto" data-toggle="modal">
          <i class="fas fa-cart-arrow-down fa-2x fa-fw" data-fa-transform="up-2"></i> Desconto
        </li>
        <li>
          <i class="fas fa-print fa-2x fa-fw" data-fa-transform="up-2"></i> Imprimir
        </li>

        <li href="#produtos" data-toggle="modal">

          <i class="fas fa-money-bill-alt fa-2x fa-fw" data-fa-transform="up-2"></i> Produtos
  <input  type="hidden" id="qtdd"value="1" min="0" max="1000">
        </li>
        <li  href="" id="excluirpedido" data-confirm="Tem certeza que deseja excluir essa mesa?"  >

          <i class="fas fa-times fa-2x fa-fw"  ></i> Cancelar venda
        </li>

      </ul>
    </div>

    <div class="buttons">
    </div>
  </div>
  <div class="right">



    <div id="todos" class="menu-items">
<span>
  <h4>Cliente</h4>



            <div class="form-group">
            <div class="col-md-6">
  <label class="control-label" for="nome">Telefone</label>
            <input type="text" class="form-control" name="cliente" id="cliente" >
          </div>




          <div class="col-md-10">
            <label class="control-label" for="nome">Nome</label>
            <input type="text" class="form-control" name="nomecliente" id="nomecliente">
          </div>

        <div class="col-md-4">
<label class="control-label" for="nome">Tel Fixo</label>
        <input type="text" class="form-control" name="telfixo" id="telfixo" >
      </div>

    <div class="col-md-4">
<label class="control-label" for="nome">Celular</label>
    <input type="text" class="form-control" name="celular" id="celular"  >
  </div>
  <div class="col-md-4">
<label class="control-label" for="nome">Recado</label>
  <input type="text" class="form-control" name="cliente" id="cliente" >
</div>

        <div class="col-md-8">
          <label class="control-label" for="nome">Rua</label>
          <input type="text" class="form-control" name="rua" id="rua">
        </div>

      <div class="col-md-2">
        <label class="control-label" for="nome">Nº</label>
        <input type="text" class="form-control" name="numero" id="numero">
      </div>

      <div class="col-md-6">
        <label class="control-label" for="nome">Bairro</label>
        <input type="text" class="form-control" name="bairro" id="bairro">
      </div>

      <div class="col-md-10">
        <label class="control-label" for="nome">Complemento</label>
        <input type="text" class="form-control" name="complemento" id="complemento">
      </div>
    </div>
    <input type="hidden" class="form-control" name="idclientes" id="idclientes">


</span>


<span>


<h4>Outras informações</h4>


<div class="form-group">
  <div class="col-md-6">
  <label for="tipoentrega">Tipo entrega</label>
  <select class="form-control"  id="tipoentrega">
    <option>Entregar no endereço</option>
    <option>Retirar no balcão</option>
    <option>Consumir no loccal</option>

  </select>

</div>

  <div class="col-md-6">
  <label for="vlrtx">Taxa entrega</label>
  <select id="vlrtx"name="vlrtx" class="form-control" required>
    <option value="">SELECIONE</option>
    <?php
    foreach($taxaentrega as $tx)
    {
      $selected = ($tx['idtaxaentrega'] == $this->input->post('idtaxaentrega')) ? ' selected="selected"' : "";

      echo '<option value="'.$tx['valor'].'" '.$selected.'>'.$tx['nome'].' R$: '.$tx['valor'].'</option>';
    }
    ?>
  </select>
</div>
</div>

</span>
    </div>

    <div id="total"class="totalizador">


      <span><div id="itensdelivery">
Subtotal R$ 0.00
      </div></span>
        <span><div id="entregadelivery">
Entrega R$ 0.00
        </div></span>
<span><div id="descontodelivery">
Desconto R$ 0.00
</div></span>
      <span><div id="totaldelivery">
Total R$ 0.00
      </div></span>
    </div>
    <form id="form_insert" action="" method="post">

            <fieldset style="display: none;"></fieldset>

          </form>




</div>




</div>

<div class="modal fade" id="modaldesconto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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


<input type="hidden" class="form-control  input-lg"  name="formdescontovalor" id="formdescontovalor" >
      <input type="text" class="form-control  input-lg"  name="descontovalor" id="descontovalor" value="">
</div>
</span>
        </div>
  <div class="modal-footer">




  </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="produtos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Produtos</h4>

            <input type="hidden" id="vendaprodutoadicionado" value="" />
            <input type="hidden" id="nomeprodutoadicionado" value=""/>
            <input type="hidden" id="idprodutoadicionado" value=""/>
            <input type="hidden" id="subtotalitemadicionado" value=""/>

                <div class="categories">


                  <ul id="categorias">
                    <?php foreach($categoria as $cat) {?>
                    <li data-idcat=<?php echo $cat['idcategoria']?>><a><?php echo $cat['nomecategoria']?></a></li>
                  <?php } ?>
                  </ul>
                </div>

<div class="produtosmodal">
  <ul id="produtolista">



  </ul>
</div>



          </div>
        </div>
      </div>
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
                        <button  class="btn btn-default btn-lg" value="0"  onclick="restante(this)"><strong>RESTANTE<br>R$ </strong></button>
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
<input type="hidden"  name="vlrtotaldelivery" value="" id="vlrtotaldelivery">
                                                        <input type="hidden" name="descricao" value="PAGAMENTO PEDIDO DELIVERY Nº ">
                                                        <input type="hidden"  name="vlrpgto" value="" id="vlrpgto">
                                                          <input type="hidden" name="subtotaldelivery" value="" id="subtotaldelivery">
                                                        <input type="hidden" name="idpedidopagamento" value="" id="idpedidopagamento">
                                                        <input type="hidden" name="subtotalpagamento" value="" id="subtotalpagamento">
                                                          <input type="hidden" id="restante" name="restante" value="">
                                                        <input type="hidden" value="" name="formapgtoselecionada" id="formapgtoselecionada">
                                                          <input type="hidden" value="<?php   date_default_timezone_set('America/Sao_Paulo');
                                                            echo date('d/m/Y');?>" name="data" id="data">
                                                        <input type="hidden" name="valorpago" value="" id="valorpago">
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

$('#vlrtx').change(function(){

  var vlrtot = document.getElementById("vlrtotaldelivery");
  var vlrtotdeliv = Number(document.getElementById("vlrtotaldelivery").value);
  var deci = Number(vlrtotdeliv).toFixed(2);
var entrega = $(this).val();

  vlrtot.value = (parseFloat(deci)+parseFloat(entrega));

  var tot = (parseFloat(deci)+parseFloat(entrega));

    document.getElementById("totaldelivery").innerHTML ='Total R$ '+ tot.toFixed(2);

  document.getElementById("entregadelivery").innerHTML ='Entrega R$ '+entrega.toFixed(2);
//var vlrtotal = document.getElementById("vlrtotaldelivery");




//document.getElementById("totaldelivery").innerHTML ='Total R$ '+vlrtotal;
        alert($(this).val());
    })
$('#modalprodutopedido').keypress(function(e) {

  if(e.wich == 13 || e.keyCode == 13){
//on('hidden.bs.modal', function () {






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

  '<td><strong>'+nomeprodutoadicionado+insereadicional+insereobs+'</strong></td>'+
    '<td>'+qtdd+'</td>'+

    '<td><strong>'+valordoitem.toFixed(2)+'</strong></td>'+


    '<td></td>'




    '</tr>'
  $('#item').find('tbody').append( tr );


var vlrtot = document.getElementById("vlrtotaldelivery");
var vlrtotdeliv = Number(document.getElementById("vlrtotaldelivery").value);
  var subt = document.getElementById("subtotaldelivery");
  var vlrsubt = Number(document.getElementById("subtotaldelivery").value);

vlrtot.value = (vlrtotdeliv+valordoitem);
  subt.value = (vlrsubt+valordoitem);
var subtotal = (vlrsubt+valordoitem);
var tot = (vlrtotdeliv+valordoitem);

  document.getElementById("itensdelivery").innerHTML ='Subtotal R$ '+ subtotal.toFixed(2);
  document.getElementById("totaldelivery").innerHTML ='Total R$ '+ tot.toFixed(2);

                  var hiddens =  '<input type="hidden" name="nomeproduto[]" value="'+nomeprodutoadicionado+insereadicional+insereobs+'" />'+

                    '<input type="hidden" name="vendaitem[]" value="'+valordoitem+'" />'+

  '<input type="hidden" name="quantidade[]" value="'+qtdd+'" />'+
                    '<input type="hidden" name="idproduto[]" value="'+idprodutoadicionado+'" />';

                  $('#form_insert').find('fieldset').append( hiddens );

                //  document.getElementById("totalpedido").innerHTML = (valordoitem+valorvenda).toFixed(2);
$('input:checkbox').removeAttr('checked');
  $("#qtdd").val("1");
    $('#modalprodutopedido').modal('hide');
  return false;
}

});
$('#receber').on('hidden.bs.modal', function () {
    location.reload();
})





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
$('#modaldesconto').keypress(function(e) {

  if(e.wich == 13 || e.keyCode == 13){
$('#modaldesconto').modal('hide');
  }
})


$("#descontoporcentagem").blur(function(){

  var descontoporcentagem = Number(document.getElementById("descontoporcentagem").value);
var tovlr =  Number(document.getElementById("vlrtotaldelivery"));
  var vlrtotdeliv = Number(document.getElementById("vlrtotaldelivery").value);
  var totalvenda = Number(vlrtotdeliv).toFixed(2);
  var vlrdesconto = (descontoporcentagem*vlrtotdeliv)/100;

tovlr.value =  (parseFloat(totalvenda)-parseFloat(vlrdesconto.toFixed(2)));
var total = (parseFloat(totalvenda)-parseFloat(vlrdesconto.toFixed(2)));


$("#descontovalor").val(vlrdesconto.toFixed(2));

document.getElementById("descontodelivery").innerHTML = 'Desconto R$ '+vlrdesconto.toFixed(2);
document.getElementById("totaldelivery").innerHTML = 'Total R$ '+total.toFixed(2);

});

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


 vlrpg.value =valor.toFixed(2);
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
  $('#cliente').autocomplete({

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


  //ocument.getElementById("listnome").innerHTML ='Cliente: '+nomecliente;
//  document.getElementById("listfixo").innerHTML ='Fone: ' +telfixo+' Celular: '+celular;
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
            <form action=""  method="post">

                <input type="submit" class="btn btn-default btn-primary" data-dismiss="modal" value="Logout" />
	                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
</html>
