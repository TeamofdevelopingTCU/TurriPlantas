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
        <!-- Animate.css -->
        <link href="../StyleAdmin/vendors/animate.css/animate.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="../StyleAdmin/build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <form id="frmLogin" method="POST" action="../BusinessAdmin/AdministratorAdminAction.php">
                            <h1>Inicio Sesión</h1>
                            <div>
                                <input type="text" id="txtUser" name="txtUser" class="form-control" placeholder="Usuario" required="" />
                            </div>
                            <div>
                                <input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Contraseña" required="" />
                            </div>
                            <div>
                                <input type="submit" class="btn btn-default submit" id="login" name="login" value="Iniciar sesión"/>             
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">

                                <div class="clearfix"></div>
                                <br />

                                <div>
                                    <h1><i class="fa fa-group"></i>Turriplantas</h1>
                                    <p>©2017 Turriplantas</p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>

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
        if (isset($_GET['errorCreate'])) {
            echo '<script>                
            $(document).ready(function(){
                modalSelect("Los datos ingresados no corresponde a ningun usuario registrado en la base de datos.","Error");
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


