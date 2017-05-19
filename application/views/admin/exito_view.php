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
                    <form class="form-horizontal form-label-left"  method="post" action="<?= base_url(''); ?>/admin/Exito/guardarExito" novalidate>
                    <!--
                      <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                      </p>
                      -->
                      <span class="section">Casos de Éxito</span>
                      <?php 
                        if(!is_null($datosCarga)){
                          echo '<input type="text" id="id" name="id" value="'.$datosCarga[0]->exito_id .'" hidden="true">';
                          
                        }
                      ?>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Nombre">Nombre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Nombre" class="form-control col-md-7 col-xs-12" name="Nombre" placeholder="" required="required" type="text" data-validation-length="3-12" data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)" value="<?php echo (!is_null($datosCarga)) ? $datosCarga[0]->exito_nombre : '' ;?>">
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
                      <!-- Small modal -->
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto 182px * 182px <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="URL" name="URL" required="required" placeholder="" class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo (!is_null($datosCarga)) ? $datosCarga[0]->exito_url : '' ;?>">
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-sm" >Cargar Imagen</button>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="profesion">Profesion <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="profesion" class="form-control col-md-7 col-xs-12" name="profesion" placeholder="" required="required" type="text" data-validation-length="3-12" data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)" value="<?php echo (!is_null($datosCarga)) ? $datosCarga[0]->exito_profesion : '' ;?>">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Nivel">Nivel <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Nivel" class="form-control col-md-7 col-xs-12" name="Nivel" placeholder="" required="required" type="text" data-validation-length="3-12" data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)" value="<?php echo (!is_null($datosCarga)) ? $datosCarga[0]->exito_nivel : '' ;?>">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Pais">Pais <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Pais" class="form-control col-md-7 col-xs-12" name="Pais" placeholder="" required="required" type="text" data-validation-length="3-12" data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)" value="<?php echo (!is_null($datosCarga)) ? $datosCarga[0]->exito_pais : '' ;?>">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Link">Link</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Link" class="form-control col-md-7 col-xs-12" name="Link" placeholder="" type="text" data-validation-length="3-12" data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)" value="<?php echo (!is_null($datosCarga)) ? $datosCarga[0]->exito_link : '' ;?>">
                        </div>
                      </div>

                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Link">Descripción</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="x_content">
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
                            <div id="editor" class="editor-wrapper"><?php echo (!is_null($datosCarga)) ? $datosCarga[0]->exito_descripcion : '' ;?></div>                 
                          </div>
                          </div>
                      </div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="Descripcion" name="Descripcion" class="form-control col-md-7 col-xs-12" value="" style="visibility:hidden"></textarea>
                        </div>
                      </div>
                      <!--text area editor -->
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
                                <th>Imagen</th>
                                <th>profesion</th>
                                <th>Nivel</th>
                                <th>Pais</th>
                                <th>Modificar</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                            if($Slide != NULL){ 
                              foreach ($Slide as $key) {
                                echo '<tr>';
                                  echo '<td>'.$key->exito_nombre.'</td>';
                                  echo '<td><img src="'.base_url('file/img').'/'.$key->exito_url.'" height="42" width="42"></td>';
                                  echo '<td>'.$key->exito_profesion.'</td>';
                                  echo '<td>'.$key->exito_nivel.'</td>';
                                  echo '<td>'.$key->exito_pais.'</td>';
                                  if ($key->estado_id == 1) {
                                    echo "<td>activo</td>";
                                  }
                                  else
                                  {
                                    echo "<td>inactivo</td>"; 
                                  }
                                  echo '<td><center><a href="'.base_url().'admin/ContenidoAdmin/exito/'.$key->exito_id.'"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i> Editar</a></center></td>';
                                echo '</tr>';
                              }
                              }else{
                                    echo '<tr>';
                                    echo '<td> NO HAY DATOS</td>';
                                    echo '<td> NO HAY DATOS</td>';
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
          <form action="<?php echo base_url(); ?>/admin/Home/upload/182/182/URL" class="dropzone" id="my-awesome-dropzone" ></form>
        </div>
        <div id="AlertaURL"></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

    <!-- /page content -->
    <?php 
      echo $footer;
    ?>