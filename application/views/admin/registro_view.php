<?php
$dataInputNombre = array(
        'type'  => 'text',
        'name'  => 'Nombre',
        'id'    => 'Nombre',
        'value' => '',
        'class' => 'form-control',
        'required' => '',
        'placeholder' => "Nombre"
);
$dataInputApellido = array(
        'type'  => 'text',
        'name'  => 'Apellido',
        'id'    => 'Apellido',
        'value' => '',
        'class' => 'form-control',
        'required' => '',
        'placeholder' => "Apellido"
);
$dataInputCedula = array(
        'type'  => 'text',
        'name'  => 'Cedula',
        'id'    => 'Cedula',
        'value' => '',
        'class' => 'form-control',
        'required' => '',
        'placeholder' => "Cedula ó Nit"
);
$dataInputCelular = array(
        'type'  => 'text',
        'name'  => 'Celular',
        'id'    => 'Celular',
        'value' => '',
        'class' => 'form-control',
        'required' => '',
        'placeholder' => "Celular"
);
$dataInputUsuario = array(
        'type'  => 'hidden',
        'name'  => 'Usuario',
        'id'    => 'Usuario',
        'value' => 'prueba',
        'class' => 'form-control',
        'required' => '',
        'placeholder' => "Usuario"
);
$dataInputCorreo = array(
        'type'  => 'email',
        'name'  => 'Correo',
        'id'    => 'Correo',
        'value' => '',
        'class' => 'form-control',
        'required' => '',
        'placeholder' => "Correo"
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
$dataInputClave1 = array(
        'type'  => 'password',
        'name'  => 'clave1',
        'id'    => 'clave1',
        'value' => '',
        'class' => 'form-control',
        'required' => '',
        'placeholder' => "Contraseña"
);
$dataInputURL = array(
        'type'  => 'hidden',
        'name'  => 'URL',
        'id'    => 'URL',
        'value' => 'sin Imagne',
        'class' => 'form-control',
        'required' => '',
        'placeholder' => "URL"
);
$dataInputRol = array(
        'type'  => 'hidden',
        'name'  => 'Rol',
        'id'    => 'Rol',
        'value' => '3',
        'class' => 'form-control',
        'required' => '',
        'placeholder' => "Rol"
);
$dataInputEstado = array(
        'type'  => 'hidden',
        'name'  => 'Estado',
        'id'    => 'Estado',
        'value' => '1',
        'class' => 'form-control',
        'required' => '',
        'placeholder' => "Estado"
);
$dataInputRedir = array(
        'type'  => 'hidden',
        'name'  => 'redirec',
        'id'    => 'redirec',
        'value' => '1',
        'class' => 'form-control',
        'required' => '',
        'placeholder' => "Estado"
);
?>
<body>
    <div class="container">
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="form-signin">
        <div class="form-signin-heading">
          <section class="login_content">
            <?php echo form_open('admin/Usuario/guardarSlide');?>
              <center><bold>  <h1>Registro</h1> </bold></center>
              <div>
                <?= form_input($dataInputNombre); ?>
              </div>
              <div>
                <?= form_input($dataInputApellido); ?>
              </div>
              <div>
                <?= form_input($dataInputUsuario); ?>
              </div>
              <div>
                <?= form_input($dataInputCorreo); ?>
              </div>
              <div>
                <?= form_input($dataInputClave); ?>
              </div>
              <div>
                <?= form_input($dataInputClave1); ?>
              </div>
              <div>
                <?= form_input($dataInputCedula); ?>
              </div>
              <div>
                <?= form_input($dataInputCelular); ?>
              </div>
              <div>
                <?= form_input($dataInputURL); ?>
              </div>
              <div>
                <?= form_input($dataInputRol); ?>
              </div>
              <div>
                <?= form_input($dataInputEstado); ?>
              </div>
              <div>
                <?= form_input($dataInputRedir); ?>
              </div>
              <div>
                <input type="submit" value="Registrate" class="btn btn-lg btn-login btn-block">
                
                <!--<a class="reset_pass" href="#">Lost your password?</a>-->
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <?php 
                    if(isset($mensaje)){
                      echo '<h1><i class="fa fa-paw"></i> '.$mensaje.'!</h1>';
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