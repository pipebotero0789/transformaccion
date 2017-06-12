    
    <footer id="footer" class="midnight-blue">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                         &copy; 2017 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Transformaccion</a>. Derechos reservados.
                    </div>
                    <div class="col-sm-6 col-xs-12">
                       <div class="social">
                            <ul class="social-share">
                                <li> transformaccion.org@gmail.com <i class="fa fa-send"></i> </li>
                                <li><a href="https://www.youtube.com/channel/UC78YrwX4IvODvM9CtCXUk9w" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
    </footer><!--/#footer-->

    <script src="<?php echo base_url() ?>file/js/jquery.js"></script>
    <script src="<?php echo base_url() ?>file/js/fitvids.js"></script>
    <script src="<?php echo base_url() ?>file/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>file/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url() ?>file/js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url() ?>file/js/main.js"></script>
    <script src="<?php echo base_url() ?>file/js/wow.min.js"></script>

    <script>
        $(document).ready(function(){
         $(".videos").fitVids(); 
        });
    </script>
    
    <script type="text/javascript">
        $(document).ready(function () {
            $('.carousel').carousel({
                interval: 5000
            });

            $('.carousel').carousel('cycle');
        });
    </script>  
</body>
</html>