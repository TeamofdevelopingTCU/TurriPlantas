<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Turri Plantas</title>
        <meta charset="utf-8">
        <link rel="icon" href="img/logo/logo.png" type="image/x-icon">        
        <link rel="stylesheet" href="StyleSinglePage/css/bootstrap.css" type="text/css" media="screen">
        <link rel="stylesheet" href="StyleSinglePage/css/responsive.css" type="text/css" media="screen">
        <link rel="stylesheet" href="StyleSinglePage/css/style.css" type="text/css" media="screen">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="StyleSinglePage/js/jquery.js"></script>
        <script type="text/javascript" src="StyleSinglePage/js/superfish.js"></script>
        <script type="text/javascript" src="StyleSinglePage/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="StyleSinglePage/js/jquery.cookie.js"></script>   

        <script type="text/javascript">if ($(window).width() > 1024) {
                document.write("<" + "script src='StyleSinglePage/js/jquery.preloader.js'></" + "script>");
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

        <!--[if lt IE 8]>
                <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
        <![endif]-->
        <!--[if (gt IE 9)|!(IE)]><!-->
        <!--<![endif]-->
        <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/docs.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
  <![endif]-->
    </head>

    <body>
       
        <div class="bg-content">  
            <br><br>
            <!--============================== content =================================-->      
            <div id="content"><div class="ic">More Website Templates @ TemplateMonster.com. November19, 2012!</div>
                <div class="container">
                    <div class="row">
                        <article class="span8">
                            <div class="inner-1">         
                                <ul class="list-blog">
                                    <li>  
                                        <h3>Duis autem vel eum iriure dolor</h3>     
                                        <time datetime="2012-11-09" class="date-1">9.11.2012</time>
                                        <div class="name-author">by <a href="#">Admin</a></div>
                                        <a href="#" class="comments">11 comments</a> 
                                        <div class="clear"></div>            
                                        <img alt="" src="StyleSinglePage/img/page4-img1.jpg">                               
                                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum delenit augue duis dolore te feugait nulla facilisi.</p>
                                        <a href="#" class="btn btn-1">Read More</a>          
                                    </li>  

                                    <li>  
                                        <h3>Hendrerit in vulputate velit esse molestie</h3>     
                                        <time datetime="2012-11-08" class="date-1">8.11.2012</time>
                                        <div class="name-author">by <a href="#">Admin</a></div>
                                        <a href="#" class="comments">9 comments</a> 
                                        <div class="clear"></div>            
                                        <img alt="" src="StyleSinglePage/img/page4-img2.jpg">                               
                                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum delenit augue duis dolore te feugait nulla facilisi.</p>
                                        <a href="#" class="btn btn-1">Read More</a>          
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
                            <h3>Archive</h3>
                            <div class="wrapper">
                                <ul class="list extra2 list-pad ">
                                    <li><a href="#">November 2012</a></li>
                                    <li><a href="#">October 2012</a></li>
                                    <li><a href="#">September 2012</a></li>
                                    <li><a href="#">August 2012</a></li>
                                    <li><a href="#">July 2012</a></li>
                                    <li><a href="#">June 2012</a></li>
                                </ul>
                                <ul class="list extra2">
                                    <li><a href="#">May 2012</a></li>
                                    <li><a href="#">April 2012</a></li>
                                    <li><a href="#">March 2012</a></li>
                                    <li><a href="#">February 2012</a></li>
                                    <li><a href="#">January 2012</a></li>
                                    <li><a href="#">December 2011</a></li>
                                </ul>

                            </div>
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