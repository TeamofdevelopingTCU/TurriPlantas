<?php

include '../BusinessAdmin/VarietyAdminBusiness.php';


if (isset($_POST['optionUpdate'])) {
    
    $count = $_POST['count'];
    for ($i = 0; $i <= $count; $i++) {
        $idVariety = $_POST['id' . $i];
        $nameVarietyEs = $_POST['txtVarietyEs' . $i];
        $nameVarietyEn = $_POST['txtVarietyEn' . $i];
        $fileImage = 'image' . $i;
        $pathAf = $_POST['path' . $i];

        if ($_FILES[$fileImage]["error"] > 0) {
            echo 'paso if';
            $varietyBusiness = new VarietyAdminBusiness();
            $currentVarietyEs = new Variety($idVariety, $nameVarietyEs, $pathAf);
            $currentVarietyEn = new Variety($idVariety, $nameVarietyEn, $pathAf);
            $varieties = array($currentVarietyEs, $currentVarietyEn);
            $result = $varietyBusiness->updateVarieties($varieties);
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
                        $varietyBusiness = new VarietyAdminBusiness();
                        $currentVarietyEs = new Variety($idVariety, $nameVarietyEs, $_FILES[$fileImage]['name']);
                        $currentVarietyEn = new Variety($idVariety, $nameVarietyEn, $_FILES[$fileImage]['name']);
                        $varieties = array($currentVarietyEs, $currentVarietyEn);
                        $result = $varietyBusiness->updateVarieties($varieties);
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
    header('location: ../PresentationAdmin/adminInformationVariety.php?success=success');
} else if (isset($_POST['optionDelete']) == 'delete') {
    
    $idVariety = $_POST['idVariety'];
    $pathVariety = $_POST['pathVariety'];
    $varietyBusiness = new VarietyAdminBusiness();
    $result = $varietyBusiness->deleteVariety($idVariety);
    if ($result == true) {
        $path = '../imagenes/' . $pathVariety;
        unlink($path);
        header('location: ../PresentationAdmin/adminCreateDeleteVariety.php?successDelete=success');
    } else {
        header('location: ../PresentationAdmin/adminCreateDeleteVariety.php?errorDelete=error');
    }
    
} else if (isset($_POST['optionCreate']) == 'create') {
    
    $nameVarietyEs = $_POST['txtNameVarietyEs'];
    $nameVarietyEn = $_POST['txtNameVarietyEn'];
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
                $arrayVarieties = array($nameVarietyEs, $nameVarietyEn, $_FILES[$fileImage]['name']);
                $varietyBusiness = new VarietyAdminBusiness();
                $result = $varietyBusiness->createVariety($arrayVarieties);
                if ($result != true) {
                    header('location: ../PresentationAdmin/adminCreateDeleteVariety.php?errorCreate=error');
                } else {
                    header('location: ../PresentationAdmin/adminCreateDeleteVariety.php?successCreate=success');
                }
            }
        } else {
            header('location: ../PresentationAdmin/adminCreateDeleteVariety.php?errorExis=error');
        }
    } else {
        header('location: ../PresentationAdmin/adminCreateDeleteVariety.php?errorSize=error');
    }
}
