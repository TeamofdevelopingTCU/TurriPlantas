<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Turriplantas</title>

        <!-- Bootstrap -->
        <link href="../StyleAdmin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../StyleAdmin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../StyleAdmin/vendors/nprogress/nprogress.css" rel="stylesheet">

        <!-- Custom styling plus plugins -->
        <link href="../StyleAdmin/build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="nav-md">
        <?php include './reusableMenu.php'; ?>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">                       

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Turriplantas<small></small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>                                         
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="bs-docs-section">
                                    <h1 id="glyphicons" class="page-header">Administrar información</h1>
                                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                        <form id="frmInformation" method="POST" action="pruebaAction.php">
                                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                                <li role="presentation" class="active">
                                                    <a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Variedad</a>
                                                </li>
                                                <li role="presentation" class="">
                                                    <a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Variety</a>
                                                </li>
                                                <li role="presentation" ><div><input style=" background: #ffffff;" type="submit" class="btn btn-large btn-block" value="Actualizar"/></div>
                                                </li>
                                            </ul>
                                            <div id="myTabContent" class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                                    <ul>
                                                        <li><input style="border:none;" type="text" id="value1" name="value1" value="Polyscias Spp"/><img src="../StyleAdmin/images/picture.jpg" /> <input type="file" /></li><br>
                                                        <li><input style="border:none;" type="text" id="value1" name="value1" value="Codiaeumm Variegaton Spp (Crotons)"/><img src="../StyleAdmin/images/picture.jpg" /> <input type="file" /></li><br>
                                                        <li><input style="border:none;" type="text" id="value1" name="value1" value="Dracaenas Spp"/><img src="../StyleAdmin/images/picture.jpg" /> <input type="file" /></li><br>
                                                        <li><input style="border:none;" type="text" id="value1" name="value1" value="Cordyline Spp"/><img src="../StyleAdmin/images/picture.jpg" /> <input type="file" /></li><br>
                                                    </ul>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                                    <ul>
                                                        <li><input style="border:none;" type="text" id="value1" name="value1" value="Polyscias Spp"/></li><br>
                                                        <li><input style="border:none;" type="text" id="value1" name="value1" value="Codiaeumm Variegaton Spp (Crotons)"/></li><br>
                                                        <li><input style="border:none;" type="text" id="value1" name="value1" value="Dracaenas Spp"/></li><br>
                                                        <li><input style="border:none;" type="text" id="value1" name="value1" value="Cordyline Spp"/></li><br>
                                                    </ul>
                                                </div>                                                        
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Turriplantas
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="../StyleAdmin/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../StyleAdmin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../StyleAdmin/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../StyleAdmin/vendors/nprogress/nprogress.js"></script>

<!-- Custom Theme Scripts -->
<script src="../StyleAdmin/build/js/custom.min.js"></script>
</body>
</html>
