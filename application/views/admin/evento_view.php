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
                    <h2>EVENTOS<small> USUARIO <?php echo $this->session->userdata('nombre'); ?></small></h2>
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
                    <form class="form-horizontal form-label-left"  method="post" action="<?= base_url(''); ?>/admin/Evento/guardarEvento" novalidate>
                    <!--
                      <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                      </p>
                      -->
                      <span class="section">Agregar Evento</span>
                      <?php 
                        if(!is_null($datosCarga)){
                          echo '<input type="text" id="id" name="id" value="'.$datosCarga[0]->evento_id .'" hidden="true">';
                          
                        }
                      ?>

                      <!-- Small modal -->
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Imagen del Evento <span class="required">*</span> 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="URL" name="URL" required="required" placeholder="" class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo (!is_null($datosCarga)) ? $datosCarga[0]->evento_imagen : '' ;?>">
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-sm" >Cargar Imagen</button>
                        </div>
                      </div>
                      <!-- Small modal -->

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Nombre">Nombre del Evento <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Nombre" class="form-control col-md-7 col-xs-12" name="Nombre" placeholder="" required="required" type="text" data-validation-length="3-12" data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)" value="<?php echo (!is_null($datosCarga)) ? $datosCarga[0]->evento_nombre : '' ;?>">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Resumen">Resumen del Evento <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Resumen" class="form-control col-md-7 col-xs-12" name="Resumen" placeholder="" required="required" type="text" data-validation-length="3-12" data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)" value="<?php echo (!is_null($datosCarga)) ? $datosCarga[0]->evento_resumen : '' ;?>">
                        </div>
                      </div>

                      <!--text area editor -->
                      <div class="item form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Contenido Evento <span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <div id="alerts"></div>
                            <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
                              <div class="btn-group">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                </ul>
                              </div>
                              <div class="btn-group">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                  <li>
                                    <a data-edit="fontSize 5">
                                      <p style="font-size:17px">Huge</p>
                                    </a>
                                  </li>
                                  <li>
                                    <a data-edit="fontSize 3">
                                      <p style="font-size:14px">Normal</p>
                                    </a>
                                  </li>
                                  <li>
                                    <a data-edit="fontSize 1">
                                      <p style="font-size:11px">Small</p>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <div class="btn-group">
                                <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                                <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                                <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                                <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                              </div>
                              <div class="btn-group">
                                <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                                <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                                <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                                <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                              </div>
                              <div class="btn-group">
                                <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                                <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                                <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                                <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                              </div>
                              <div class="btn-group">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                                <div class="dropdown-menu input-append">
                                  <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                                  <button class="btn" type="button">Add</button>
                                </div>
                                <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                              </div>
                              <div class="btn-group">
                                <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                                <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                              </div>
                              <div class="btn-group">
                                <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                                <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                              </div>
                            </div>
                            <div id="editor" class="editor-wrapper" required="required"><?php echo (!is_null($datosCarga)) ? $datosCarga[0]->evento_contenido : '' ;?></div>                 
                          </div>
                      </div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="Descripcion" required="required" name="Descripcion" class="form-control col-md-7 col-xs-12" value="" style="visibility:hidden"></textarea>
                        </div>
                      </div>
                      <!--text area editor -->

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Orador">Nombre del Orador <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Orador" class="form-control col-md-7 col-xs-12" name="Orador" placeholder="" required="required" type="text" data-validation-length="3-12" data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)" value="<?php echo (!is_null($datosCarga)) ? $datosCarga[0]->evento_orador : '' ;?>">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Orador">Perfil del orador <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Descripcion1" class="form-control col-md-7 col-xs-12" name="Descripcion1" placeholder="" required="required" type="text" data-validation-length="3-12" data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)" value="<?php echo (!is_null($datosCarga)) ? $datosCarga[0]->evento_biografia : '' ;?>">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Fecha">Fecha Evento <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Fecha" class="date-picker form-control col-md-7 col-xs-12" name="Fecha" required="required" type="text" value="<?php echo (!is_null($datosCarga)) ? date('m-d-Y',strtotime($datosCarga[0]->evento_fecha)) : '' ;?>">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Face">Orador Facebook <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Face" class="form-control col-md-7 col-xs-12" name="Face" placeholder="" required="required" type="text" data-validation-length="3-12" data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)" value="<?php echo (!is_null($datosCarga)) ? $datosCarga[0]->evento_facebook : '' ;?>">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Twit">Orador Twitter <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Twit" class="form-control col-md-7 col-xs-12" name="Twit" placeholder="" required="required" type="text" data-validation-length="3-12" data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)" value="<?php echo (!is_null($datosCarga)) ? $datosCarga[0]->evento_twitter : '' ;?>">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Estado">Estado <span class="required">*</span></label>
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

                      <!-- /modals -->
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancelar</button>
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
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabla de Eventos <small>Usuario <?php echo $this->session->userdata('nombre'); ?></small></h2>
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
                                <th>Imagen</th>
                                <th>Estado</th>
                                <th>Descripción</th>
                                <th>Resumen</th>
                                <th>Orador</th>
                                <th>Perfil Orador</th>
                                <th>Editar</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                            if($Slide != NULL){ 
                              foreach ($Slide as $key) {
                                echo '<tr>';
                                  echo '<td>'.$key->evento_nombre.'</td>';
                                  echo '<td><img src="'.base_url('file/img').'/'.$key->evento_imagen.'" height="42" width="42"></td>';
                                  if ($key->estado_id == 1) {
                                    echo "<td>activo</td>";
                                  }
                                  else
                                  {
                                    echo "<td>inactivo</td>"; 
                                  }
                                  echo '<td>'.$key->evento_contenido.'</td>';
                                  echo '<td>'.$key->evento_resumen.'</td>';
                                  echo '<td>'.$key->evento_orador.'</td>';
                                  echo '<td>'.$key->evento_biografia.'</td>';


                                  echo '<td><center><a href="'.base_url().'admin/ContenidoAdmin/eventos/'.$key->evento_id.'"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i> Editar</a></center></td>';
                                echo '</tr>';
                              }
                              }else{
                                    echo '<tr>';
                                    echo '<td> NO HAY DATOS</td>';
                                    echo '<td> NO HAY DATOS</td>';
                                    echo '<td> NO HAY DATOS</td>';
                                    echo '<td> NO HAY DATOS</td>';
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
          <form action="<?php echo base_url(); ?>/admin/Home/upload/730/293/URL" class="dropzone" id="my-awesome-dropzone" ></form>
        </div>
        <div id="AlertaURL"></div>
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