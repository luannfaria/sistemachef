

<section id="pedidomesadiv" class="invoice">
     <!-- title row -->
     <div class="row">
       <div class="col-xs-12">
         <h2 class="page-header">
           <i class="fa fa-cutlery"></i> Mesa  <?php echo $pedidomesa['numeromesa'] ?>
           <small class="pull-right">Pedido nº <?php echo $pedidomesa['idpedidomesa'] ?></small>
         </h2>
       </div>
       <!-- /.col -->
     </div>

     <div class="row invoice-info">
             <div class="col-sm-5 invoice-col">
               From
               <address>
                 <strong>Admin, Inc.</strong><br>

               </address>
             </div>



           <div class="col-sm-7 invoice-col">

             <div class="form-group">
               <label for="idservico" class="control-label"><i class="fa fa-spinner"> </i> Produtos</label>

               <input type="text" class="form-control input-lg  required" name="produto" id="produto"  placeholder="Digite o nome do produto" required/>

               <input type="hidden" name="idproduto" id="idproduto" value=""/>



   <?php date_default_timezone_set('America/Sao_Paulo'); ?>
   <input type="hidden" name="hora" id="hora" value="<?php echo date('H:i') ;?>" />

               <input type="hidden" name="nomeproduto" id="nomeproduto" />
               <input type="hidden" name="venda" id="venda" />
                 <input type="hidden" name="idpedido" id="idpedido" value="<?php echo $pedidomesa['idpedidomesa']?>" />


                     <input type="hidden" name="numeromesa" id="numeromesa" value="<?php echo  $pedidomesa['numeromesa'] ?>"/>
                   </div>
        </div>



         </div>

         <div class="row">
           <div class="mesa">
        <div class="col-xs-12 table-responsive">
          <table id="item" class="table table-striped">
            <thead>
            <tr>
              <th>Hora</th>
              <th>Garçom</th>
              <th>Produto</th>

              <th>Qtdd</th>
              <th>Subtotal</th>
              <th>Ações</th>
            </tr>
            </thead>
            <tbody >

              <?php foreach($itenspedidomesa as $item){ ?>

                <tr>
        <td><?php echo $item['horapedidoitem']; ?></td>
        <td></td>
        <td><?php echo $item['nomeitem']; ?></td>
        <td><?php echo $item['preco']; ?></td>
  <td><?php echo $item['quantidade']; ?></td>
    <td><?php echo $item['preco']; ?></td>

    <td></td>
      </tr>

              <?php } ?>

          </tbody>
        </table>
      </div>
    </div>
    </div>

    <div id="final" class="row">
        <!-- accepted payments column -->
        <div class="col-xs-7">
          <p class="lead"></p>
          <br>
          <div class="form-group">

        <a class="btn btn-app"  onclick="showDiv();"><i class="fa fa-edit">Dinheiro</i>
                    <input type="radio"  value="dinheiro"  name="pag" id="dinheiro">
            </a>
                       <a class="btn btn-app" onclick="showDiv();" value="credito">
                                      <i class="fa fa-edit"> Crédito </i>

                        </a>
                        <a class="btn btn-app"  >
                          <label for="debito">
                                                   <i class="fa fa-edit">  </i>
                                                     <input type="radio" value="debito"  name="pag" id="debito">
                                              Débito     </label>
                        </a>

                        <a class="btn btn-app" onclick="showDiv();">
                                                   <i class="fa fa-edit"> Cheque </i>

                        </a>

                        <a class="btn btn-app" onclick="showDiv();" >
                                                   <i class="fa fa-edit"> Fiado </i>
                                                     <input type="radio" value="fiado"  name="pag" id="fiado">
                        </a>

                        <div id="cedulas" style="display:none;">

                                        <button class="btn btn-default btn-lg" value="2" onclick="dois(this);"><strong>R$ 2.00</strong> </button>
                                        <button  class="btn btn-default btn-lg" value="5"  onclick="cinco(this)"><strong>R$ 5.00 </strong></button>
                                        <button  class="btn btn-default btn-lg" value="10"  onclick="dez(this)"><strong>R$ 10.00 </strong></button>
                                        <button  class="btn btn-default btn-lg" value="20"  onclick="vinte(this)"><strong>R$ 20.00 </strong></button>
                                              <button class="btn btn-default btn-lg" value="50"  onclick="cinquenta(this)"><strong>R$ 50.00</strong> </button>
                                              <button  class="btn btn-default btn-lg" value="100"  onclick="cem(this)"><strong>R$ 100.00 </strong></button>
                        </div>
                        <h3 style="margin-left:60px;">Recebido R$ <span id="myText"></span>
                          <input type="hidden" class="form-controL" name="vlrpgto" value="0" id="vlrpgto"/>
 <button type="button" onclick="pagar(this);" value="2" class="btn btn-success pull-right" style="margin-right: 250px;">
   <i class="fa fa-download"></i> RECEBER
