<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">CONTAS A PAGAR</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('contasapagar/add'); ?>" class="btn btn-success">NOVA CONTA</a>
                </div>
            </div>
            <div class="box-body">
              <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
              <script src="<?php echo site_url('resources/js/maskmoney.js');?>"></script>
                <table class="table table-striped">
                    <tr>
                      <th>Nº DOC</th>
                      	<th>Descrição</th>
                        <th>Valor</th>

						<th>Vencimento</th>
						<th>Pagamento</th>


						<th>Status</th>

						<th>Ações</th>
                    </tr>
                    <?php foreach($contasapagar as $c){ ?>
                    <tr>
                      		<td><?php echo $c['numerodoc']; ?></td>
                          		<td><?php echo $c['descricao']; ?></td>
                              <td><?php echo $c['valorconta']; ?></td>
                              <td><?php echo $c['datavencimento']; ?></td>
                              <td><?php echo $c['datapagamento']; ?></td>
                            <?php date_default_timezone_set('America/Sao_Paulo');
                            $data = date('d/m/Y');
                             if($c['datapagamento']==NULL && $c['datavencimento']<$data){ ?>
                             <td><span class="label label-danger">ATRASADO</span></td>
                           <?php } if($c['datapagamento']==NULL && $c['datavencimento']>=$data){ ?>
                             <td><span class="label label-warning">ABERTO</span></td>
                             <?PHP } if($c['datapagamento']!=NULL){?>
                           <td><span class="label label-success">PAGO</span></td>
                             <?php } ?>

						<td>
              <?PHP  if($c['datapagamento']==NULL){?>
                            <a href="<?php echo site_url('contasapagar/edit/'.$c['idcontasapagar']); ?>" class="btn btn-info"><span class="fa fa-pencil"></span> EDITAR</a>
                          <a data-toggle="modal" data-target="#pagar-lg<?php echo $c['idcontasapagar']?>" class="btn btn-success" >PAGAR</a>
<?php }?>
                        </td>
                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="pagar-lg<?php echo $c['idcontasapagar']?>" class="modal fade">
                                         <div class="modal-dialog">
                                           <div class="modal-content">
                                             <div class="modal-header">
                                               <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                               <h4 class="modal-title">PAGAR</h4>
                                             </div>
                                             <div class="modal-body">


                                               <div class="row clearfix">
                                            <form action="<?php echo site_url() ?>contasapagar/recebeconta/<?php echo $c['idcontasapagar'] ?>" method="post">
                                               <div class="col-md-3">
                                                <label for="numero" class="control-label">Nº documento</label>
                                                <div class="form-group">
                                                    <input type="text" name="numero" value="<?php echo $c['numerodoc'] ?>" class="form-control" disabled />

                                                </div>
                                              </div>

                                              <div class="col-md-8">
                                               <label for="descricao" class="control-label">Descrição</label>
                                               <div class="form-group">
                                                   <input type="text" name="descricao" value="<?php echo $c['descricao'] ?>" class="form-control" disabled />
                      <input type="hidden" name="descricaoconta" value="<?php echo $c['descricao'] ?>">
                                               </div>
                                             </div>

                                             <div class="col-md-3">
                                              <label for="valor" class="control-label">Valor conta</label>
                                              <div class="form-group">
                                                  <input type="text" name="valor" id="valor" value="<?php echo $c['valorconta'] ?>" class="form-control"  disabled/>

                                              </div>
                                            </div>

                                            <div class="col-lg-3">
                                             <label for="vencimento" class="control-label">Vencimento</label>
                                             <div class="form-group">
                                                 <input type="text" id="data" name="vencimento" value="<?php echo $c['datavencimento'] ?>" class="form-control" disabled />

                                             </div>
                                           </div>
                                           <div class="col-md-5">
                                            <label for="observacao" class="control-label">Observação</label>
                                            <div class="form-group">
                                                <input type="text" name="observacao" value="<?php echo $c['numerodoc'] ?>" class="form-control" disabled />

                                            </div>
                                          </div>
                                           <div class="col-md-3">
                                            <label for="valorpago" class="control-label">Valor PAGO</label>
                                            <div class="form-group">
                                                <input type="text" name="valorpago" id="valorpago<?php echo $c['idcontasapagar']?>"  class="form-control" />

                                            </div>
                                          </div>


                                          <div class="col-md-4">
                                            <label for="formarecebimento" class="control-label">Tipo Pgto</label>

                                            <div class="form-group">
                                            <select name="formarecebimento" class="form-control" required>
                                              <option value="">Selecione    </option>
                                                <option value="DINHEIRO"> DINHEIRO</option>
                                                <option value="CREDITO"> CARTÃO DE CRÉDITO</option>
                                                <option value="DEBITO"> CARTÃO DE DÉBITO</option>
                                                <option value="CHEQUE"> CHEQUE</option>
                                            </select>
                                            </div>
                                          </div>



                                          <div class="col-md-4">
                                            <label for="">&nbsp</label>
                                            <div class="form-group">
                                          <input type="submit" class="btn btn-danger" name="contasapagar" value="PAGAR" />
                                        </div>
                                          </div>
                                            </form>

                                            <script>


                                            $('#valorpago<?php echo $c['idcontasapagar']?>').maskMoney();


                                            </script>
                                          </div>
                                             </div>
                                             </div>
                                             </div>
                                             </div>
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
