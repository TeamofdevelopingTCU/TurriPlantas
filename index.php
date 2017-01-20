<?php
if (!isset($_SESSION)) {
    session_start();
}
$tags = array('Inicio', 'Acerca de', 'Productos', 'Contacto',
    'Localización', 'Bienvenidos a Turriplantas', '¡La calidad no nace, se hace!',
    'Misión', 'Visión', 'Valores', '¿Qué productos vendemos?', 'Nuestros '
    . 'productos son plantas vivas para ser conservadas en maceteros o para '
    . 'reproducción. Se maneja una amplia gama de plantas ornamentales que son '
    . 'exportadas según la necesidad de nuestros clientes. Las plantas se pueden '
    . 'vender de las siguientes formas: ', 'Se trabaja con respecto a la demanda, '
    . 'con tamaños según la necesidad del cliente, siendo nuestra especialidad '
    . 'tamaños pequeños que van desde 6/8” hasta 15/18” en altura. ', 'Variedades',
    '¿Qué caracteriza nustra finca?', 'Contacto', 'Para cualquier consulta escríbanos, '
    . 'nos gustaría saber de tí y de tus opiniones sobre Turriplantas.', 'Nombre',
    'Teléfono', 'Correo electrónico', 'Mensaje', 'Enviar', 'Desarrolladores',
    'Localización');
