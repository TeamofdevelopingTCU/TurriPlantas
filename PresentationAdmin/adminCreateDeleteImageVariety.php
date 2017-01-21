<?php
if (@session_start() == false) {
    session_start();
    if (!isset($_SESSION["userName"])) {
        header('location: ./login.php');
    }
} else {
    if (!isset($_SESSION["userName"])) {
        header('location: ./login.php');
    }
}
?>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <?php
        include_once '../BusinessAdmin/ImageVarietyAdminBusiness.php';
        include_once '../BusinessAdmin/VarietyAdminBusiness.php';
        ?>
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
                                    <h1 id="glyphicons" class="page-header">Registrar imagen para variedad</h1>
                                    <div class="" role="tabpanel" data-example-id="togglable-tabs">

                                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                            <li role="presentation" class="active">
                                                <a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Registar imagen para variedad</a>
                                            </li> 
                                            <li role="presentation" class="">
                                                <a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Eliminar imagen de variedad</a>
                                            </li>                                                                                              
                                        </ul>
                                        <div id="myTabContent" class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                                <form id="frmInformation" method="POST" action="../BusinessAdmin/ImageVarietyAdminAction.php" enctype="multipart/form-data">
                                                    <ul style="list-style: none;">
                                                        <li><label>Ingrese la imagen que desea registrar y seleccione
                                                                la variedad que ilustra:</label></li>
                                                        <li><input type="file" id="fileImage" name="fileImage"/></li><br>
                                                        <li>
                                                            <select name="cbVarieties" id="cbVarieties">
                                                                <?php
                                                                $varietyB = new VarietyAdminBusiness();
                                                                $varieties = $varietyB->getAllVarieties();
                                                                $allVarieties = $varieties[0];
                                                                foreach ($allVarieties as $currentVariety) {
                                                                    echo '<option value="' . $currentVariety->getIdVariety() .
                                                                    '">' . $currentVariety->getNameVariety() . '</option>';
                                                                }
                                                                ?>
                                                            </select><br></br>
                                                        </li>
                                                        <li><input type="submit" id="btnCreate" name="create" value="Registrar"/></li>
                                                        <input type="hidden" id="optionCreate" name="optionCreate" value="create" />
                                                    </ul>
                                                </form>
                                            </div>

                                            <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                                <div class="row">    
                                                    <?php
                                                    $imageVBusiness = new ImageVarietyAdminBusiness();
                                                    $images = $imageVBusiness->getAllImages();
                                                    foreach ($images as $currentImage) {
                                                        ?>
                                                        <div class="col-md-55">
                                                            <div class="thumbnail">
                                                                <div class="image view view-first">
                                                                    <img style="width: 100%; display: block;" src="../imagenes/<?php echo $currentImage->imagePath; ?>" alt="image" />
                                                                    <div class="mask">
                                                                        <?php
                                                                        $varietyB = new VarietyAdminBusiness();
                                                                        $varieties = $varietyB->getAllVarieties();
                                                                        $allVarieties = $varieties[0];
                                                                        foreach ($allVarieties as $currentVariety) {
                                                                            if($currentVariety->getIdVariety() == $currentImage->idVariety)
                                                                                echo '<p>'.$currentVariety->getNameVariety().'</p>';
                                                                        }
                                                                        ?>
                                                                        <div class="tools tools-bottom">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="caption">
                                                                    <form id="frmDelete" method="POST" action="../BusinessAdmin/ImageVarietyAdminAction.php" enctype="multipart/form-data">
                                                                        <center><input type="submit" id="btnDelete" name="btnDelete" value="Eliminar"></center>
                                                                        <input type="hidden" id="idImage" name="idImage" value="<?php echo $currentImage->idImage; ?>" />
                                                                        <input type="hidden" id="pathImage" name="pathImage" value="<?php echo $currentImage->imagePath; ?>" />
                                                                        <input type="hidden" id="optionDelete" name="optionDelete" value="delete" />
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>                                                        
                                        </div>
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
<?php
if (isset($_GET['successDelete'])) {
    echo '<script>                
            $(document).ready(function(){
                modalSelect("¡La eliminación fue exitosa!","Eliminación");
                $("#myModal").modal("show");
            });
        </script>';
} else if (isset($_GET['errorDelete'])) {
    echo '<script>                
            $(document).ready(function(){
                modalSelect("¡Error al eliminar!","Eliminación");
                $("#myModal").modal("show");
            });
        </script>';
} else if (isset($_GET['successCreate'])) {
    echo '<script>                
            $(document).ready(function(){
                modalSelect("¡La imagen se registró con éxito!","Registro");
                $("#myModal").modal("show");
            });
        </script>';
} else if (isset($_GET['errorCreate'])) {
    echo '<script>                
            $(document).ready(function(){
                modalSelect("¡Error al registrar la imagen!","Registro");
                $("#myModal").modal("show");
            });
        </script>';
} else if (isset($_GET['errorExis'])) {
    echo '<script>                
            $(document).ready(function(){
                modalSelect("¡La imagen ingresada ya existe","Registro");
                $("#myModal").modal("show");
            });
        </script>';
} else if (isset($_GET['errorSize'])) {
    echo '<script>                
            $(document).ready(function(){
                modalSelect("¡El tamaño del archivo es superior al máximo!","Registro");
                $("#myModal").modal("show");
            });
        </script>';
}
?>
<script>
    function modalSelect(modalMessage, modalTitle) {
        document.getElementsByClassName("modal-title")[0].textContent = modalTitle;
        document.getElementsByClassName("modal-body")[0].textContent = modalMessage;
    }
</script>


</body>
</html>
