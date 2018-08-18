<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PROFIT sistemas</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="https://bootswatch.com/3/readable/bootstrap.min.css">
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
    <body class="hold-transition login-page">
  <div class="login-box">

<div class="login-box-body">
    <p class="login-box-msg">Bem vindo</p>

    <form class="login-form" id="formLogin" method="post"  action="<?php echo base_url()?>dashboard/verificarLogin">
      <div class="form-group has-feedback">
        <input type="text" id="login" name="login" class="form-control" placeholder="Login" autofocus>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="senha" class="form-control" placeholder="Senha">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">

        <!-- /.col -->
        <div class="col-xs-6">
          <button type="submit" class="btn btn-primary btn-block">ACESSAR</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

</DIV>
  </div>
</BODY>
  <!-- /.login-box-body -->


  <script src="<?php echo site_url('resources/js/jquery.js');?>"></script>
        <!-- jQuery 2.2.3 -->
        <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/maskmoney.js');?>"></script>

        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>




  <script src="<?php echo base_url()?>resources/js/validate.js"></script>



  <script type="text/javascript">
      $(document).ready(function(){

          $('#email').focus();
          $("#formLogin").validate({
               rules :{
                    login: { required: true},
                    senha: { required: true}
              },
              messages:{
                    email: { required: 'Campo Requerido.'},
                    senha: {required: 'Campo Requerido.'}
              },
             submitHandler: function( form ){
                   var dados = $( form ).serialize();


                  $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>dashboard/verificarLogin?ajax=true",
                    data: dados,
                    dataType: 'json',

                    success: function(data)
                    {
                      if(data.result == true){

                          window.location.href = "<?php echo base_url();?>Dashboard/painel";
                      }
                      else{


                          $('#btn-acessar').removeClass('disabled');
                          $('#progress-acessar').addClass('hide');

                          $('#call-modal').trigger('click');
                      }
                    }
                    });

                    return false;
              },

              errorClass: "help-inline",
              errorElement: "span",
              highlight:function(element, errorClass, validClass) {
                  $(element).parents('.control-group').addClass('error');
              },
              unhighlight: function(element, errorClass, validClass) {
                  $(element).parents('.control-group').removeClass('error');
                  $(element).parents('.control-group').addClass('success');
              }
          });

      });

  </script>


  <a href="#notification" id="call-modal" role="button" class="btn" data-toggle="modal" style="display: none ">notification</a>



  <div class="modal fade" id="notification">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  Profit sistemas
              </div>
              <div class="modal-body">
                  <h3 style="text-align: center">Os dados de acesso estão incorretos, por favor tente novamente!</h3>
              </div>
              <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Fechar</button>

              </div>
          </div>
          </div>
        </div>

</body>

</html>
