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
        include_once '../BusinessAdmin/PlantAdminBusiness.php';
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
                                    <h1 id="glyphicons" class="page-header">Administrar información</h1>
                                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                        <form id="frmInformation" method="POST" action="../BusinessAdmin/plantAdminAction.php" enctype="multipart/form-data">
                                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                                <li role="presentation" class="active">
                                                    <a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Planta</a>
                                                </li>
                                                <li role="presentation" class="">
                                                    <a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Plant</a>
                                                </li>
                                                
                                                <li role="presentation" ><div><input style=" background: #ffffff;" type="submit" class="btn btn-large btn-block" value="Actualizar"/></div>
                                                </li>   
                                                <li role="presentation" class="">
                                                    <a href="adminCreateDeletePlant.php">Crear Planta</a>
                                                </li>
                                            </ul>
                                            <div id="myTabContent" class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                                    <ul style="list-style: none;">
                                                        <?php
                                                        $plantBusiness = new PlantAdminBusiness();
                                                        $result = $plantBusiness->getAllPlants();
                                                        $plantEs = $result[0];
                                                        $maxEs = sizeof($plantEs);
                                                        for ($i = 0; $i < $maxEs; $i++) {
                                                            $currentPlantEs = $plantEs[$i];
                                                            ?>
                                                            <li><input style="border:none; width: 100%" type="text" id="txtPlantEs<?php echo $i; ?>" name="txtPlantEs<?php echo $i; ?>" value="<?php echo $currentPlantEs->getScientificName(); ?>"/></li>
                                                            <label>Variedad:</label>
                                                            <li>
                                                                <select name="cbVarieties<?php echo $i; ?>" id="cbVarieties<?php echo $i; ?>">
                                                                    <?php
                                                                    $varietyB = new VarietyAdminBusiness();
                                                                    $varieties = $varietyB->getAllVarieties();
                                                                    $allVarieties = $varieties[0];
                                                                    foreach ($allVarieties as $currentVariety) {
                                                                        if($currentPlantEs->getVariety() == $currentVariety->getIdVariety()){
                                                                            echo '<option value="' . $currentVariety->getIdVariety() .
                                                                            '" selected>' . $currentVariety->getNameVariety() . '</option>';
                                                                        } else {
                                                                            echo '<option value="' . $currentVariety->getIdVariety() .
                                                                            '">' . $currentVariety->getNameVariety() . '</option>';
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>
                                                            <li><br></br>
                                                            <input type="hidden" id="id<?php echo $i; ?>" name="id<?php echo $i; ?>" value="<?php echo $currentPlantEs->getIdPlant(); ?>">
                                                            <input type="hidden" id="count" name="count" value="<?php echo $i; ?>">
                                                            <input type="hidden" id="optionUpdate" name="optionUpdate" value="update">
                                                            <?php
                                                        }
                                                        ?>

                                                    </ul>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                                    <ul>
                                                        <?php
                                                        $plantEn = $result[1];
                                                        $maxEn = sizeof($plantEn);
                                                        for ($j = 0; $j < $maxEn; $j++) {
                                                            $currentPlantEn = $plantEn[$j];
                                                            ?>
                                                            <input style="border:none; width: 100%" type="text" id="txtPlantEn<?php echo $j; ?>" name="txtPlantEn<?php echo $j; ?>" value="<?php echo $currentPlantEn->getScientificName(); ?>"/><br>
                                                            <?php
                                                        }
                                                        ?>                                                        
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
if (isset($_GET['success'])) {
    echo '<script>                
            $(document).ready(function(){
                modalSelect("¡La actualización fue exitosa!","Actualización");
                $("#myModal").modal("show");
            });
        </script>';
} else if (isset($_GET['errorUpdate'])) {
    echo '<script>                
            $(document).ready(function(){
                modalSelect("¡Error al actualizar!","Actualización");
                $("#myModal").modal("show");
            });
        </script>';
} else if (isset($_GET['errorExis'])) {
    echo '<script>                
            $(document).ready(function(){
                modalSelect("¡El archivo ya existe!","Actualización");
                $("#myModal").modal("show");
            });
        </script>';
} else if (isset($_GET['errorSize'])) {
    echo '<script>                
            $(document).ready(function(){
                modalSelect("¡El tamaño del archivo es mayor al permitido!","Actualización");
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
