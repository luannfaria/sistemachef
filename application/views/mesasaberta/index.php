<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Mesasabertas Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('mesasaberta/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Idmesasabertas</th>
						<th>Numeromesa</th>
						<th>Idpedidomesa</th>
						<th>Dataabertura</th>
						<th>Horaabertura</th>
						<th>Subtotal</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($mesasabertas as $m){ ?>
                    <tr>
						<td><?php echo $m['idmesasabertas']; ?></td>
						<td><?php echo $m['numeromesa']; ?></td>
						<td><?php echo $m['idpedidomesa']; ?></td>
						<td><?php echo $m['dataabertura']; ?></td>
						<td><?php echo $m['horaabertura']; ?></td>
						<td><?php echo $m['subtotal']; ?></td>
						<td>
                            <a href="<?php echo site_url('mesasaberta/edit/'.$m['idmesasabertas']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('mesasaberta/remove/'.$m['idmesasabertas']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
