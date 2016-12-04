<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>multiple items per slide in bootstrap carousel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/carrousel.css">


    </head>

    <body>
        <div class="container">
            <h1>Use Bootstrap's carousel to show multiple items per slide.</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel slide multi-item-carousel" id="theCarousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
                            </div>
                            <div class="item">
                                <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/e91e63/000000" class="img-responsive"></a></div>
                            </div>
                            <div class="item">
                                <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/9c27b0/000000" class="img-responsive"></a></div>
                            </div>
                            <div class="item">
                                <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/673ab7/000000" class="img-responsive"></a></div>
                            </div>
                            <div class="item">
                                <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/4caf50/000000" class="img-responsive"></a></div>
                            </div>
                            <div class="item">
                                <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/8bc34a/000000" class="img-responsive"></a></div>
                            </div>
                            <!-- add  more items here -->
                            <!-- Example item start:  -->

                            <div class="item">
                                <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/8bc34a/000000" class="img-responsive"></a></div>
                            </div>

                            <!--  Example item end -->
                        </div>
                        <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                        <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
        <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>

        <script src="js/carrousel.js"></script>

    </body>
</html>