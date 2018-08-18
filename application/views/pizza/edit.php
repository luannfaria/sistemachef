<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Editar pizza</h3>
            </div>
			<?php echo form_open('pizza/edit/'.$pizza['idpizza']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nome" class="control-label">Pizza</label>
						<div class="form-group">
							<input type="text" name="nome" value="<?php echo ($this->input->post('nome') ? $this->input->post('nome') : $pizza['nome']); ?>" class="form-control" id="nome" />
						</div>
					</div>
          <div class="col-md-6">
            <label for="idcategoria" class="control-label">Categoria</label>
            <div class="form-group">
              <select name="idcategoria" class="form-control">
                <option value="">select categoria</option>
                <?php
                foreach($all_categorias as $categoria)
                {
                  $selected = ($categoria['idcategoria'] == $pizza['categoriaid']) ? ' selected="selected"' : "";

                  echo '<option value="'.$categoria['idcategoria'].'" '.$selected.'>'.$categoria['nomecategoria'].'</option>';
                }
                ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">

            <table class="table">
          <thead>
          <tr>
          <th class="col-md-1">#</th>
          <th class="col-md-1">Tamanho</th>
          <th class="col-md-1">Custo</th>
          <th class="col-md-1">Venda</th>
          </tr>
          </thead>
          <tbody>
              <?php foreach($tamanhos as $tam){ ?>
            <tr>
            <td><input type="checkbox" name="pizza[]" value="1" <?php echo ($tam['valuetamanho']==1 ? 'checked="checked"' : ''); ?> id="bro" onchange="muda(this, 'brotinho');"></td>
            <td>Brotinho <input type="hidden" name="nometam[1]"  class="form-control" value="BROTINHO"/>
              <input type="hidden" name="sigla[1]"  class="form-control" value="b"/>
            </td>
            <td>	<input type="text" name="custopizza[1]"  class="form-control" id="brotinhoc" disabled="true"/></td>
            <td><input type="text" name="vendapizza[1]" class="form-control" id="brotinhov" disabled="true"/></td>
            </tr>

          <tr>
          <td><input type="checkbox"  name="pizza[]" value="2" <?php echo ($tam['valuetamanho']==2 ? 'checked="checked"' : ''); ?> id="fat" onchange="muda(this, 'fatia');"></td>
          <td>Fatia <input type="hidden" name="nometam[2]"  class="form-control" value="FATIA"/>
            <input type="hidden" name="sigla[2]"  class="form-control" value="f"/>
          </td>
          <td>	<input type="text" name="custopizza[2]" value="" class="form-control" id="fatiac" disabled="true"/></td>
          <td><input type="text" name="vendapizza[2]" class="form-control" id="fatiav" disabled="true"/></td>
          </tr>
          <tr>
          <td><input type="checkbox"  name="pizza[]" id="peq" value="3" <?php echo ($tam['valuetamanho']==3 ? 'checked="checked"' : ''); ?>onchange="muda(this, 'pequena');"></td>
          <td>Pequena
          <input type="hidden" name="sigla[3]"  class="form-control" value="p"/>
           <input type="hidden" name="nometam[3]"  class="form-control" value="PEQUENA"/></td>
          <td>	<input type="text" name="custopizza[3]"  class="form-control" id="pequenac" disabled="true"/></td>
          <td><input type="text" name="vendapizza[3]"  class="form-control" id="pequenav" disabled="true"/></td>
          </tr>
          <tr>
          <td><input type="checkbox"  name="pizza[]" value="4" <?php echo ($tam['valuetamanho']==4 ? 'checked="checked"' : ''); ?> id="med" onchange="muda(this, 'media');"></td>
          <td>Media
          <input type="hidden" name="sigla[4]"  class="form-control" value="m"/>
            <input type="hidden" name="nometam[4]"  class="form-control" value="MEDIA"/></td>
          <td>	<input type="text" name="custopizza[4]"  class="form-control" id="mediac" disabled="true"/></td>
          <td><input type="text" name="vendapizza[4]"  class="form-control" id="mediav" disabled="true"/></td>
          </tr>
          <tr>
          <td><input type="checkbox" name="pizza[]" value="5" <?php echo ($tam['valuetamanho']==5 ? 'checked="checked"' : ''); ?>id="gra" onchange="muda(this, 'grande');"></td>
          <td>Grande
          <input type="hidden" name="sigla[5]"  class="form-control" value="g"/>
           <input type="hidden" name="nometam[5]"  class="form-control" value="GRANDE"/></td>
          <td>	<input type="text" name="custopizza[5]" value=" " class="form-control" id="grandec" disabled="true"/></td>
          <td><input type="text" name="vendapizza[5]" value=" " class="form-control" id="grandev" disabled="true"/></td>
          </tr>
          <tr>
          <td><input type="checkbox"  name="pizza[]" value="6" <?php echo ($tam['valuetamanho']==6 ? 'checked="checked"' : ''); ?> id="gig" onchange="muda(this, 'gigante');"></td>
          <td>Gigante
          <input type="hidden" name="sigla[6]"  class="form-control" value="gg"/>
           <input type="hidden" name="nometam[6]"  class="form-control" value="GIGANTE"/></td>
          <td>	<input type="text" name="custopizza[6]" value=" " class="form-control" id="gigantec" disabled="true"/></td>
          <td><input type="text" name="vendapizza[6]" value=" " class="form-control" id="gigantev" disabled="true"/></td>
          </tr>

        <?php } ?>
          </tbody>
          </table>
          </div>

					<div class="col-md-6">
						<label for="impressora" class="control-label">Impressora</label>
						<div class="form-group">
							<input type="text" name="impressora" value="<?php echo ($this->input->post('impressora') ? $this->input->post('impressora') : $pizza['impressora']); ?>" class="form-control" id="impressora" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>
			<?php echo form_close(); ?>
		</div>
    </div>
</div>


<script src="<?php echo site_url('resources/js/maskmoney.js');?>"></script>

<script>
$("#brotinhoc").maskMoney();
$('#brotinhov').maskMoney();

$("#fatiac").maskMoney();
$('#fatiav').maskMoney();
$('#pequenac').maskMoney();
$('#pequenav').maskMoney();
$('#mediac').maskMoney();
$('#mediav').maskMoney();
$('#grandec').maskMoney();
$('#grandev').maskMoney();
$('#gigantec').maskMoney();
$('#gigantev').maskMoney();


function muda(el, id) {

  switch(id) {
    case 'brotinho':
    document.getElementById('brotinhoc').disabled = !el.checked;
    document.getElementById('brotinhov').disabled = !el.checked;
        break;
    case 'fatia':
    document.getElementById('fatiac').disabled = !el.checked;
    document.getElementById('fatiav').disabled = !el.checked;
        break;
    case 'pequena':
    document.getElementById('pequenac').disabled = !el.checked;
    document.getElementById('pequenav').disabled = !el.checked;
        break;
        case 'media':
        document.getElementById('mediac').disabled = !el.checked;
        document.getElementById('mediav').disabled = !el.checked;
            break;
            case 'grande':
            document.getElementById('grandec').disabled = !el.checked;
            document.getElementById('grandev').disabled = !el.checked;
                break;
                case 'gigante':
                document.getElementById('gigantec').disabled = !el.checked;
                document.getElementById('gigantev').disabled = !el.checked;
                    break;
}

}

</script>
