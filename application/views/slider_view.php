<section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
            <?php 
                $conteo = 0;
                foreach ($Slide as $key) {
            ?>
                <li data-target="#main-slider" data-slide-to="<?php echo $conteo ?>" <?php echo ($conteo==0) ? 'class="active"' : '' ;?>></li>
            <?php    
                    $conteo = $conteo+1;  
                }
            ?>
            </ol>
            <div class="carousel-inner">
                <?php 
                    $conteo = 0;
                        foreach ($Slide as $key) {
                ?>
                <div class="item <?php echo ($conteo==0) ? 'active' : '' ;?>" style="background-image: url(<?php echo base_url(); ?>/file/img/<?php echo $key->slide_url;?>)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1"><?php echo $key->slide_titulo;?></h1>
                                    <h2 class="animation animated-item-2"><?php echo $key->slide_subtitulo;?></h2>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="<?php echo base_url(); ?>/file/img/<?php echo $key->slide_urlpeque;?>" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->
                 <?php    
                        $conteo = $conteo+1;  
                    }
                ?>
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->