<div class="row">
    <div class="col-md-12">

        <h3>Configurações</h3>
        <hr/>
        <div class="col-xs-2">
            <!-- required for floating -->
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tabs-left">
                <li class="active"><a href="#home" data-toggle="tab">Empresa</a></li>
                <li><a href="#permissoes" data-toggle="tab">Permissões</a></li>
                <li><a href="#usuarios" data-toggle="tab">Usuarios</a></li>
                <li><a href="#taxaentrega" data-toggle="tab">Taxa de entrega</a></li>
                <li><a href="#entregador" data-toggle="tab">Entregadores</a></li>
                <li><a href="#impressoras" data-toggle="tab">Impressoras</a></li>
            </ul>
        </div>
        <div class="col-xs-10">
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="home">EMPRESAS
                  <div class="row">
                      <div class="col-md-12">
                  <div class="box">
                      <div class="box-header">
                          <h3 class="box-title"></h3>
                      	<div class="box-tools">
                              <a href="<?php echo site_url('empresa/add'); ?>" class="btn btn-success">NOVA EMPRESA</a>
                          </div>
                      </div>
                      <div class="box-body">
                          <table class="table table-striped">
                              <tr>

          						<th>Razão social</th>
          						<th>Fantasia</th>
          						<th>Cnpj</th>

          						<th>Telefone fixo</th>
          						<th>Celular</th>
          						<th>Ações</th>
                              </tr>
                              <?php foreach($empresa as $e){ ?>
                              <tr>

          						<td><?php echo $e['razaosocial']; ?></td>
          						<td><?php echo $e['nomefantasia']; ?></td>
          						<td><?php echo $e['cnpj']; ?></td>

          						<td><?php echo $e['telefonefixo']; ?></td>
          						<td><?php echo $e['celular']; ?></td>

          						<td>
                                      <a href="<?php echo site_url('empresa/edit/'.$e['idempresa']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                      <a href="<?php echo site_url('empresa/remove/'.$e['idempresa']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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

                </div>
                <div class="tab-pane" id="permissoes">Profile Tab.</div>
                <div class="tab-pane" id="usuarios">Messages Tab.</div>
                <div class="tab-pane" id="taxaentrega">Settings Tab.</div>
                <div class="tab-pane" id="entregador">Settings Tab.</div>
                <div class="tab-pane" id="impressoras">Settings Tab.</div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
  </div>
