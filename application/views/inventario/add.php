<div id="inventario" class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">NOVO AJUSTE</h3>
            </div>

          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-2">
						<h3>Data: <?php    date_default_timezone_set('America/Sao_Paulo');
               echo date('d/m/Y'); ?></h3>
						<div class="form-group">
							<input type="hidden" name="data" value="<?php    date_default_timezone_set('America/Sao_Paulo');
                 echo date('d/m/Y'); ?>" id="data" />
						</div>
					</div>
          <br>
					<div class="col-md-7">
						<label for="descricao" class="control-label">Descrição</label>
						<div class="form-group">
							<input type="text" name="descricao" class="form-control" id="descricao"required />
						</div>
					</div>

          <div class="col-md-2">
            <label for="tipomov" class="control-label">TIPO MOV.</label>
            <div class="form-group">
              <select id="tipomov"name="tipomov" class="form-control">

                  <option value="ENTRADA">ENTRADA</option>
                    <option value="SAIDA">SAIDA</option>
              </select>

            </div>
          </div>


          <div class="col-md-2">
                                          <div class="form-group">
                                            <label for="quantidade" class="control-label"><i class="fa fa-spinner"> </i> Qtdd</label>
                                        <input type="text" class="form-control required" name="quantidade"  id="quantidade" required/>
</div>
</div>

          <div class="col-lg-5">

                  <label for="idservico" class="control-label"> Produtos</label>

                  <input type="text" class="form-control" name="produto" id="produto"  placeholder="Codigo de barras" required/>

                  <input type="hidden" name="idproduto" id="idproduto" value=""/>



                                    <input type="hidden" name="venda" id="venda" />

                  <input type="hidden" name="nomeproduto" id="nomeproduto" />

      <input type="hidden" name="codbarra" id="codbarra" />


          </div>
<div class="col-lg-12">

              <table id="inv"class="table table-striped">
              <tbody>
                <tr>
                  <td>Qtdd</td>
                  <td>Item</td>
                  <td>Total</td>
                  <td>Ações</td>
                </tr>

              </tbody>
            </table>
          </div>
          </div>
        </div>
				</div>
			</div>
          	<div class="box-footer">

              <form id="form_inv" action="" method="post">

                      <fieldset style="display: none;"></fieldset>
                      <button type="submit" class="btn btn-success">
                        <i class="fa fa-check"></i> SALVAR
                      </button>
                    </form>

          	</div>

      	</div>


<script  src="<?php echo site_url('resources/js/index.js')?>"></script>
<script src="<?php echo site_url('resources/js/jquery.js');?>"></script>
<script src="<?php echo site_url('resources/js/jquery-ui-1.10.4.min.js');?>"></script>
<script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>

<script>

$("#produto").keypress(function(e) {

  if(e.wich == 13 || e.keyCode == 13){



var descricao = document.getElementById("descricao").value;
      var idproduto = document.getElementById("idproduto").value;
      var nomeproduto = document.getElementById("nomeproduto").value;
      var qttd = document.getElementById("quantidade").value;
      var codbarra = document.getElementById("codbarra").value;
    var tipomov=  $("#tipomov :selected").text(); // The text content of the selected option

      var tr = '<tr>'+
        '<td>'+codbarra+'</td>'+
        '<td><strong>'+nomeproduto+'</strong></td>'+
        '<td><strong>'+qttd+'</strong></td>'+


        '<td></td>'




        '</tr>'

      $('#inv').find('tbody').append( tr );

      var hiddens =  '<input type="hidden" name="nomeproduto[]" value="'+nomeproduto+'" />'+
'<input type="hidden" name="codbarra[]" value="'+codbarra+'" />'+
'<input type="hidden" name="descricao" value="'+descricao+'" />'+
'<input type="hidden" name="tipomov" value="'+tipomov+'" />'+
'<input type="hidden" name="quantidade[]" value="'+qttd+'" />'+
        '<input type="hidden" name="idproduto[]" value="'+idproduto+'" />';

      $('#form_inv').find('fieldset').append( hiddens );

      document.getElementById('produto').value = '';
      document.getElementById('quantidade').value = '';
$('#quantidade').focus();

  }


});



$('#form_inv').submit(function(){

  var dados = $('#form_inv').serialize();

$.ajax({
type: "POST",
url:"<?php echo base_url();?>inventario/novoinv",
data:dados,
dataType:'json',
success:function(data)
{

if(data.result == true){

window.location.href="<?php echo base_url();?>inventario/index";




}

else{


aler('erro');


}

}

});
return false;




});

$("#produto").autocomplete({

    source: "<?php echo base_url(); ?>produto/autoCompleteProdutocodbarra",

    minLength: 2,

    select: function(event, ui) {


      $("#idproduto").val(ui.item.produto_id);

      $("#nomeproduto").val(ui.item.nomeproduto);
        $("#codbarra").val(ui.item.codbarra);







    }

});
</script>
