<?php

include '../BusinessAdmin/ProductAdminBusiness.php';

if (isset($_POST['optionUpdate'])) {

    $count = $_POST['count'];
    for ($i = 0; $i <= $count; $i++) {
        $idProduct = $_POST['id' . $i];
        $nameProductEs = $_POST['txtProductEs' . $i];
        $nameProductEn = $_POST['txtProductEn' . $i];
        $fileImage = 'pathImage' . $i;
        $pathAf = $_POST['path' . $i];

        if ($_FILES[$fileImage]["error"] > 0) {
            $productBusiness = new ProductAdminBusiness();
            $currentProductEs = new Product($idProduct, $nameProductEs, $pathAf);
            $currentProductEn = new Product($idProduct, $nameProductEn, $pathAf);
            $products = array($currentProductEs, $currentProductEn);
            $result = $productBusiness->updateProducts($products);
            if ($result != true) {
                header('location: ../PresentationAdmin/adminInformationProducts.php?errorUpdate=errorUpdate');
            }
        } else {
            $allowed = array("image/jpg", "image/jpeg", "image/gif", "image/png");
            $limit_kb = 1000;

            if (in_array($_FILES[$fileImage]['type'], $allowed) && $_FILES[$fileImage]['size'] <= $limit_kb * 1024) {

                $path = "../imagenes/" . $_FILES[$fileImage]['name'];

                /* verifiacion imagen a isertar no exista */
                if (!file_exists($path)) {
                    /* verificacion imagen hata movido a la ruta de destino */
                    $result = @move_uploaded_file($_FILES[$fileImage]["tmp_name"], $path);
                    if ($result) {

                        $productBusiness = new ProductAdminBusiness();
                        $currentProductEs = new Product($idProduct, $nameProductEs, $_FILES[$fileImage]['name']);
                        $currentProductEn = new Product($idProduct, $nameProductEn, $_FILES[$fileImage]['name']);
                        $products = array($currentProductEs, $currentProductEn);
                        $result = $productBusiness->updateProducts($products);
                        if ($result != true) {
                            header('location: ../PresentationAdmin/adminInformationProducts.php?errorUpdate=errorUpdate');
                        }
                    }
                } else {
                    header('location: ../PresentationAdmin/adminInformationProducts.php?errorExis=error');
                }
            } else {
                header('location: ../PresentationAdmin/adminInformationProducts.php?errorSize=error');
            }
        }
    }
    header('location: ../PresentationAdmin/adminInformationProducts.php?success=success');
    
} else if (isset($_POST['optionDelete'])) {
    
    $idProduct = $_POST['idProduct'];
    $pathProduct = $_POST['pathProduct'];
    $productBusiness = new ProductAdminBusiness();
    $result = $productBusiness->deleteProduct($idProduct);
    if ($result == true) {
        $path = '../imagenes/' . $pathProduct;
        unlink($path);
        header('location: ../PresentationAdmin/adminCreateDeleteProducts.php?successDelete=success');
    } else {
        header('location: ../PresentationAdmin/adminCreateDeleteProducts.php?errorDelete=error');
    }
    
} else if (isset($_POST['optionCreate'])) {
    
    $nameProductEs = $_POST['txtNameProductEs'];
    $nameProductEn = $_POST['txtNameProductEn'];
    $fileImage = 'fileImage';
    $allowed = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    $limit_kb = 1000;

    if (in_array($_FILES[$fileImage]['type'], $allowed) && $_FILES[$fileImage]['size'] <= $limit_kb * 1024) {

        $path = "../imagenes/" . $_FILES[$fileImage]['name'];

        /* verifiacion imagen a isertar no exista */
        if (!file_exists($path)) {
            /* verificacion imagen hata movido a la ruta de destino */
            $result = @move_uploaded_file($_FILES[$fileImage]["tmp_name"], $path);
            if ($result) {
                $arrayProduct = array($nameProductEs, $nameProductEn, $_FILES[$fileImage]['name']);
                $productBusiness = new ProductAdminBusiness();
                $result = $productBusiness->createProduct($arrayProduct);
                if ($result != true) {
                    header('location: ../PresentationAdmin/adminCreateDeleteProducts.php?errorCreate=error');
                } else {
                    header('location: ../PresentationAdmin/adminCreateDeleteProducts.php?successCreate=success');
                }
            }
        } else {
            header('location: ../PresentationAdmin/adminCreateDeleteProducts.php?errorExis=error');
        }
    } else {
        header('location: ../PresentationAdmin/adminCreateDeleteProducts.php?errorSize=error');
    }
}