if (!isset($_GET['lang'])) {
    $_SESSION['lang'] = 'es';
    $lang = 'es';
} else {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
    if ($lang == 'es') {
        $tags = array('Inicio', 'Acerca de', 'Productos', 'Contacto',
            'Localización', 'Bienvenidos a Turriplantas', '¡La calidad no nace, se hace!',
            'Misión', 'Visión', 'Valores', '¿Qué productos vendemos?', 'Nuestros '
            . 'productos son plantas vivas para ser conservadas en maceteros o para '
            . 'reproducción. Se maneja una amplia gama de plantas ornamentales que son '
            . 'exportadas según la necesidad de nuestros clientes. Las plantas se pueden '
            . 'vender de las siguientes formas: ', 'Se trabaja con respecto a la demanda, '
            . 'con tamaños según la necesidad del cliente, siendo nuestra especialidad '
            . 'tamaños pequeños que van desde 6/8” hasta 15/18” en altura. ', 'Variedades',
            '¿Qué caracteriza nustra finca?', 'Contacto', 'Para cualquier consulta escríbanos, '
            . 'nos gustaría saber de tí y de tus opiniones sobre Turriplantas.', 'Nombre',
            'Teléfono', 'Correo electrónico', 'Mensaje', 'Enviar', 'Desarrolladores',
            'Localización');
    } else {
        $tags = array('Index', 'About', 'Products', 'Contact',
            'Location', 'Welcome to Turriplantas', 'Best grown quality',
            'Mission', 'Vission', 'Values', 'Our products', 'Our products are live '
            . 'plants to be kept in pots or for reproduction. It manages a wide '
            . 'range of ornamental plants that are exported according to the need '
            . 'of our customers. The plants can be sold in the following ways: '
            , 'We work with respect to the demand, with sizes according to the '
            . 'customers need, being our specialty small sizes ranging from 6/8" '
            . 'to 15/18" in height.', 'Varieties',
            'What characterizes our farm?', 'Contact US', ''
            . 'We would like to hear from you and your opinions about us.',
            'Name', 'Phone', 'E-mail', 'Message', 'Send',
            'Developers', 'Location');
    }
}
?>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/validateFields.js" type="text/javascript"></script>
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
        include './Business/ProductBusiness.php';
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
                            <span class="sr-only">Turriplantas</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="imagenes/logo.png" class="img-responsive" alt="logo" style="width:65px; height: 65px;"></a>
                    </div>
                    <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                        <div class="col-md-8 col-xs-12 nav-wrap">
                            <ul class="nav navbar-nav">
                                <li><a href="#owl-hero" class="page-scroll"><?php echo $tags[0]; ?></a></li>
                                <li><a href="#services" class="page-scroll"><?php echo $tags[1]; ?></a></li>
                                <li><a href="#work-process" class="page-scroll"><?php echo $tags[2]; ?></a></li>
                                <li><a href="#contact" class="page-scroll"><?php echo $tags[3]; ?></a></li>
                                <li><a href="#fun-facts" class="page-scroll"><?php echo $tags[4]; ?></a></li> 

                            </ul>

                        </div>

                        <div class="social-media hidden-sm hidden-xs">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>    
                                <?php
                                if ($lang == 'es') {
                                    echo '<li><a href="./index.php?lang=en"><img src="./imagenes/en_flag.jpg"/></a></li>';
                                } else {
                                    echo '<li><a href="./index.php?lang=es"><img src="./imagenes/es_flag.png"/></a></li>';
                                }
                                ?>
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

                <?php
                for ($i = 0; $i < sizeof($image); $i++) {
                    if ($i == 1) {
                        echo
                        '<div class="item" style="background-image: url(imagenes/imagesHome/' . $image[$i]->imagePath . ')"> 
                                        <div class="caption">                    
                                            <h1>Turriplantas</span></h1> 
                                            <h6>' . $tags[6] . '</h6>                    
                                        </div>
                                    </div>';
                    } else {
                        echo ' <div class="item" style="background-image: url(imagenes/imagesHome/' . $image[$i]->imagePath . ')"></div>';
                    }
                }
                ?>                      
            </div>
        </section>

        <!-- Welcome
            ============================================= -->
        <section id="welcome">
            <div class="container zomm">
                <h2><?php echo $tags[5]; ?></span></h2>
                <hr class="sep">
                <p><?php echo $tags[6]; ?></p>
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
                <h2 class="zoom">Turriplantas</h2>
                <hr class="light-sep">
                <p class="text-justify"><?php echo $organization->history; ?></p>
                <div class="services-box">
                    <div class="row wow fadeInUp" data-wow-delay=".3s">
                        <div class="col-md-4">
                            <div class="media-left"><span class="icon-lightbulb"></span></div>
                            <div class="zoom"><div class="media-body">
                                    <h3><?php echo $tags[7]; ?></h3>
                                    <p class="text-justify"><?php echo $organization->mission; ?></p>
                                </div></div>
                        </div>
                        <div class="col-md-4">
                            <div class="media-left"><span class="icon-mobile"></span></div>
                            <div class="zoom"><div class="media-body">
                                    <h3><?php echo $tags[8]; ?></h3>
                                    <p class="text-justify"><?php echo $organization->view; ?></p>
                                </div></div>

                        </div>
                        <div class="col-md-4">
                            <div class="media-left"><span class="icon-compass"></span></div>
                            <div class="zoom"><div class="media-body">
                                    <h3><?php echo $tags[9]; ?></h3>
                                    <ul class="text-justify" style="color: white;">
                                        <?php
                                        $value = explode(";", $organization->values);
                                        $max = sizeof($value);
                                        for ($i = 0; $i < $max; $i++) {
                                            echo '<li>' . $value[$i] . '</li>';
                                        }
                                        ?>                                    
                                    </ul>
                                </div>

                            </div></div>

                    </div>
                </div>
            </div>
        </section>
        <section id="work-process">
            <br><br>
            <div class="container">
                <h2 class="zoom"><?php echo $tags[10]; ?></h2>
                <hr class="sep">
                <p class="text-justify"><?php echo $tags[11]; ?>
                </p>                  

                <div class="row wow fadeInUp" data-wow-delay=".3s">
                    <?php
                    $productBusiness = new ProductBusiness();
                    $products = $productBusiness->getAllProducts();
                    foreach ($products as $currentProduct) {
                        ?>
                        <div class="col-lg-3">  
                            <?php echo '<img class="img-responsive zoom" style="width: 150px; height: 150px; position: relative; left: 65px;" src="./imagenes/' . $currentProduct->getImagePath() . '" alt=""/>'; ?>
                            <h4 class="zoom" style="color: #398439;"><?php echo $currentProduct->getNameProduct(); ?> </h4>
                        </div> 
                        <?php
                    }
                    ?>
                </div>
                <br><br>
                <p class="text-justify">
                    <?php echo $tags[12]; ?>
                </p>
            </div>
        </section>
        <!-- Portfolio
            ============================================= -->
        <section id="portfolio">
            <br><br>
            <div class="container-fluid">
                <h2 class="zoom"><?php echo $tags[13]; ?></h2>
                <hr class="sep">

                <div class="row">
                    <?php
                    $varietyBusiness = new VarietyBusiness();
                    $varieties = $varietyBusiness->getAllVarieties();
                    foreach ($varieties as $currentVariety) {
                        ?>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                            <a class="portfolio-box" href="single-page.php?id=<?php echo $currentVariety->getIdVariety(); ?>">
                                <?php echo '<img src="./imagenes/' . $currentVariety->getImagePath() . '" class="img-responsive imgWork" alt="1">' ?>
                                <div class="portfolio-box-caption">
                                    <div class="portfolio-box-caption-content">
                                        <div class="project-category text-faded">
                                            <?php
                                            echo $currentVariety->getNameVariety();
                                            ?>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </section>     
        <!-- Testimonials
            ============================================= -->
        <section id="testimonials">
            <br><br>
            <div class="container">
                <h2><?php echo $tags[14]; ?></h2>
                <hr class="light-sep">            
                <div id="owl-testi" class="owl-carousel owl-theme">
                    <?php
                    $paragraph = explode(".", $organization->characteristics);
                    foreach ($paragraph as $currentParagraph) {
                        if (strlen($currentParagraph) > 2) {
                            ?>
                            <div class="item">
                                <div class="quote">
                                    <i class="fa fa-quote-left left fa-2x"></i>
                                    <h5><?php echo $currentParagraph; ?> <span></span>.<i class="fa fa-quote-right right fa-2x"></i></h5>

                                </div>
                            </div> 
                            <?php
                        }
                    }
                    ?>

                </div>
            </div>
        </section>

        <?php
        if ($lang == 'es') {
            if (isset($_GET['success'])) {
                echo '
                            <script>                
                                $(document).ready(function(){
                                    modalSelect("¡El mensaje fue enviado correctamente!","Envío exitoso");
                                    $("#myModal").modal("show");
                                });
                            </script>';
            } else if (isset($_GET['error'])) {
                echo '
                                <script>                
                                    $(document).ready(function(){
                                        modalSelect("¡El mensaje no se pudo enviar correctamente!","Envío fallido");
                                        $("#myModal").modal("show");
                                    });
                                </script>';
            } else if (isset($_GET['errorCampos'])) {
                echo '
                                <script>                
                                    $(document).ready(function(){
                                        modalSelect("¡El mensaje no se pudo enviar, campos vacíos en el formulario!","Envío fallido");
                                        $("#myModal").modal("show");
                                    });
                                </script>';
            }
        } else {
            if (isset($_GET['success'])) {
                echo '
                            <script>                
                                $(document).ready(function(){
                                    modalSelect("The message was sent correctly!","Successful shipment");
                                    $("#myModal").modal("show");
                                });
                            </script>';
            } else if (isset($_GET['error'])) {
                echo '
                                <script>                
                                    $(document).ready(function(){
                                        modalSelect("The message could not be sent correctly!","Failed shipping");
                                        $("#myModal").modal("show");
                                    });
                                </script>';
            } else if (isset($_GET['errorCampos'])) {
                echo '
                                <script>                
                                    $(document).ready(function(){
                                        modalSelect("¡El mensaje no se pudo enviar, campos vacíos en el formulario!","Failed shipping");
                                        $("#myModal").modal("show");
                                    });
                                </script>';
            }
        }
        ?>
        <!-- Contact Us
            ============================================= -->
        <section id="contact">
            <br><br>
            <div class="container">
                <h2><?php echo $tags[15]; ?></h2>
                <hr class="sep">
                <p><?php echo $tags[16]; ?></p>
                <div class="col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay=".3s">
                    <form name="frmContacto" method="post" enctype="multipart/form-data" action="./Business/SmtpAction.php">
                        <div class="form-group">
                            <label for="Nombre"><?php echo $tags[17]; ?></label>
                            <input type="text" class="form-control" id="Name" name="Name" placeholder="<?php echo $tags[17]; ?>">
                            <label for="error1" id="error1" style="color: red;"></label>
                        </div>
                        <div class="form-group">
                            <label for="Telefono"><?php echo $tags[18]; ?></label>
                            <input type="number" class="form-control" id="Telephone" name="Telephone" placeholder="<?php echo $tags[18]; ?>">
                            <label for="error2" id="error2" style="color: red;"></label>
                        </div>
                        <div class="form-group">
                            <label for="Correo electronico"><?php echo $tags[19]; ?></label>
                            <input type="email" class="form-control" id="Email" name="Email" placeholder="<?php echo $tags[19]; ?>">
                            <label for="error3" id="error3" style="color: red;"></label>
                        </div>
                        <div class="form-group">
                            <label for="Mensaje"><?php echo $tags[20]; ?></label>
                            <textarea class="form-control" rows="3" id="Comments" name="Comments" placeholder="<?php echo $tags[20]; ?>"></textarea>
                            <label for="error4" id="error4" style="color: red;"></label>
                        </div>                             
                        <input type="submit" value="<?php echo $tags[21]; ?>" id="btnAccept" name="btnAccept" 
                               class="btn-block" onclick="return validateFields()" />     

                    </form>
                </div>
            </div>
        </section>

        <!-- Modal
            ============================================= -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">    
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">

                    </div>
                </div>

            </div>
        </div>

        <div class="modal fade" id="myModal2" role="dialog">
            <div class="modal-dialog">    
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><?php echo $tags[22]; ?></h4>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li><a class="Desa1" href="https://www.facebook.com/michael.melendezm?fref=grp_mmbr_list"></a></li>
                            <li><a class="Desa2" href="https://www.facebook.com/joseph.cordero.94?fref=grp_mmbr_list"></a></li>
                            <li><a class="Desa3" href="https://www.facebook.com/daylan.chavarriaperez"></a></li>
                            <li><a class="Desa4" href="https://www.facebook.com/enb11"></a></li>
                            <li><a class="Desa5" href="https://www.facebook.com/gustavo.najeranajera?fref=ts"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- Google Map
            ============================================= -->
        <section id="fun-facts">
            <br><br>
            <div class="container">
                <h2 class="zoom"><?php echo $tags[23]; ?></h2>
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
                <h6>&copy; 2016 Turriplantas.com</h6>
                <button onclick="return modalSelectDevelo('Michael Meléndez Mesén',
                                'Joseph Cordero Marín', 'Daylan Chavarría Pérez',
                                'Edwin Navarro Barahona', 'Gustavo Najera Najera');
                        "type="button" class="btn btn-main"
                        data-toggle="modal" data-target="#myModal2">
                    TCU 563 Universidad de Costa Rica <br> sede del Atlántico</button>
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

        <script>
                    function modalSelect(modalMessage, modalTitle) {
                        document.getElementsByClassName("modal-title")[0].textContent = modalTitle;
                        document.getElementsByClassName("modal-body")[0].textContent = modalMessage;
                    }
                    function modalSelectDevelo(name1, name2, name3, name4, name5) {
                        document.getElementsByClassName("Desa1")[0].textContent = name1;
                        document.getElementsByClassName("Desa2")[0].textContent = name2;
                        document.getElementsByClassName("Desa3")[0].textContent = name3;
                        document.getElementsByClassName("Desa4")[0].textContent = name4;
                        document.getElementsByClassName("Desa5")[0].textContent = name5;
                    }
        </script>      
    </body>