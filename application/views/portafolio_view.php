       <div class="container"> 
          <div class="clients-area center wow fadeInDown">
              <h2 class="naranja">Personas Respetadas, Respetan Amway</h2>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12 col-sm-12">
              <center> 
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/ZRCqGXPiRUw" frameborder="0" allowfullscreen></iframe>
              </center>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-sm-12">
                <p class="lead" align="justify">Amway la empresa que profesionalizo y creo la industria de Network Marketing, es muy respetada y admirada por personalidades de talla mundial. Ejemplos como:</p>
                <p class="lead" align="justify">Jack Haire. Editor Time,
                Dr. Noel Brown. Presidente Amigos de las Naciones Unidas,
                Sam Jadallah. Vicepresidente de Ventas Microsoft,
                Stephen Covey. Autor del best seller Los 7 hábitos de las personas altamente efectiva.
                Entre muchos otros.</p>
                <p class="lead" align="justify">Amway no se encuentra en el negocio de la tecnología, ni es una moda y ni es algo del pasado. Es un negocio basado en principios de gente ayudando a personas ayudarse a sí mismas a través deconcepto económico del capitalismo solidario.</p>
            </div>
          </div>

        <div class="clients-area center wow fadeInDown">
                <h2 class="naranja">Casos de Éxito</h2>
            </div>
                <?php
                    foreach ($Exito as $key) {
                      if ($key->exito_link==NULL) {
                ?> 
                <div class="col-md-4 wow fadeInDown" data-toggle="modal" data-target="#myModal<?php echo $key->exito_id; ?>">
                    <div class="clients-comments">
                        <center>
                            <img id="casos-exito" src="<?php echo base_url(); ?>file/img/<?php echo $key->exito_url;?>" class="img-circle" alt="">
                        </center>
                        <center>
                            <h4><span><?php echo $key->exito_nombre;?><br></span> <?php echo $key->exito_nivel;?><br><b> <?php echo $key->exito_pais;?></b></h4>
                        </center>
                    </div>
                </div>

                <div id="myModal<?php echo $key->exito_id; ?>" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><?php echo $key->exito_nombre;?></h4>
                          </div>
                          <div class="modal-body">
                            <p><?php echo $key->exito_descripcion;?></p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                    </div>
                </div>

                <?php    
                      }else{
                ?>
                  <a href="<?php echo $key->exito_link; ?>" target="_blank">
                    <div class="col-md-4 wow fadeInDown">
                      <div class="clients-comments">
                          <center>
                              <img src="<?php echo base_url(); ?>file/img/<?php echo $key->exito_url;?>" class="img-circle" alt="">
                          </center>
                          <center>
                              <h4><span><?php echo $key->exito_nombre;?><br></span> <?php echo $key->exito_nivel;?><br><b> <?php echo $key->exito_pais;?></b></h4>
                          </center>
                      </div>
                  </div>
                </a>
                <?php         
                      }}
                ?>

           </div>

        </div><!--/.container-->