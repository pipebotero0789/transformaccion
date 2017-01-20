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
                    <h2>Slider<small>Usuario <?php echo $this->session->userdata('nombre'); ?></small></h2>
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
                    <form class="form-horizontal form-label-left"  method="post" action="<?= base_url(''); ?>/admin/Inicio/guardarSlide" novalidate>
                    <!--
                      <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                      </p>
                      -->
                      <span class="section">Agregar Slider</span>
                      <?php 
                        if(!is_null($datosCarga)){
                          echo '<input type="text" id="id" name="id" value="'.$datosCarga[0]->slide_id .'" hidden="true">';
                          
                        }
                      ?>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Nombre">Nombre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Nombre" class="form-control col-md-7 col-xs-12" name="Nombre" placeholder="" required="required" type="text" data-validation-length="3-12" data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)" value="<?php echo (!is_null($datosCarga)) ? $datosCarga[0]->slide_nombre : '' ;?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Titulo">Titulo <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Titulo" name="Titulo" required="required" data-validation-length="3-12" class="form-control col-md-7 col-xs-12" value="<?php echo (!is_null($datosCarga)) ? $datosCarga[0]->slide_titulo : '' ;?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Descripcion">Descripcion <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="Descripcion" required="required" name="Descripcion" class="form-control col-md-7 col-xs-12" value=""><?php echo (!is_null($datosCarga)) ? $datosCarga[0]->slide_contenido : '' ;?></textarea>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Estado">Estado<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control select2_single " id="Estado" name="Estado" tabindex="-1" required="required">
                            <option></option>
                            <?php
                              foreach ($DatosEstado as $key) {
                                $carga =  (!is_null($datosCarga) and $datosCarga[0]->estado_id == $key->estado_id) ? 'selected' : '' ;
                                echo '<option value="'.$key->estado_id.'" '.$carga.' >'.$key->estado_nombre.'</option>';
                              }
                            ?>
                          </select>
                        </div>
                      </div>
                      <!-- Small modal -->
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Custom</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="URL" name="URL" required="required" placeholder="" class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo (!is_null($datosCarga)) ? $datosCarga[0]->slide_url : '' ;?>">
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-sm" >Cargar Imagen</button>
                        </div>
                      </div>
                      <!-- /modals -->
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
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
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabla de Slider <small>Usuario <?php echo $this->session->userdata('nombre'); ?></small></h2>
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
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                          <!--
                          <p class="text-muted font-13 m-b-30">
                            KeyTable provides Excel like cell navigation on any table. Events (focus, blur, action etc) can be assigned to individual cells, columns, rows or all cells.
                          </p>
                          -->
                          <table id="datatable-keytable" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>Nombre</th>
                                <th>Titulo</th>
                                <th>Descripcion</th>
                                <th>Imagne</th>
                                <th>Estado</th>
                                <th>Modificar</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
                              foreach ($Slide as $key) {
                                echo '<tr>';
                                  echo '<td>'.$key->slide_nombre.'</td>';
                                  echo '<td>'.$key->slide_titulo.'</td>';
                                  echo '<td>'.$key->slide_contenido.'</td>';
                                  echo '<td><img src="'.base_url('file/img').'/'.$key->slide_url.'" height="42" width="42"></td>';
                                  if ($key->estado_id == 1) {
                                    echo "<td>activo</td>";
                                  }
                                  else
                                  {
                                    echo "<td>inactivo</td>"; 
                                  }
                                  echo '<td><center><a href="'.base_url().'admin/ContenidoAdmin/inicio/'.$key->slide_id.'"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i> Editar</a></center></td>';
                                echo '</tr>';
                              }
                            ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>             
			</div>
		</div>
  </div>
  <!--modal imagen -->
  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
          </button>
          <h4 class="modal-title" id="myModalLabel2">Cargar imagen</h4>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url(); ?>/admin/Home/upload/1280/720/URL" class="dropzone" id="my-awesome-dropzone" ></form>
        </div>
        <div id="Alerta"></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
 
  </div>
  
  <!--modal imagen final-->

    <!-- /page content -->
    <?php 
      echo $footer;
    ?>