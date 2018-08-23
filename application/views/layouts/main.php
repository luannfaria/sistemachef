<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PROFIT SISTEMAS</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">

          <link rel="stylesheet" href="<?php echo site_url('resources/css/jquery-ui-1.10.4.min.css');?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">
    </head>

    <body class="hold-transition skin-blue sidebar-mini">

        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">PROFIT 1.0</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">

                                  <a href="<?php echo site_url('Dashboard/sair')?>">SAIR <i class="fa fa-sign-out"></i> </a>
                                </a>

                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo site_url('resources/img/user2-160x160.png');?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>PROFIT 1.0 </p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>


                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php echo site_url('Dashboard/painel')?>">
                                <i class="fa fa-dashboard"></i> <span>INICIO</span>

                            </a>
                        </li>


                        <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart"></i> <span>VENDAS</span>
                                        </a>
                                        <ul class="treeview-menu">
                           <li class="active">
                                                <a href="#"><i class="fa fa-circle"></i> BALCÃO</a>
                                            </li>
                            <li>
                                                <a href="<?php echo site_url('pedidodelivery/index');?>"><i class="fa fa-circle"></i> DELIVERY</a>
                                            </li>
                                            <li>
                                                                <a href="<?php echo site_url('pedidomesa/index');?>"><i class="fa fa-circle"></i> MESAS</a>
                                                            </li>
                                                            <li>
                                                                                <a href="<?php echo site_url('pedidopdv/index');?>"><i class="fa fa-circle"></i> PDV</a>
                                                                            </li>
                          </ul>
                                    </li>



<li>


  <a href="#">
      <i class="fa fa-tags"></i> <span>PRODUTOS</span>
  </a>
  <ul class="treeview-menu">
   <li class="active">
              <a href="<?php echo site_url('adicional/index');?>"><i class="fa fa-circle"></i> ADICIONAIS</a>
          </li>
<li>
          <a href="<?php echo site_url('categoria/index');?>"><i class="fa fa-circle"></i> CATEGORIAS</a>
      </li>
<li>
          <a href="<?php echo site_url('pizza/index');?>"><i class="fa fa-circle"></i> PIZZAS</a>
      </li>
      <li>
                          <a href="<?php echo site_url('produto/index');?>"><i class="fa fa-circle"></i> PRODUTOS</a>
                      </li>
                      <li>
                                          <a href="<?php echo site_url('produto/gerarean'); ?>"><i class="fa fa-circle"></i> IMP.ETIQUETAS</a>
                                      </li>
                                      <li>
                                                          <a href="<?php echo site_url('observaco/index'); ?>"><i class="fa fa-circle"></i> OBSERVAÇÕES</a>
                                                      </li>
</ul>


</li>


						<li>
                            <a href="#">
                                <i class="fa fa-users"></i> <span>CADASTROS</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('cliente/index');?>"><i class="fa fa-circle"></i> CLIENTES</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('fornecedor/index');?>"><i class="fa fa-circle"></i> FORNECEDORES</a>
                                </li>
							</ul>
                        </li>


						<li>
                            <a href="#">
                                <i class="fa fa-archive"></i> <span>ESTOQUE</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('inventario/index');?>"><i class="fa fa-circle"></i> AJUSTES DE ESTOQUE</a>
                                </li>
								<li>
                                    <a href="#"><i class="fa fa-circle"></i> COMPRAS</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-dollar"></i> <span>FINANCEIRO</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('contasapagar/index');?>"><i class="fa fa-circle"></i> A PAGAR</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('contasareceber/index');?>"><i class="fa fa-circle"></i> A RECEBER</a>
                                </li>
                                <li>
                                                    <a href="<?php echo site_url('caixa/index');?>"><i class="fa fa-circle"></i> CAIXA</a>
                                                </li>
							</ul>
                        </li>


                        <li>
                                        <a href="#">
                                            <i class="fa fa-dollar"></i> <span>RELATÓRIOS</span>
                                        </a>
                                        <ul class="treeview-menu">
                            <li class="active">
                                                <a href=""><i class="fa fa-circle"></i> </a>
                                            </li>
                            <li>
                                                <a href="<?php echo site_url('contasareceber/index');?>"><i class="fa fa-circle"></i> </a>
                                            </li>
                                      <!--      <li>
                                                                <a href="<?php echo site_url('caixa/index');?>"><i class="fa fa-circle"></i> </a>
                                                            </li>!-->
                          </ul>
                                    </li>




                        <li>
                                        <a href="#">
                                            <i class="fa fa-desktop"></i> <span>CONFIGURAÇÕES</span>
                                        </a>
                                        <ul class="treeview-menu">
                            <li class="active">
                                                <a href="<?php echo site_url('empresa/index');?>"><i class="fa fa-plus"></i> Sistema</a>
                                            </li>
                            <li>
                                                <a href="<?php echo site_url('usuario/index');?>"><i class="fa fa-list-ul"></i> Usuarios</a>
                                            </li>
                                          <li>
                                                                <a href="<?php echo site_url('entregador/index');?>"><i class="fa fa-list-ul"></i> Entregadores</a>

                                                              </li>
                                                                <li>
                                                                                    <a href="<?php echo site_url('taxaentrega/index');?>"><i class="fa fa-list-ul"></i> Taxa de entrega</a>
                                                                                  </li>
                                                                                                         <li>
                                                                                                                             <a href="#"><i class="fa fa-list-ul"></i> Impressoras</a>
                                                                                                                                                  </li>

                          </ul>
                                    </li>





                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <?php
                   if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>TODOS DIREITOS RESERVADOS <a href="#">PROFIT SISTEMAS</a></strong>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">

                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab"></div>
                    <!-- /.tab-pane -->

                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->
  <script src="<?php echo site_url('resources/js/jquery.js');?>"></script>
        <!-- jQuery 2.2.3 -->
        <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/maskmoney.js');?>"></script>

        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
        <!-- FastClick -->
        <script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo site_url('resources/js/app.min.js');?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo site_url('resources/js/demo.js');?>"></script>
        <!-- DatePicker -->
        <script src="<?php echo site_url('resources/js/moment.js');?>"></script>
        <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/global.js');?>"></script>

    </body>
</html>
