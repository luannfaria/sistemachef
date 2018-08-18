<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <?php $this->load->helper('contadores');
              $produto=0;
              $pedidos=0;
              $vendashoje=0;
              $vendassemana=0;
              $maisvendidos=0;
              
                $produto = totalprodutos();
                $pedidos = totalpedidos();
                $vendashoje = totalvendasdodia();
                  $vendassemana = vendasdasemana();
                  $maisvendidos = maisvendidos();
               ?>
              <h3><?php echo $produto ?></h3>

              <p>Produtos cadastrados</p>
            </div>
            <div class="icon">
              <i class="fa fa-tags"></i>
            </div>
            <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
           <!-- small box -->
           <div class="small-box bg-aqua">
             <div class="inner">
               <h3><?php echo $pedidos ?></h3>

               <p>Vendas realizadas</p>
             </div>
             <div class="icon">
               <i class="fa fa-shopping-cart"></i>
             </div>
             <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
           </div>
         </div>
         <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3>R$ <?php echo $vendashoje['valor'] ?></h3>

                <p>Vendidos hoje</p>
              </div>
              <div class="icon">
                <i class="fa fa-dollar"></i>
              </div>
              <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
             <!-- small box -->
             <div class="small-box bg-green">
               <div class="inner">
                 <h3>R$ <?php echo $vendassemana['valor'] ?></h3>

                 <p>Vendas ultimos 7 dias</p>
               </div>
               <div class="icon">
                 <i class="fa fa-dollar"></i>
               </div>
               <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
             </div>
           </div>
      </div>

    </section>

    <section class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">OS 10 MAIS VENDIDOS</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table class="table table-condensed">
                  <tr>
                  <th style="width: 60px">Produto</th>

                  <th style="width: 10px">Qtde</th>
                </tr>

                  <?php    foreach ($maisvendidos as $row){ ?>
                    <tr>
                     <?php echo '<td> '.$row['nomeproduto'].'</td>'; ?>
                      <?php echo '<td> '.$row['quantidade'].'</td>'; ?>
</tr>

                   <?php } ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
