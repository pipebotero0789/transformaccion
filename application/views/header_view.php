 <header id="header">

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php if ($this->uri->segment(1).'/'.$this->uri->segment(2) == 'Inicio/index' or $this->uri->segment(1) == '') { ?>
                        <a class="navbar-brand" href="<?php echo base_url() ?>Inicio/index"><img src="<?php echo base_url() ?>file/images/logo.png" alt="logo"></a>
                    <?php } else {?>
                        <a class="navbar-brand" href="<?php echo base_url() ?>Inicio/index"><img src="<?php echo base_url() ?>file/images/logo.png" alt="logo"></a>
                    <?php } ?>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li <?= ($this->uri->segment(1).'/'.$this->uri->segment(2) == 'Inicio/index' or $this->uri->segment(1) == '' ) ? 'class="active"' : '' ?>><a href="<?php echo base_url() ?>Inicio/index" >Inicio</a></li>
                        <li <?= ($this->uri->segment(1).'/'.$this->uri->segment(2) == 'Inicio/quienes') ? 'class="active"' : '' ?>><a href="<?php echo base_url() ?>Inicio/quienes">¿Quiénes somos?</a></li>
                        <li <?= ($this->uri->segment(1).'/'.$this->uri->segment(2) == 'Inicio/educacion') ? 'class="active"' : '' ?>><a href="<?php echo base_url() ?>Inicio/informacion">Información</a></li>
                        <li <?= ($this->uri->segment(1).'/'.$this->uri->segment(2) == 'Inicio/galeria') ? 'class="active"' : '' ?>><a href="<?php echo base_url() ?>Inicio/casosdeexito">Casos de éxito</a></li>
                        <li <?= ($this->uri->segment(1).'/'.$this->uri->segment(2) == 'Inicio/contacto') ? 'class="active"' : '' ?>><a href="<?php echo base_url() ?>Inicio/estilodevida">Estilo de vida</a></li>
                        <li <?= ($this->uri->segment(1).'/'.$this->uri->segment(2) == 'Inicio/eventos') ? 'class="active"' : '' ?>><a href="<?php echo base_url() ?>Inicio/eventos">Eventos</a></li> 
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->