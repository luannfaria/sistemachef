<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Opcoesitempedidomesa Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('opcoesitempedidomesa/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Idopcoesitempedidomesa</th>
						<th>Iditenspedidomesa</th>
						<th>Idadicionais</th>
						<th>Valor Adicional</th>
						<th>Observacao</th>
						<th>Idpedidomesa</th>
						<th>Nome</th>
						<th>Tipoopcao</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($opcoesitempedidomesa as $o){ ?>
                    <tr>
						<td><?php echo $o['idopcoesitempedidomesa']; ?></td>
						<td><?php echo $o['iditenspedidomesa']; ?></td>
						<td><?php echo $o['idadicionais']; ?></td>
						<td><?php echo $o['valor_adicional']; ?></td>
						<td><?php echo $o['observacao']; ?></td>
						<td><?php echo $o['idpedidomesa']; ?></td>
						<td><?php echo $o['nome']; ?></td>
						<td><?php echo $o['tipoopcao']; ?></td>
						<td>
                            <a href="<?php echo site_url('opcoesitempedidomesa/edit/'.$o['idopcoesitempedidomesa']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('opcoesitempedidomesa/remove/'.$o['idopcoesitempedidomesa']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
