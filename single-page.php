<html>
    <head>
        <title>Turriplantas</title>
        <meta charset="UTF-8">
        <link rel="icon" href="imagenes/logo.png" type="image/x-icon">   
        <!--<link rel="stylesheet" href="StyleSinglePage/css/bootstrap.css" type="text/css" media="screen">-->
        <link rel="stylesheet" href="StyleSinglePage/css/responsive.css" type="text/css" media="screen">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type='text/css'>
        <link rel="stylesheet" href="css/carrousel.css">
        <link rel="stylesheet" href="StyleSinglePage/css/style.css" type="text/css" media="screen">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<!--        <script type="text/javascript" src="StyleSinglePage/js/superfish.js"></script>
        <script type="text/javascript" src="StyleSinglePage/js/jquery.cookie.js"></script>   -->

<!--        <script type="text/javascript">
            if ($(window).width() > 1024) {
            }
        </script>

        <script>
            jQuery(window).load(function () {
                $x = $(window).width();
                if ($x > 1024)
                {
                    jQuery("#content .row").preloader();
                }
                jQuery(".list-blog li:last-child").addClass("last");
                jQuery(".list li:last-child").addClass("last");
                jQuery('.spinner').animate({'opacity': 0}, 1000, 'easeOutCubic', function () {
                    jQuery(this).css('display', 'none')
                });
            });
        </script>-->

        <?php
        include './Business/PlantBusiness.php';
        include './Business/VarietyBusiness.php';
        ?>

    </head>
    <body>       
        <!--============================== header =================================-->
        <header style="width: 100%; height: 120px;">
            <div class="container clearfix">
                <div class="row">
                    <div class="span12">
                        <div class="navbar navbar_">
                            <div class="container">
                                <h1 class="brand brand_"><a href="index.php"><img alt="" src="imagenes/logo.png" style="width:70px; height: 70px; position: relative; bottom: 20px;"> </a></h1>
                                <div>
                                    <ul class="nav navbar-nav">
                                        <li><a style="color: whitesmoke; position: relative; left: 20px; font-size: 20px;" href="index.php">Inicio</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="bg-content">  
            <br><br>           
            <!--============================== content =================================-->      
            <div id="content"><div class="ic"></div>
                <div class="container">
                    <div class="row">
                        <article class="span8">
                            <div class="inner-1"> 
                                <div class="wrapper">
                                    <div><h3 style="color: #398439;">Variedades</h3></div>
                                    <ol class="list extra extra1">
                                        <?php
                                        $plantBusiness = new PlantBusiness();
                                        $plants = $plantBusiness->getPlantasByVariety($_GET['id']);
                                        foreach ($plants as $currentPlant) {
                                            echo '<li>' . $currentPlant->getScientificName() . '</li>';
                                        }
                                        ?>
                                    </ol>
                                </div>
                                <div class="clear"></div>
                                <br/><br/>
                                <?php
                                $varBusiness = new VarietyBusiness();
                                $images = $varBusiness->getImagesVariety($_GET['id']);
                                if ($images != -1) {
                                    ?>
                                    <div class="carousel slide multi-item-carousel" id="theCarousel<?php echo $currentPlant->getIdPlant(); ?>">
                                        <div class="carousel-inner">
                                            <?php
                                            $flag = 0;
                                            foreach ($images as $currentImage) {
                                                if ($flag == 0) {
                                                    echo '<div class="item active">';
                                                    echo '<div class = "col-xs-4"><a><img src = "./imagenes/' . $currentImage->imagePath . '" class = "img-responsive"></a></div>';
                                                } else {
                                                    echo '<div class="item">';
                                                    echo '<div class = "col-xs-4"><a href="#1"><img src = "./imagenes/' . $currentImage->imagePath . '" class = "img-responsive"></a></div>';
                                                }
                                                $flag = 1;
                                                echo '</div>';
                                            }
                                            ?>
                                        </div>
                                        <a class="left carousel-control" href="#theCarousel<?php echo $currentPlant->getIdPlant(); ?>" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                        <a class="right carousel-control" href="#theCarousel<?php echo $currentPlant->getIdPlant(); ?>" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                                    </div> 
                                    <?php
                                }
                                ?>
                            </div>  
                        </article>
                        <article class="span4">
                            <h3 style="color: #398439;">Categories</h3>
                            <ul class="list extra extra1"> 
                                <?php
                                $varietyBusiness = new VarietyBusiness();
                                $varieties = $varietyBusiness->getAllVarieties();
                                foreach ($varieties as $currentVariety) {
                                    ?>
                                    <li><a href="single-page.php?id=<?php echo $currentVariety->getIdVariety(); ?>">
                                            <?php echo $currentVariety->getNameVariety(); ?>
                                        </a></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </article>
                    </div>
                </div>
            </div>
        </div>

        <!--============================== footer =================================-->
        <footer>
            <div class="container clearfix">
                <ul class="list-social pull-right">

                </ul>
                <div class="privacy pull-left"><h6 style="font-size: 20px; ">&copy; 2016 Turriplantas.com</h6></div>
            </div>
        </footer>
     
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
        <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
        <script src="js/carrousel.js"></script>
        <!--<script type="text/javascript" src="StyleSinglePage/js/bootstrap.js"></script>-->

    </body>
</html>