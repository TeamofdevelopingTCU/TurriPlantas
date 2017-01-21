<?php

include '../BusinessAdmin/ImageAdminBusiness.php';

if (isset($_POST['optionDelete'])) {
    
    $idImage = $_POST['idImage'];
    $pathImage = $_POST['pathImage'];
    $imageBusiness = new ImageAdminBusiness();
    $result = $imageBusiness->deleteImage($idImage);
    if ($result == true) {
        $path = '../imagenes/imagesHome/' . $pathImage;
        unlink($path);
        header('location: ../PresentationAdmin/adminCreateDeleteImage.php?successDelete=success');
    } else {
        header('location: ../PresentationAdmin/adminCreateDeleteImage.php?errorDelete=error');
    }
    
} else if (isset($_POST['optionCreate'])) {
    
    $fileImage = 'fileImage';
    $allowed = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    $limit_kb = 1000;

    if (in_array($_FILES[$fileImage]['type'], $allowed) && $_FILES[$fileImage]['size'] <= $limit_kb * 1024) {

        $path = "../imagenes/imagesHome/" . $_FILES[$fileImage]['name'];

        /* verifiacion imagen a isertar no exista */
        if (!file_exists($path)) {
            /* verificacion imagen hata movido a la ruta de destino */
            $result = @move_uploaded_file($_FILES[$fileImage]["tmp_name"], $path);
            if ($result) {
                $image = new Image(0, "imageHome",$_FILES[$fileImage]['name']);
                $imageBussiness = new ImageAdminBusiness();
                $result = $imageBussiness->addImage($image);
                if ($result != true) {
                    header('location: ../PresentationAdmin/adminCreateDeleteImage.php?errorCreate=error');
                } else {
                    header('location: ../PresentationAdmin/adminCreateDeleteImage.php?successCreate=success');
                }
            }
        } else {
            header('location: ../PresentationAdmin/adminCreateDeleteImage.php?errorExis=error');
        }
    } else {
        header('location: ../PresentationAdmin/adminCreateDeleteImage.php?errorSize=error');
    }
}

