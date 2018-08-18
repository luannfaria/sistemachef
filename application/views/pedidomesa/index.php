
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <div class="box-tools">
              <a href="#abrirmesa" data-toggle="modal" class="btn btn-success btn-lg">ABRIR MESA</a>
          </div>

      </h1>

              <div class="modal fade" id="abrirmesa">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">ABRIR MESAS</h4>
                    </div>
                    <div class="modal-body">
                      <section class="content">

    <div class="row">
                              <?php $total = $numerodemesas['numeromesas'];
                                for($i=1;$i<=$total;$i++){
         ?>

         <div class="col-md-2 col-sm-2 col-xs-6">
           <form  name="myform" id="mail_form<?php echo $i;?>" action="<?php echo base_url() ?>pedidomesa/novamesa" method="post">

             <input type="hidden" name="numeromesa" value="<?php echo $i;?>" />
<div class="btn">


           <a onClick="document.getElementById('mail_form<?php echo $i;?>').submit();" class="info-box-icon bg-green"><h1><?php echo $i ?></h1></a>


</div>
</form>
</div>
                              <?php } ?>
</div>
                        </section>
                    </div>
                    <div class="modal-footer">

                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
    </section>

    <section class="content">

     <div class="row">

       <?php
       if($mesasabertas) {
         foreach($mesasabertas as $mesa) { ?>
       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <form  name="myform" id="pedido<?php echo $mesa['idpedidomesa'] ?>" action="<?php echo base_url() ?>pedidomesa/mesaaberta" method="post">

            <input type="hidden" name="idpedidomesa" value="<?php echo $mesa['idpedidomesa']?>" />
          <div class="small-box bg-aqua">
            <a class="onc" onClick="document.getElementById('pedido<?php echo $mesa['idpedidomesa']?>').submit();">
            <div class="inner">
              <h3>MESA <?php echo $mesa['numeromesa'] ?></h3>

              <h4> <?php echo $mesa['horaabertura'] ?></h4>
            </div>
            <div class="icon">
              <i class="fa fa-cutlery"></i>
            </div>
            <a class="small-box-footer">
          Abrir pedido
               <i class="fa fa-arrow-circle-right"></i>
            </a>
            </a>
          </div>

        </form>
        </div>

      <?php }} ?>
     </div>
   </section>
