		    <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url(); ?>admin/login" class="site_title"><i class="fa fa-desktop"></i> <span>Transformaccion</span></a>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="<?php 
                echo ($this->session->userdata('imagen') == '' or is_null($this->session->userdata('imagen'))) ? base_url('file/img/uploader/img.png') : base_url('file').'/img/'.$this->session->userdata('imagen') ;
                ?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2><?php echo $this->session->userdata('nombre'); ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />
            <div class="clearfix"></div>
            <div class="clearfix"></div>
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <!--<div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-table"></i> Reporteria <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Metricas General</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Analityc">Analytic</a></li>
                    </ul>
                  </li>
                </ul>
              </div>-->
              <div class="menu_section">
                <h3>Admininstrar Contenidos</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-cog"></i>Paginas<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>admin/ContenidoAdmin/slider">SLIDER</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/ContenidoAdmin/parametria">PARAMETRIA</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/ContenidoAdmin/eventos">EVENTOS</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/ContenidoAdmin/exito">CASOS DE ÉXITO</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <?php 
                if ($this->session->userdata('programador') == 1) {
              ?>
              <div class="menu_section">
                <h3>Parametria Inicial</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i>Administrar<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>admin/ContenidoAdmin/usuarios">Usuarios</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Testeo Modulos</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/index.php/datos_js_1">Dashboard</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/index2.php/datos_js_2">Dashboard2</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/index3.php/datos_js_3">Dashboard3</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/form.php/datos_js_4">General Form</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/form_advanced.php/datos_js_5">Advanced Components</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/form_validation.php/datos_js_6">Form Validation</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/form_wizards.php/datos_js_7">Form Wizard</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/form_upload.php">Form Upload</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/form_buttons.php">Form Buttons</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/general_elements.php/datos_js_8">General Elements</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/media_gallery.php">Media Gallery</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/typography.php">Typography</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/icons.php">Icons</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/glyphicons.php">Glyphicons</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/widgets.php/datos_js_9">Widgets</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/invoice.php">Invoice</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/inbox.php/datos_js_10">Inbox</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/calendar.php/datos_js_11">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/tables.php">Tables</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/tables_dynamic.php/datos_js_12">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/chartjs.php/datos_js_13">Chart JS</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/chartjs2.php/datos_js_14">Chart JS2</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/morisjs.php/datos_js_15">Moris JS</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/echarts.php/datos_js_16">ECharts</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/other_charts.php/datos_js_17">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/fixed_sidebar.php/datos_js_18">Fixed Sidebar</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/fixed_footer.php/datos_js_19">Fixed Footer</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/e_commerce.php">E-commerce</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/projects.php">Projects</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/project_detail.php/datos_js_18">Project Detail</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/contacts.php">Contacts</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/profile.php/datos_js_19">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/page_403.php">403 Error</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/page_404.php">404 Error</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/page_500.php">500 Error</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/plain_page.php">Plain Page</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/login.php">Login Page</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/Home/menuviejo/pricing_tables.php">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?php echo base_url(); ?>admin/Home/menuviejo/level2.php">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>               
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>
              <?php 
                }
              ?>
            </div>
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <?php 
              if (isset($rol_id)) {
              ?>
                  <a data-toggle="tooltip" data-placement="top" title="Settings">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                  </a>
                  <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                  </a>
                  <a data-toggle="tooltip" data-placement="top" title="Lock">
                    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                  </a>
              <?php
              }
              ?>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url()?>admin/Login/cerrarSesion">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php 
                echo ($this->session->userdata('imagen') == '' or is_null($this->session->userdata('imagen'))) ? base_url('file/img/uploader/img.png') : base_url('file').'/img/'.$this->session->userdata('imagen') ;
                ?>" alt=""><?php echo $this->session->userdata('nombre'); ?></
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <!--
                    <li><a href="javascript:;"> Perfil</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    
                    <li><a href="javascript:;">Ayuda</a></li>
                    -->
                    <li><a href="<?php echo base_url()?>admin/Login/cerrarSesion"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesion</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green"><?= count($datos["noticias"]) ?></span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                  <?php 
                  if (is_null($datos["noticias"])) {
                    echo "<li>Sin Noticias</li>";
                  }
                  else
                  {
                    foreach ($datos["noticias"] as $key) {
                  ?>
                    <li>
                      <a href="<?php echo base_url().$key->noticia_url; ?>">
                        <span class="image"><img src="<?php 
                echo ($this->session->userdata('imagen') == '' or is_null($this->session->userdata('imagen'))) ? base_url('file/img/uploader/img.jpg') : base_url('file').'/'.$this->session->userdata('imagen') ;
                ?>" alt="Profile Image" /></span>
                        <span>
                          <span><?php echo $this->session->userdata('nombre'); ?></span>
                          <span class="time">Hace 
                          <?php                   
                          $datetime1 = new DateTime($key->noticia_fecha);
                          $datetime2 = new DateTime(date('Y-m-d H:i:s'));
                          echo $datetime1->diff($datetime2)->format('%R%a días %h horas');
                          ?>
                          </span>
                        </span>
                        <span class="message">
                          <?php echo $key->noticia_texto; ?>
                        </span>
                      </a>
                    </li>
                    
                    <?php
                    }
                    echo '<li><div class="text-center"><a><strong>See All Alerts</strong><i class="fa fa-angle-right"></i></a></div></li>';
                  }
                    ?>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
