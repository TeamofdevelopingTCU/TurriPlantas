<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="imagenes/logo.png" type="image/x-icon">   
        <link rel="stylesheet" href="StyleSinglePage/css/bootstrap.css" type="text/css" media="screen">
        <link rel="stylesheet" href="StyleSinglePage/css/responsive.css" type="text/css" media="screen">
        <link rel="stylesheet" href="StyleSinglePage/css/style.css" type="text/css" media="screen">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="StyleSinglePage/js/superfish.js"></script>
        <script type="text/javascript" src="StyleSinglePage/js/jquery.cookie.js"></script>   
        <title>Turriplantas</title>

        <script type="text/javascript">if ($(window).width() > 1024) {
            }</script>
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

        </script>
    </head>
    <body>       
        <!--============================== header =================================-->
        <header style="width: 100%; height: 45px;">
            <div class="container clearfix">
                <div class="row">
                    <div class="span12">
                        <div class="navbar navbar_">
                            <div class="container">
                                <h1 class="brand brand_"><a href="index.php"><img alt="" src="imagenes/logo.png" style="width:65px; height: 60px;"> </a></h1>
                                <div class="nav-collapse nav-collapse_  collapse">
                                    <ul class="nav navbar-nav ">
                                        <li><a href="index.php">Home</a></li>
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
            <!--<div id="home"><a href="index.php">Home</a></div>-->
            <!--============================== content =================================-->      
            <div id="content"><div class="ic">More Website Templates @ TemplateMonster.com. November19, 2012!</div>
                <div class="container">
                    <div class="row">
                        <article class="span8">
                            <div class="inner-1">         
                                <ul class="list-blog">
                                    <li>  
                                        <h3>Duis autem vel eum iriure dolor</h3>     

                                        <div class="clear"></div>            
                                        <img alt="" src="imagenes/sans.JPG" class="sizeImage">                               
                                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum delenit augue duis dolore te feugait nulla facilisi.</p>
                                        <!--<a href="#" class="btn btn-1">Read More</a>-->          
                                    </li>  

                                    <li>  
                                        <h3>Hendrerit in vulputate velit esse molestie</h3>     

                                        <div class="clear"></div>            
                                        <img alt="" src="imagenes/draca.JPG" class="sizeImage">                               
                                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum delenit augue duis dolore te feugait nulla facilisi.</p>
                                    </li> 

                                    <li>  
                                        <h3>Hendrerit in vulputate velit esse molestie</h3>     

                                        <div class="clear"></div>            
                                        <img alt="" src="imagenes/croton.JPG" class="sizeImage">                               
                                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum delenit augue duis dolore te feugait nulla facilisi.</p>
                                    </li> 

                                    <li>  
                                        <h3>Hendrerit in vulputate velit esse molestie</h3>  

                                        <div class="clear"></div>            
                                        <img alt="" src="imagenes/agro.JPG" class="sizeImage">                               
                                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum delenit augue duis dolore te feugait nulla facilisi.</p>
                                    </li> 
                                </ul>
                            </div>  
                        </article>
                        <article class="span4">
                            <h3 class="extra">Search</h3>
                            <form id="search" action="search.php" method="GET" accept-charset="utf-8" >
                                <div class="clearfix">
                                    <input type="text" name="s" onBlur="if (this.value == '')
                                                this.value = ''" onFocus="if (this.value == '')
                                                            this.value = ''" >
                                    <a href="#" onClick="document.getElementById('search').submit()" class="btn btn-1">Search</a> </div>
                            </form>
                            <h3>Categories</h3>
                            <ul class="list extra extra1">           
                                <li><a href="#">Ut wisi enim ad minim veniam</a></li>
                                <li><a href="#">Quis nostrud exerci tation ullamcorper</a></li>
                                <li><a href="#">Suscipit lobortis nisl ut aliquip</a></li>
                                <li><a href="#">Commodo consequat</a></li>
                                <li><a href="#">Duis autem vel eum iriure dolor in hendrerit</a></li>
                                <li><a href="#">Vulputate velit esse molestie consequat</a></li>
                                <li><a href="#">Fel illum dolore eu feugiat nulla</a></li>
                                <li><a href="#">Facilisis at vero eros et accumsan iusto</a></li>
                                <li><a href="#">Odio dignissim qui blandit</a></li>
                                <li><a href="#">Praesent luptatum zzril delenit augue</a></li>                      
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
                    <li><a class="icon-1" href="#"></a></li>
                    <li><a class="icon-2" href="#"></a></li>
                    <li><a class="icon-3" href="#"></a></li>
                    <li><a class="icon-4" href="#"></a></li>
                </ul>
                <div class="privacy pull-left">Website Template designed by <a href="http://www.templatemonster.com/" target="_blank" rel="nofollow">TemplateMonster.com</a> </div>
            </div>
        </footer>
        <script type="text/javascript" src="StyleSinglePage/js/bootstrap.js"></script>
    </body>
</html>
