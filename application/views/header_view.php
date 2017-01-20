 <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i> <?= $telefono ?></p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="<?= $facebook; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?= $twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="<?= $linkedin; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li> 
                            </ul>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url() ?>Inicio/index"><img src="<?php echo base_url() ?>file/images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li <?= ($this->uri->segment(1).'/'.$this->uri->segment(2) == 'Inicio/index' or $this->uri->segment(1) == '' ) ? 'class="active"' : '' ?>><a href="<?php echo base_url() ?>Inicio/index" >Inicio</a></li>
                        <li <?= ($this->uri->segment(1).'/'.$this->uri->segment(2) == 'Inicio/quienes') ? 'class="active"' : '' ?>><a href="<?php echo base_url() ?>Inicio/quienes">¿Quiénes somos?</a></li>
                        <li <?= ($this->uri->segment(1).'/'.$this->uri->segment(2) == 'Inicio/educacion') ? 'class="active"' : '' ?>><a href="<?php echo base_url() ?>Inicio/educacion">Educación</a></li>
                        <li <?= ($this->uri->segment(1).'/'.$this->uri->segment(2) == 'Inicio/galeria') ? 'class="active"' : '' ?>><a href="<?php echo base_url() ?>Inicio/galeria">Galería</a></li>
                        <li <?= ($this->uri->segment(1).'/'.$this->uri->segment(2) == 'Inicio/eventos') ? 'class="active"' : '' ?>><a href="<?php echo base_url() ?>Inicio/eventos">Eventos</a></li> 
                        <li <?= ($this->uri->segment(1).'/'.$this->uri->segment(2) == 'Inicio/contacto') ? 'class="active"' : '' ?>><a href="<?php echo base_url() ?>Inicio/contacto">Contacto</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->