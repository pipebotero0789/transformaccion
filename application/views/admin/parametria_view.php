<body class="nav-md">
	<div class="container body">
    <div class="main_container">
        <?php
          echo $nav;
        ?>
      <div class="right_col" role="main">
        <div class="clearfix"></div>

        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Blog<small> USUARIO <?php echo $this->session->userdata('nombre'); ?></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form class="form-horizontal form-label-left"  method="post" action="<?= base_url(''); ?>/admin/Parametria/guardarParametria" novalidate>
                    <!--
                      <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                      </p>
                      -->

                      <span class="section">Cambiar datos </span>
                    
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="facebook">Facebook <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="facebook" class="form-control col-md-7 col-xs-12" name="facebook" placeholder="" required="required" type="text" data-validation-length="3-12" data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)" value="<?php echo (!is_null($parametria)) ? $parametria['facebook'] : '' ;?>">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="twitter">Twitter <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="twitter" class="form-control col-md-7 col-xs-12" name="twitter" placeholder="" required="required" type="text" data-validation-length="3-12" data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)" value="<?php echo (!is_null($parametria)) ? $parametria['twitter'] : '' ;?>">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="linkedin">Linkedin <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="linkedin" class="form-control col-md-7 col-xs-12" name="linkedin" placeholder="" required="required" type="text" data-validation-length="3-12" data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)" value="<?php echo (!is_null($parametria)) ? $parametria['linkedin'] : '' ;?>">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefono">Telefono <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="telefono" class="form-control col-md-7 col-xs-12" name="telefono" placeholder="" required="required" type="text" data-validation-length="3-12" data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)" value="<?php echo (!is_null($parametria)) ? $parametria['telefono'] : '' ;?>">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="correo">Correo <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="correo" class="form-control col-md-7 col-xs-12" name="correo" placeholder="" required="required" type="text" data-validation-length="3-12" data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)" value="<?php echo (!is_null($parametria)) ? $parametria['correo'] : '' ;?>">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="send" type="submit" class="btn btn-success">Guardar</button>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $error; ?></label>
                      </div>
                    </form>
                </div>
              </div>
            </div>
			</div>
		</div>
  </div>

    <!-- /page content -->
    <?php 
      echo $footer;
    ?>