</button>
</h3>
        </div>
      </div>

        <div class="col-xs-2">

<br>
<button type="button" class="btn btn-block btn-warning">Desconto</button>
<button type="button" class="btn btn-block btn-danger">Excluir</button>
  <button type="button"  class="btn btn-block btn-primary">Imprimir</button>
<button type="button" class="btn btn-block btn-info">Trocar mesa</button>
        </div>


        <div class="col-xs-3">

        <form id="form_insert" action="" method="post">

                <fieldset style="display: none;"></fieldset>

              </form>
         <p class="lead"></p>

         <div class="table-responsive">
           <table class="table">
             <tr>
               <th style="width:60%">Subtotal:</th>
               <td>R$
<?php
    $idpedido =$pedidomesa['idpedidomesa'];
 $this->load->helper("funcoes");

$sub = subtotal($idpedido);
echo subtotal($idpedido);
?>
               </td>
             </tr>
             <tr>
               <th>Serviço (<?php echo $empresa['taxaservico']?>%)</th>
               <td>R$
<?php $taxa = ($sub*$empresa['taxaservico'])/100;

echo number_format($taxa, 2, '.', '.');

?>
               </td>
             </tr>
             <tr>
               <th>Desconto:</th>
               <td></td>
             </tr>
             <tr>
               <th style="width:40%"><h4>Total:</h4></th>
               <td><h4>R$ <?php echo number_format(($sub+$taxa), 2, '.', '.')  ?></h4></td>
             </tr>
           </table>
         </div>
       </div>

      </div>


   </section>
   <script src="<?php echo site_url('resources/js/jquery.js');?>"></script>
  <script src="<?php echo site_url('resources/js/jquery-ui-1.10.4.min.js');?>"></script>
<script>


function pagar(num){






 alert(radioValue);

}

//$("input[type='radio']").click(function(){
//document.getElementById("cedulas").style.display = 'block';
//     $('#vlrpgto').focus();
//});



function showDiv() {
   document.getElementById('cedulas').style.display = "block";


 var radio = $this.find("input[type='radio']:checked").value;

  alert(radio);
}



 var vlrini =0;
var countEl = document.getElementById("vlrpgto");
function dois(num){

var vlrpg = document.getElementById("vlrpgto");
var valorteste = Number(document.getElementById("vlrpgto").value);
 var dois = 2;

 var valor = Number(valorteste+dois);


vlrpg.value =valor.toFixed(2);

document.getElementById("myText").innerHTML = valor.toFixed(2);


}

function cinco(num){

var vlrpg = document.getElementById("vlrpgto");
var valorteste = Number(document.getElementById("vlrpgto").value);
 var dois = 5;

 var valor = Number(valorteste+dois);


 vlrpg.value =valor.toFixed(2);

 document.getElementById("myText").innerHTML = valor.toFixed(2);



}
function dez(num){

var vlrpg = document.getElementById("vlrpgto");
var valorteste = Number(document.getElementById("vlrpgto").value);
 var dois = 10;

 var valor = Number(valorteste+dois);


 vlrpg.value =valor.toFixed(2);

 document.getElementById("myText").innerHTML = valor.toFixed(2);
}


