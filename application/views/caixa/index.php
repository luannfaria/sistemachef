<div class="row">
    <div class="col-md-12">
        <div class="box">

            <div class="box-body-caixa">
              <div class="esquerdacaixa">
                <div class="topocaixa">
                CAIXA
                </div>
              <div class="tabelacaixa">
                <table class="table table-striped">
                    <tr>
						<th>Descrição</th>
						<th>Valor</th>


						<th>Tipo MOV</th>
						<th>Tipo PGTO</th>
                    </tr>
                    <?php foreach($caixa as $c){ ?>
                    <tr>

							<td><?php echo $c['descricao']; ?></td>
						<td>R$ <?php echo $c['valor']; ?></td>

<?php if($c['tipomovimentacao']=='1'){ ?>

						<td><span class="label label-success">ENTRADA</span></td>

          <?php } ?>
          <?php if($c['tipomovimentacao']=='2'){ ?>

                      <td><span class="label label-danger">SAIDA</span></td>

                    <?php } ?>

              						<td>
                          <?php echo $c['formapagto']; ?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
</div>
</div>
<div class="direitacaixa">
  <div class="gridcaixa">
    <a class="btn btn-success" data-toggle="modal" href="#modal-entrada">
<i class="fa fa-arrow-up"></i> ENTRADA</a>

<a class="btn btn-danger" data-toggle="modal" href="#modal-saida">
<i class="fa fa-arrow-down"></i> SAIDA</a>
  </div>

  <div class="totalcaixa">

<?php    foreach ($totaldia as $row){ ?>
    <h4>   <?php echo $row['teste']; ?>

</h4>
 <?php } ?>



  </div>
<div class="entradasaida">

  <span>ENTRADA</span>
  <span>R$ <?php echo $entrada['valor'] ?></span>
  <span>SAIDA</span>
  <span>R$ <?php echo $saida['valor'] ?></span>
</div>
  <div class="saldototal">
    <span>SALDO</span> <span>R$ <?php echo number_format(($entrada['valor']- $saida['valor']),2, '.', '.') ?> </span>
  </div>

</div>
            </div>

            <div class="modal fade" id="modal-entrada" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                       <h4 class="modal-title">Entrada caixa</h4>
                     </div>
                     <div class="modal-body">


                         <div class="row">
                      <form action="<?php echo base_url() ?>caixa/movimentacao" method="post">
                         <div class="col-md-3">
               						<label for="numero" class="control-label">Nº Documento</label>
                          <div class="form-group">
                            	<input type="text" name="numero" value="<?php echo $this->input->post('numero'); ?>" class="form-control" id="numero" />
                              <input type="hidden" name="tipomovimentacao" id="tipomovimentacao" value="1">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label for="descricao" class="control-label"><span class="text-danger">*</span>Descrição</label>
                          <div class="form-group">
                            <input type="text" name="descricao" value="<?php echo $this->input->post('descricao'); ?>" class="form-control" id="descricao" required/>
                            <span class="text-danger"><?php echo form_error('descricao');?></span>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <label for="valor" class="control-label"><span class="text-danger">*</span>Valor</label>
                          <div class="form-group">
                            <input type="text" name="valor" value="<?php echo $this->input->post('valor'); ?>"  class="form-control" id="valor" required/>
              							<span class="text-danger"><?php echo form_error('valor');?></span>
                          </div>
                        </div>


                        <div class="col-md-4">
                          <label for="obs" class="control-label">Observação</label>
                          <div class="form-group">
                            <input type="text" name="obs" value="<?php echo $this->input->post('obs'); ?>" class="form-control" id="obs" />
                          </div>
                        </div>

                        <div class="col-md-4">
                          <label for="formarecebimento" class="control-label">Tipo Rec.</label>

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


                        <?php date_default_timezone_set('America/Sao_Paulo'); ?>
                                                <div class="col-md-4">
                                      						<label for="datavencimento" class="control-label"><span class="text-danger">*</span>Data</label>
                                      						<div class="form-group">
                                                    <input type="hidden" name="datavencimento" value="<?php
                                           echo date('d/m/Y') ;?>" class="has-datepicker form-control"/>
                                      							<input type="text" name="data" value="<?php echo date('d/m/Y') ;?>" class="form-control" id="data" disabled/>
                                                    	<input type="hidden" name="dataid" value="<?php echo date('d/m/Y') ;?>" class="form-control" id="dataid" >
                                      							<span class="text-danger"><?php echo form_error('datavencimento');?></span>
                                      						</div>
                                      					</div>
                                                <br>

                                                <div class="col-md-4">
                                                  <label for="">&nbsp</label>
                                                  <div class="form-group">
                                                <input type="submit" class="btn btn-success" name="entradacaixa" value="RECEBER" />
                                              </div>
                                                </div>






                        </form>

</div>
                     </div>

                   </div>
                 </div>
               </div>





               <div class="modal fade" id="modal-saida" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Saida caixa</h4>
                                  </div>
                                  <div class="modal-body">

                                    <div class="row">
                                 <form action="<?php echo base_url() ?>caixa/movimentacao" method="post">
                                    <div class="col-md-3">
                                     <label for="numero" class="control-label">Nº Documento</label>
                                       <input type="hidden" name="tipomovimentacao" id="tipomovimentacao" value="2">
                                     <div class="form-group">
                                         <input type="text" name="numero" value="<?php echo $this->input->post('numero'); ?>" class="form-control" id="numero" />

                                     </div>
                                   </div>
                                   <div class="col-md-6">
                                     <label for="descricao" class="control-label"><span class="text-danger">*</span>Descrição</label>
                                     <div class="form-group">
                                       <input type="text" name="descricao" value="<?php echo $this->input->post('descricao'); ?>" class="form-control" id="descricao" required/>
                                       <span class="text-danger"><?php echo form_error('descricao');?></span>
                                     </div>
                                   </div>

                                   <div class="col-md-3">
                                     <label for="valor" class="control-label"><span class="text-danger">*</span>Valor</label>
                                     <div class="form-group">
                                       <input type="text" name="valor" value="<?php echo $this->input->post('valor'); ?>"  class="form-control" id="valor" required/>
                                       <span class="text-danger"><?php echo form_error('valor');?></span>
                                     </div>
                                   </div>


                                   <div class="col-md-4">
                                     <label for="obs" class="control-label">Observação</label>
                                     <div class="form-group">
                                       <input type="text" name="obs" value="<?php echo $this->input->post('obs'); ?>" class="form-control" id="obs" />
                                     </div>
                                   </div>

                                   <div class="col-md-4">
                                     <label for="formarecebimento" class="control-label">Tipo Pagamento</label>

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


                                   <?php date_default_timezone_set('America/Sao_Paulo'); ?>
                                                           <div class="col-md-4">
                                                             <label for="datavencimento" class="control-label"><span class="text-danger">*</span>Data</label>
                                                             <div class="form-group">
                                                               <input type="hidden" name="datavencimento" value="<?php
                                                      echo date('d/m/Y') ;?>" class="has-datepicker form-control"/>
                                                               <input type="text" name="data" value="<?php echo date('d/m/Y') ;?>" class="form-control" id="data" disabled/>
                                                                  <input type="hidden" name="dataid" value="<?php echo date('d/m/Y') ;?>" class="form-control" id="dataid" >
                                                               <span class="text-danger"><?php echo form_error('datavencimento');?></span>
                                                             </div>
                                                           </div>
                                                           <br>

                                                           <div class="col-md-4">
                                                             <label for="">&nbsp</label>
                                                             <div class="form-group">
                                                           <input type="submit" class="btn btn-danger" name="saidacaixa" value="PAGAR" />
                                                         </div>
                                                         </div>

                                      </form>
                                 </div>

                               </div>





</div>
                                  </div>

                                </div>
                              </div>

        </div>
    </div>
