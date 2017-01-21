<?php

include '../BusinessAdmin/ImageVarietyAdminBusiness.php';

if (isset($_POST['optionDelete'])) {
    
    $idImageV = $_POST['idImage'];
    $pathImage = $_POST['pathImage'];
    $imageVBusiness = new ImageVarietyAdminBusiness();
    $result = $imageVBusiness->deleteImageVariety($idImageV);
    if ($result == true) {
        $path = '../imagenes/' . $pathImage;
        unlink($path);
        header('location: ../PresentationAdmin/adminCreateDeleteImageVariety.php?successDelete=success');
    } else {
        header('location: ../PresentationAdmin/adminCreateDeleteImageVariety.php?errorDelete=error');
    }
    
} else if (isset($_POST['optionCreate'])) {
    
    $variety = $_POST['cbVarieties'];
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
                $imageV = new ImageVariety(0, $_FILES[$fileImage]['name'], $variety);
                $imageVBussiness = new ImageVarietyAdminBusiness();
                $result = $imageVBussiness->addImageVariety($imageV);
                if ($result != true) {
                    header('location: ../PresentationAdmin/adminCreateDeleteImageVariety.php?errorCreate=error');
                } else {
                    header('location: ../PresentationAdmin/adminCreateDeleteImageVariety.php?successCreate=success');
                }
            }
        } else {
            header('location: ../PresentationAdmin/adminCreateDeleteImageVariety.php?errorExis=error');
        }
    } else {
        header('location: ../PresentationAdmin/adminCreateDeleteImageVariety.php?errorSize=error');
    }
}

