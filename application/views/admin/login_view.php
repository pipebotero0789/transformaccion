<?php
$dataInputUsuario = array(
        'type'  => 'text',
        'name'  => 'usuario',
        'id'    => 'usuario',
        'value' => '',
        'class' => 'form-control',
        'required' => '',
        'placeholder' => "Usuario"
);
$dataInputClave = array(
        'type'  => 'password',
        'name'  => 'clave',
        'id'    => 'clave',
        'value' => '',
        'class' => 'form-control',
        'required' => '',
        'placeholder' => "Contraseña"
);
?>
<body>
    <div class="container">
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="form-signin">
        <div class="form-signin-heading">
          <section class="login_content">
            <?php echo form_open('admin/Login/logeo');?>
              <center><h1 class="titulo-singin">INGRESO ADMIN</h1></center>
              <div>
                <?= form_input($dataInputUsuario); ?>
              </div>
              <div>
                <?= form_input($dataInputClave); ?>
              </div>
              <div>
                <input type="submit" value="Entrar" class="btn btn-lg btn-login btn-block">
                
                <!--<a class="reset_pass" href="#">Lost your password?</a>-->
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <?php 
                    if(isset($mensaje)){
                      echo '<p class="alert alert-danger"><i class="fa fa-paw"></i> '.$mensaje.'!</p>';
                    }
                  ?>
                  
                  <!--<p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>-->
                </div>
              </div>
            <?php echo form_close(); ?>
          </section>
        </div>
      </div>
    </div>