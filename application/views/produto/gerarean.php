<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">GERAR ETIQUETA</h3>
            </div>

          	<div class="box-body">
          		<div class="row clearfix">

                <form id="pesquisa"method="post" action="">

                <div class="col-md-5">
                  	<div class="form-group">
                  <label for="idservico" class="control-label"> Produtos</label>

                  <input type="text" class="form-control" name="produto" id="produto"  placeholder="Pesquisar" >

                  <input type="hidden" name="idproduto" id="idproduto" value=""/>
                    <input type="hidden" name="venda" id="venda" value=""/>


<input type="hidden" name="codbarra" id="codbarra" />
                  <input type="hidden" name="nomeproduto" id="nomeproduto" />
                </div>
                </div>

                <div class="col-md-2">
                  	<div class="form-group">
      						<label for="quantidade" class="control-label">QTDD</label>

      							<input type="text" name="quantidade"  class="form-control" id="quantidade" >
      						</div>
      					</div>
                  </form>

                <div class="col-md-12">

                  <table id="item" class="table table-striped">
                    <tbody>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>Total</td>
                        <td>Ações</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

              </div>
              <form id="form_insert" action="<?php echo site_url('produto/generatebarcode'); ?>" method="post">

                      <fieldset></fieldset>


<input type="submit" class="btn btn-success" value="GERAR">
                    </form>

            </div>
          </div>
        </div>
      </div>


      <script  src="<?php echo site_url('resources/js/index.js')?>"></script>
  <script src="<?php echo site_url('resources/js/jquery.js');?>"></script>
  <script src="<?php echo site_url('resources/js/jquery-ui-1.10.4.min.js');?>"></script>
    <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jsbarcode/3.3.20/JsBarcode.all.min.js"></script>
<script>
//JsBarcode('#barcode', "1234567890128", {format: "ean13"});
$('#quantidade').keypress(function(e) {

  if(e.wich == 13 || e.keyCode == 13){

    var codbarra = document.getElementById("codbarra").value;
      var venda = document.getElementById("venda").value;
    var qtdd = document.getElementById("quantidade").value;

        var nomeproduto = document.getElementById("nomeproduto").value;



    var tr = '<tr>'+
      '<td>'+nomeproduto+'</td>'+
      '<td><strong>'+qtdd+'</strong></td>'+
      '<td><strong>'+codbarra+'</strong></td>'+


      '<td></td>'




      '</tr>'
    $('#item').find('tbody').append( tr );

    for(i=0;i<qtdd;i++){
  var hiddens =  '<input type="hidden" name="nomeproduto[]" value="'+nomeproduto+'" />'+
    '<input type="hidden" name="venda[]" value="'+venda+'" />'+
    '<input type="hidden" name="codbarra[]" value="'+codbarra+'" />';
$('#form_insert').find('fieldset').append( hiddens );
}





$('#pesquisa').trigger("reset");
$('#produto').focus();

      }



});
function Enter(idinput){
	if(event.keyCode == 13){
		document.getElementById(idinput).focus();
		return false;
	}
}




$("#produto").autocomplete({

    source: "<?php echo base_url(); ?>produto/autoCompleteProduto",

    minLength: 2,

    select: function(event, ui) {



        $("#idproduto").val(ui.item.produto_id);

    //      $("#venda").val(ui.item.vendaproduto);
          $("#nomeproduto").val(ui.item.nomeproduto);
            $("#codbarra").val(ui.item.codbarra);
        //  $("#nomeprodutoadd").val(ui.item.nomeproduto);







    }

});

</script>