function vinte(num){

var vlrpg = document.getElementById("vlrpgto");
var valorteste = Number(document.getElementById("vlrpgto").value);
 var dois = 20;

 var valor = Number(valorteste+dois);


 vlrpg.value =valor.toFixed(2);

 document.getElementById("myText").innerHTML = valor.toFixed(2);

}
function cinquenta(num){

var vlrpg = document.getElementById("vlrpgto");
var valorteste = Number(document.getElementById("vlrpgto").value);
 var dois = 50;

 var valor = Number(valorteste+dois);


 vlrpg.value =valor.toFixed(2);

 document.getElementById("myText").innerHTML = valor.toFixed(2);



}

function cem(num){

var vlrpg = document.getElementById("vlrpgto");
var valorteste = Number(document.getElementById("vlrpgto").value);
 var dois = 100;

 var valor = Number(valorteste+dois);


 vlrpg.value =valor.toFixed(2);

 document.getElementById("myText").innerHTML = valor.toFixed(2);

}


$("#produto").keypress(function(e) {

  if(e.wich == 13 || e.keyCode == 13){



var idproduto = document.getElementById("idproduto").value;
var venda = document.getElementById("venda").value;
//var garcom = document.getElementById("garcom").value;
      var hora = document.getElementById("hora").value;
    var nomeproduto = document.getElementById("nomeproduto").value;
   var idpedido = document.getElementById("idpedido").value;


var tr = '<tr>'+
  '<td>'+idproduto+'</td>'+
  '<td><strong>'+nomeproduto+'</strong></td>'+
  '<td><strong>'+venda+'</strong></td>'+
  '<td><strong>R$ '+idproduto+',00</strong></td>'+
  '<td><strong>'+idproduto+' </strong></td>'+

  '<td></td>'




  '</tr>'
$('#item').find('tbody').append( tr );



                var hiddens =  '<input type="hidden" name="nomeproduto[]" value="'+nomeproduto+'" />'+

                  '<input type="hidden" name="hora[]" value="'+hora+'" />'+

                  '<input type="hidden" name="idpedido[]" value="'+idpedido+'" />'+
                  '<input type="hidden" name="vendaitem[]" value="'+venda+'" />'+
                  '<input type="hidden" name="numeromesa[]" value="'+numeromesa+'" />'+
'<input type="hidden" name="quantidade[]" value="1" />'+
                  '<input type="hidden" name="idproduto[]" value="'+idproduto+'" />';

                $('#form_insert').find('fieldset').append( hiddens );


return false;
  }
$('#produto').focus();

  /* Act on the event */
});


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

</script>

   <!--
 <div class="box box-primary">

  <div class="row">

<div class="box-body">
  <div class="col-md-4">

        <h4>Pedido:<strong> <?php echo $pedidomesa['idpedidomesa'] ?> </strong> Hora: <strong><?php echo $pedidomesa['horaabertura'] ?></strong></h4>
          <h1>MESA <?php echo $pedidomesa['numeromesa'] ?></h1>


        </div>

        <div class="col-md-8">
      <p>hlll</p><p>hlll</p><p>hlll</p>
        </div>


        <div class="col-md-12">

        <div class="box-body table-responsive no-padding">
                      <table class="table table-hover">
                        <tr>
                          <th>ID</th>
                          <th>User</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Reason</th>
                        </tr>
                        <tr>
                          <td>183</td>
                          <td>John Doe</td>
                          <td>11-7-2014</td>
                          <td><span class="label label-success">Approved</span></td>
                          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        </tr>
                      </table>


                </div>
              </div>
      </div>






    </div>


        <div class="row">

      <div class="box-body">
      </div>
    </div>


  </div>
