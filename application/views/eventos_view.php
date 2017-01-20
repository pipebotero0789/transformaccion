<section id="blog" class="container">
        <div class="center">
            <h2>Eventos</h2>
            <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
        </div>
        <div class="blog">
            <div class="row">             
                 <div class="col-md-8">
                 <?php
                    foreach ($Eventos as $key) {
                ?>   
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 text-center">
                                <div class="entry-meta">
                                    
                                    <?php
                                        setlocale(LC_TIME, 'es_ES.UTF-8');
                                    ?>
                                    <span id="publish_date"><?php echo strftime("%d %B %Y",strtotime($key->evento_fecha));?></span>
                                    <span><i class="fa fa-user"></i> <a href="#"><?php echo $key->evento_orador;?></a></span>
                                </div>
                            </div>
                                
                            <div class="col-xs-12 col-sm-10 blog-content">
                                <a href="<?= base_url(); ?>/Inicio/conteEvento/<?= $key->evento_id; ?>/evento"><img class="img-responsive img-blog" src="<?php echo base_url() ?>file/img/<?php echo $key->evento_imagen;?>" width="100%" alt="" /></a>
                                <h2><a href="<?= base_url(); ?>/Inicio/conteEvento/<?= $key->evento_id; ?>/evento"><?php echo $key->evento_nombre;?></a></h2>
                                <h3><?php echo $key->evento_resumen;?></h3>
                                <a class="btn btn-primary readmore" href="<?= base_url(); ?>/Inicio/conteEvento/<?= $key->evento_id; ?>/evento">Read More<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
                <?php    
                    }
                ?>

                </div><!--/.col-md-8-->

                <aside class="col-md-4">
    				
    				<div class="widget archieve">
                        <h3><b>Eventos Mensuales</b></h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="blog_archieve">
                                <?php
                                foreach ($porfecha as $key) {
                                    echo '<li><i class="fa fa-angle-double-right"></i><b> '.$key['mes'].'<span class="pull-right">('.count($key['datos']).')</span></b></a></li>';
                                    foreach ($key['datos'] as $key1) {
                                        echo '<a href="#">'.$key1['evento_nombre'].'</a>';
                                    }
                                }
                                ?>
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.archieve-->
    				
    			</aside>  
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->