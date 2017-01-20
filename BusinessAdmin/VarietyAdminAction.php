<?php
//include '../BusinessAdmin/VarietyAdminBusiness.php.php';
//
//$count = $_POST['count'];
//
//for ($i = 0; $i < $count; $i++) {
//    $idVariety = $_POST['id' . $i];
//    $nameVarietyEs = $_POST['txtVarietyEs' . $i];
//    $nameVarietyEn = $_POST['txtVarietyEn' . $i];
//    $fileImage = 'fileImage' . $i;
//    $pathAf = $_POST['path' . $i];
//
//    if ($_FILES[$fileImage]["error"] > 0) {
//        $varietyBusiness = new VarietyAdminBusiness();
//        $currentVarietyEs = new Variety($idVariety, $nameVarietyEs, $pathAf);
//        $currentVarietyEn = new Variety($idVariety, $nameVarietyEn, $pathAf);
//        $variety = array($currentVarietyEs, $currentVarietyEn);
//        $result = $varietyBusiness->updateVarieties($variety);
//        if ($result != true) {
//            header('location: ../PresentationAdmin/adminInformationVariety.php?errorUpdate=errorUpdate');
//        }
//        echo 'entró 1';
//    } else {
//        $allowed = array("image/jpg", "image/jpeg", "image/gif", "image/png");
//        $limit_kb = 1000;
//
//        if (in_array($_FILES[$fileImage]['type'], $allowed) && $_FILES[$fileImage]['size'] <= $limit_kb * 1024) {
//
//            $path = "../imagenes/" . $_FILES[$fileImage]['name'];
//
//            /* verifiacion imagen a isertar no exista */
//            if (!file_exists($path)) {
//                /* verificacion imagen hata movido a la ruta de destino */
//                $result = @move_uploaded_file($_FILES[$fileImage]["tmp_name"], $path);
//                if ($result) {
//                     echo 'entró 2';
//                    $varietyBusiness = new VarietyAdminBusiness();
//                    $currentVarietyEs = new Variety($idVariety, $nameVarietyEs, $_FILES[$fileImage]['name']);
//                    $currentVarietyEn = new Variety($idVariety, $nameVarietyEn, $_FILES[$fileImage]['name']);
//                    $varieties = array($currentVarietyEs, $currentVarietyEn);
//                    $result = $varietyBusiness->updateVarieties($varieties);
//                    if ($result != true) {
//                        header('location: ../PresentationAdmin/adminInformationVariety.php?errorUpdate=errorUpdate');
//                    }
//                }
//            } else {
//                header('location: ../PresentationAdmin/adminInformationVariety.php?errorExis=error');
//            }
//        } else {
//            header('location: ../PresentationAdmin/adminInformationVariety.php?errorSize=error');
//        }
//    }
//}
////header('location: ../PresentationAdmin/adminInformationVariety.php?success=success');

include '../BusinessAdmin/VarietyAdminBusiness.php';

$count = $_POST['count'];

for ($i = 0; $i < $count; $i++) {
    $idProduct = $_POST['id' . $i];
    $nameProductEs = $_POST['txtVarietyEs' . $i];
    $nameProductEn = $_POST['txtVarietyEn' . $i];
    $fileImage = 'fileImage' . $i;
    $pathAf = $_POST['path' . $i];

    if ($_FILES[$fileImage]["error"] > 0) {
        $productBusiness = new VarietyAdminBusiness();
        $currentProductEs = new Variety($idProduct, $nameProductEs, $pathAf);
        $currentProductEn = new Variety($idProduct, $nameProductEn, $pathAf);
        $products = array($currentProductEs, $currentProductEn);
        $result = $productBusiness->updateVarieties($products);
        if ($result != true) {
            header('location: ../PresentationAdmin/adminInformationVariety.php?errorUpdate=errorUpdate');
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
                    echo 'paso res';
                    $productBusiness = new VarietyAdminBusiness();
                    $currentProductEs = new Variety($idProduct, $nameProductEs, $_FILES[$fileImage]['name']);
                    $currentProductEn = new Variety($idProduct, $nameProductEn, $_FILES[$fileImage]['name']);
                    $products = array($currentProductEs, $currentProductEn);
                    $result = $productBusiness->updateVarieties($products);
                    if ($result != true) {
                        header('location: ../PresentationAdmin/adminInformationVariety.php?errorUpdate=errorUpdate');
                    }
                }
            } else {
                header('location: ../PresentationAdmin/adminInformationVariety.php?errorExis=error');
            }
        } else {
            header('location: ../PresentationAdmin/adminInformationVariety.php?errorSize=error');
        }
    }
}
//header('location: ../PresentationAdmin/adminInformationVariety.php?success=success');
