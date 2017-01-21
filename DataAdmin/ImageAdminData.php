<?php

include_once '../Data/Data.php';
include '../Domain/Image.php';

class ImageAdminData extends Data {

    public function getAllImages() {
        $connEs = $this->getConnetionDB('es');
        $connEs->set_charset('utf8');

        $resultEs = mysqli_query($connEs, "select * from imagen where"
                . " descripcion = 'imageHome'");

        mysqli_close($connEs);

        $array = [];

        while ($row = mysqli_fetch_array($resultEs)) {
            $currentData = new Image($row['id_imagen'], $row['descripcion'], $row['imagen_ruta']);
            array_push($array, $currentData);
        }
        return $array;
    }

    public function addImage($image) {
        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');

        $queryEs = mysqli_query($connEs, "insert into `imagen` VALUES (0, '" .
                "imageHome',1,'" . $image->imagePath . "');");
        $queryEn = mysqli_query($connEn, "insert into `imagen` VALUES (0, '" .
                "imageHome',1,'" . $image->imagePath . "');");

        if ($queryEs == true && $queryEn == true) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteImage($id) {
        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');

        $queryEs = mysqli_query($connEs, "delete from imagen where "
                . "id_imagen = " . $id);
        $queryEn = mysqli_query($connEn, "delete from imagen where "
                . "id_imagen = " . $id);

        if ($queryEs == true && $queryEn == true) {
                return true;
        } else {
            return false;
        }
    }

}
