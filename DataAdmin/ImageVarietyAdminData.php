<?php

include_once '../Data/Data.php';
include '../Domain/ImageVariety.php';

class ImageVarietyAdminData extends Data {

    public function getAllImages() {
        $connEs = $this->getConnetionDB('es');
        $connEs->set_charset('utf8');

        $resultEs = mysqli_query($connEs, "select * from imagen_planta "
                . "inner join planta_x_imagen_planta on "
                . "imagen_planta.id_imagen = planta_x_imagen_planta.id_imagen");

        mysqli_close($connEs);

        $array = [];

        while ($row = mysqli_fetch_array($resultEs)) {
            $currentData = new ImageVariety($row['id_imagen'], $row['ruta_imagen'], $row['id_variedad']);
            array_push($array, $currentData);
        }

        return $array;
    }

    public function addImageVariety($image) {
        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');

        $queryEs = mysqli_query($connEs, "insert into `imagen_planta` (`id_imagen`, "
                . "`ruta_imagen`) VALUES (0, '" . $image->imagePath . "');");
        $queryEn = mysqli_query($connEn, "insert into `imagen_planta` (`id_imagen`, "
                . "`ruta_imagen`) VALUES (0, '" . $image->imagePath . "');");

        if ($queryEs == true && $queryEn == true) {

            $queryEs = mysqli_query($connEs, "insert into `planta_x_imagen_planta` (`id_imagen`, "
                    . "`id_variedad`) VALUES (" . $this->getLastIdImage() . ", '" . $image->idVariety . "');");
            $queryEn = mysqli_query($connEn, "insert into `planta_x_imagen_planta` (`id_imagen`, "
                    . "`id_variedad`) VALUES (" . $this->getLastIdImage() . ", '" . $image->idVariety . "');");

            mysqli_close($connEs);
            mysqli_close($connEn);

            if ($queryEs == true && $queryEn == true) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function getLastIdImage() {
        $connEs = $this->getConnetionDB('es');
        $connEs->set_charset('utf8');

        $queryGetLastId = "SELECT MAX(id_imagen) AS 'id_imagen' "
                . "FROM imagen_planta";
        $idCont = mysqli_query($connEs, $queryGetLastId);
        $row = mysqli_fetch_row($idCont);
        $id = trim($row[0]);

        return $id;
    }

    public function deleteImageVariety($id) {
        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');

        $queryEs = mysqli_query($connEs, "delete from imagen_planta where "
                . "id_imagen = " . $id);
        $queryEn = mysqli_query($connEn, "delete from imagen_planta where "
                . "id_imagen = " . $id);

        if ($queryEs == true && $queryEn == true) {

            $queryEs = mysqli_query($connEs, "delete from planta_x_imagen_planta"
                    . " where id_imagen = " . $id);
            $queryEn = mysqli_query($connEn, "delete from planta_x_imagen_planta"
                    . " where id_imagen = " . $id);

            mysqli_close($connEn);
            mysqli_close($connEs);
            
            if ($queryEs == true && $queryEn == true) {
                return true;
            } else {
                return false;
            }
            
        } else {
            return false;
        }
    }

}
