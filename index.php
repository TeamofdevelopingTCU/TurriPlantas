<!DOCTYPE html>
<html lang="en">

    <head>

        <meta http-equiv="content-type" content="text/html; charset=UTF-8">

        <title>Turriplantas</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">

        <!-- Bootstrap Css -->
        <link href="bootstrap-assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Style -->
        <link href="plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="plugins/owl-carousel/owl.theme.css" rel="stylesheet">
        <link href="plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
        <link href="plugins/Lightbox/dist/css/lightbox.css" rel="stylesheet">
        <link href="plugins/Icons/et-line-font/style.css" rel="stylesheet">
        <link href="plugins/animate.css/animate.css" rel="stylesheet">
        <link rel="icon" href="imagenes/logo.png" type="image/x-icon"> 
        <link href="css/main.css" rel="stylesheet">
        <!-- Icons Font -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <?php
        include './Business/AdministratorBusiness.php';
        include './Business/ImageBusiness.php';
        include './Business/OrganizationBusiness.php';
        include './Business/PlantBusiness.php';
        include './Business/VarietyBusiness.php';
        ?>


    </head>

    <body>
        <!-- Preloader
            ============================================= -->
        <div class="preloader"><i class="fa fa-circle-o-notch fa-spin fa-2x"></i></div>
        <!-- Header
            ============================================= -->
        <section class="main-header">
            <br><br>
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="imagenes/logo.png" class="img-responsive" alt="logo" style="width:65px; height: 65px;"></a>
                    </div>
                    <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                        <div class="col-md-8 col-xs-12 nav-wrap">
                            <ul class="nav navbar-nav">
                                <li><a href="#owl-hero" class="page-scroll">Inicio</a></li>
                                <li><a href="#services" class="page-scroll">Acerca de</a></li>
                                <li><a href="#work-process" class="page-scroll">Productos</a></li>
                                <li><a href="#contact" class="page-scroll">Contacto</a></li>
                                <li><a href="#fun-facts" class="page-scroll">Localizacion</a></li>                                
                            </ul>
                        </div>
                        <div class="social-media hidden-sm hidden-xs">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <?php
                $imageBusiness = new ImageBusiness();
                $image = $imageBusiness->getImagesHome();
            ?>

            <div id="owl-hero" class="owl-carousel owl-theme">                
                <?php echo '<div class="item" style="background-image: url(imagenes/imagesHome/'.$image[0]->imagePath.')"> 
                    <div class="caption">                    
                        <h1>Turri<span>Plantas</span></h1> 
                        <h6>¡La calidad no nace, se hace!</h6>                    
                    </div>
                </div>';  ?>                         
                <?php                  
                 for($i = 1; $i < sizeof($image)-1; $i++){
                   echo ' <div class="item" style="background-image: url(imagenes/imagesHome/'.$image[$i]->imagePath.')"></div>';
                 }
                 ?>                      
            </div>
        </section>

        <!-- Welcome
            ============================================= -->
        <section id="welcome">
            <div class="container zomm">
                <h2>Bienvenidos a <span>TurriPlantas</span></h2>
                <hr class="sep">
                <p>¡La calidad no nace, se hace!</p>
                <img class="img-responsive center-block wow fadeInUp" data-wow-delay=".3s" src="imagenes/logo.png" alt="logo" style="width:160px; height: 160px;">
            </div>
        </section>

        <!-- Services
            ============================================= -->

        <?php
        $organizationBusiness = new OrganizationBusiness();
        $organization = $organizationBusiness->getOrganization();
        ?>
        <section id="services">
            <br><br>
            <div class="container">
                <h2 class="zoom">Turri Plantas</h2>
                <hr class="light-sep">
                <p class="text-justify"><?php echo $organization->history; ?></p>
                <div class="services-box">
                    <div class="row wow fadeInUp" data-wow-delay=".3s">
                        <div class="col-md-4">
                            <div class="media-left"><span class="icon-lightbulb"></span></div>
                            <div class="media-body zoom">
                                <h3>Misión</h3>
                                <p class="text-justify"><?php echo $organization->mission; ?></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="media-left"><span class="icon-mobile"></span></div>
                            <div class="media-body zoom">
                                <h3>Visión</h3>
                                <p class="text-justify"><?php echo $organization->view; ?></p>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="media-left"><span class="icon-compass"></span></div>
                            <div class="media-body zoom">
                                <h3>Valores</h3>
                                <ul class="text-justify" style="color: white;">
                                    <?php
                                    $value = explode(";", $organization->values);
                                    $max = sizeof($value);                                   
                                    for ($i = 0; $i < $max; $i++) {
                                        echo '<li>'.$value[$i].'</li>';
                                    }
                                    ?>                                    
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section id="work-process">
            <br><br>
            <div class="container">
                <h2>Productos</h2>
                <hr class="sep">
                <p class="text-justify">Nuestros productos son plantas vivas para ser conservadas en maceteros o para reproducción.</p>

                <p class="text-justify"> Se maneja una amplia gama de plantas ornamentales que son exportadas según la necesidad de

                    nuestros clientes en las siguientes formas:</p>                  


                <div class="row wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-lg-3">                                                
                        <a href="single-page.php" ><h4 style="color: #398439">Plantas sin raíz</h4></a>
                    </div>
                    <div class="col-lg-3">

                        <a href="single-page.php"><h4 style="color: #398439">Plantas con raíz</h4></a>
                    </div>
                    <div class="col-lg-3">

                        <a href="single-page.php"><h4 style="color: #398439">Plantas enraizadas en cubo de oasis</h4></a>
                    </div>
                    <div class="col-lg-3">

                        <a href="single-page.php"><h4 style="color: #398439">Plantas en callosidad</h4></a>
                    </div>
                </div>
                <br><br>
                <p class="text-justify">Se trabaja en la demanda con los tamaños. Siendo nuestra especialidad tamaños pequeños que
                    van desde 6/8” hasta 15/18” en altura.</p>
            </div>
        </section>
        <!-- Portfolio
            ============================================= -->
        <section id="portfolio">
            <br><br>
            <div class="container-fluid">
                <h2 class="zoom">Variedades</h2>
                <hr class="sep">

                <div class="row">
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                        <a class="portfolio-box" href="single-page.php">
                            <img src="imagenes/agro.jpg" class="img-responsive imgWork" alt="1">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Codeaum Variegatum Spp (Croton)
                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                        <a href="single-page.php" class="portfolio-box" >
                            <img src="imagenes/croton.jpg" class="img-responsive imgWork" alt="2">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Dracaenas Spp
                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                        <a href="single-page.php" class="portfolio-box" >
                            <img src="imagenes/draca.jpg" class="img-responsive imgWork" alt="3" >
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Dracaenas Deremensis Spp
                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>                    
                </div>
            </div>
        </section>     
        <!-- Testimonials
            ============================================= -->
        <section id="testimonials">
            <br><br>
            <div class="container">
                <h2>¿Que caracteriza nuestra finca?</h2>
                <hr class="light-sep">            
                <div id="owl-testi" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="quote">
                            <i class="fa fa-quote-left left fa-2x"></i>
                            <h5>Turriplantas se caracteriza por producir plantas de alta calidad, dando prioridad a la satisfacción de

                                nuestros clientes sin miedo al futuro, e innovamos de acuerdo a sus necesidades. Produciendo en

                                armonía con la naturaleza, para lo cual se cuenta con un sistema agroforestal funcional, donde se

                                mezclan las plantas ornamentales con árboles maderables.<span></span>.<i class="fa fa-quote-right right fa-2x"></i></h5>

                        </div>
                    </div>
                    <div class="item">
                        <div class="quote">
                            <i class="fa fa-quote-left left fa-2x"></i>
                            <h5>Además de la producción de plantas ornamentales, se cuenta con 34 variedades de árboles

                                maderables nativos, manteniendo un aproximado de 1300 árboles en activo crecimiento junto a

                                las plantas ornamentales, logrando un ambiente propicio para la producción y a la vez se garantiza

                                el abastecimiento de madera para la infraestructura necesaria dentro de la propia finca. <span></span>.<i class="fa fa-quote-right right fa-2x"></i></h5>

                        </div>
                    </div>
                    <div class="item">
                        <div class="quote">
                            <i class="fa fa-quote-left left fa-2x"></i>
                            <h5>Se cuenta con una fuente de agua propia haciendo a Turriplantas un gran aliado y protector del

                                medio y se aporta a la zona con un paisaje hermoso.<span></span>.<i class="fa fa-quote-right right fa-2x"></i></h5>

                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Contact Us
            ============================================= -->
        <section id="contact">
            <br><br>
            <div class="container">
                <h2>Contacto Us</h2>
                <hr class="sep">
                <p>Get In Touch</p>
                <div class="col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay=".3s">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="Name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="Email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                        </div>
                        <a href="#" class="btn-block">Send</a>
                    </form>
                </div>
            </div>
        </section>
        <!-- Google Map
            ============================================= -->
        <section id="fun-facts">
            <br><br>
            <div class="container">
                <h2 class="zoom">LOCALIZACION</h2>
                <hr class="light-sep">
                <p class="text-justify"><?php echo $organization->location; ?></p>

            </div>
        </section>
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.3559305394588!2d-83.62921468578264!3d9.90428449291681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0d4f3ca877861%3A0x3052cc28f4e6435c!2sTurriplantas+S.A.!5e0!3m2!1sen!2scr!4v1478031724439" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- Footer
            ============================================= -->
        <footer>
            <div class="container">
                <div class="social">
                    <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                </div>
                <h6>&copy; 2015 Rise.Development By BootstrapDev</h6>
            </div>
        </footer>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap-assets/js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
        <!-- JS PLUGINS -->
        <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="plugins/countTo/jquery.countTo.js"></script>
        <script src="plugins/inview/jquery.inview.min.js"></script>
        <script src="plugins/Lightbox/dist/js/lightbox.min.js"></script>
        <script src="plugins/WOW/dist/wow.min.js"></script>
        <!-- GOOGLE MAP -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
    </body>

</html>