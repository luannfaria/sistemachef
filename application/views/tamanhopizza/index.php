<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tamanhopizza Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tamanhopizza/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Idtamanhopizza</th>
						<th>Idpizza</th>
						<th>Tamanho</th>
						<th>Custo</th>
						<th>Venda</th>
						<th>Siglatamanho</th>
						<th>Impressora</th>
						<th>Tipocobranca</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tamanhopizza as $t){ ?>
                    <tr>
						<td><?php echo $t['idtamanhopizza']; ?></td>
						<td><?php echo $t['idpizza']; ?></td>
						<td><?php echo $t['tamanho']; ?></td>
						<td><?php echo $t['custo']; ?></td>
						<td><?php echo $t['venda']; ?></td>
						<td><?php echo $t['siglatamanho']; ?></td>
						<td><?php echo $t['impressora']; ?></td>
						<td><?php echo $t['tipocobranca']; ?></td>
						<td>
                            <a href="<?php echo site_url('tamanhopizza/edit/'.$t['idtamanhopizza']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tamanhopizza/remove/'.$t['idtamanhopizza']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
