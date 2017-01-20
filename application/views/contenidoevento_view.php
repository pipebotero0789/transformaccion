<section id="blog" class="container">
        <div class="center">
            <h2>Eventos</h2>
            <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
        </div>

        <div class="blog">
            <div class="row">
                <div class="col-md-8">
                 <?php 
                    foreach ($datosImpresion as $key) {
                ?>   
                    <div class="blog-item">
                        <img class="img-responsive img-blog" src="<?php echo base_url() ?>file/img/<?php echo $key->evento_imagen;?>" width="100%" alt="" />
                            <div class="row">  
                                <div class="col-xs-12 col-sm-2 text-center">
                                 <?php
                                        setlocale(LC_TIME, 'es_ES.UTF-8');
                                    ?>
                                    <div class="entry-meta">
                                        <span id="publish_date"><?php echo strftime("%d %B %Y",strtotime($key->evento_fecha));?></span>
                                        <span><i class="fa fa-user"></i> <a href="#"> <?php echo $key->evento_orador;?></a></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-10 blog-content">
                                    <h2><?php echo $key->evento_nombre;?></h2>
                                    <p><?php echo $key->evento_contenido;?></p>

                                </div>
                            </div>
                        </div><!--/.blog-item-->
                        
                        <div class="media reply_section">
                            <div class="pull-left post_reply text-center">
                                <ul>
                                    <li><a href="http://<?php echo $key->evento_facebook;?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="http://<?php echo $key->evento_twitter;?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="media-body post_reply_content">
                                <h3><?php echo $key->evento_orador;?></h3>
                                <p class="lead"><?php echo $key->evento_biografia;?></p>
                            </div>
                        </div> 

                         <?php    
                            }
                        ?>
                        
                        <h1 id="comments_title"><?php echo count($datosComentario) ?> Comentarios</h1>
                        <?php 
                            if ($datosComentario != NULL) {
                            foreach ($datosComentario as $key) {
                        ?> 
                        <div class="media comment_section">
                            <div class="media-body post_reply_comments">
                                <h3><?php echo $key->comentario_nombre;?></h3>
                                <h4><?php echo strftime("%d %B %Y %X",strtotime($key->comentario_fecha));?></h4>
                                <p><?php echo $key->comentario_mensaje;?></p>
                            </div>
                        </div>
                        <?php    
                            }}else{
                                ?>
                                <h3>NO HAY NINGUN COMENTARIO</h3>
                        <?php
                            }
                        ?>
                        
                        <div id="contact-page clearfix">
                            <div class="status alert alert-success" style="display: none"></div>
                            <div class="message_heading">
                                <h4>Déjanos tu opinión: </h4>
                                <p>Cuéntanos qué fue lo que más te gustó del evento y si te interesa obtener más información.</p>
                            </div> 

                            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="<?php echo base_url(); ?>/Inicio/crearComentario/<?php echo $datosImpresion[0]->evento_id; ?>" role="form">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label>Nombre y Apellido *</label>
                                            <input type="text" class="form-control" name="Nombre" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Correo Electrónico *</label>
                                            <input type="email" class="form-control" name="Correo" required>
                                        </div>            
                                    </div>
                                    <div class="col-sm-7">                        
                                        <div class="form-group">
                                            <label>Mensaje *</label>
                                            <textarea name="Mensaje" id="message" required class="form-control" rows="8"></textarea>
                                        </div>                        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg" required="required">Enviar Comentario</button>
                                        </div>
                                    </div>
                                </div>
                            </form>     
                        </div><!--/#contact-page-->
                    </div><!--/.col-md-8-->

                <aside class="col-md-4">
    				<div class="widget archieve">
                        <h3><b>Eventos Mensuales</b></h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="blog_archieve">
                                <?php
                                foreach ($porfecha as $key) {
                                    echo '<li><i class="fa fa-angle-double-right"></i><b> '.$key['mes'].'<span class="pull-right">('.count($key['datos']).')</span></a></b></li>';
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

         </div><!--/.blog-->

    </section><!--/#blog-->