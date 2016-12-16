<?php

include_once 'Data.php';
include './Domain/Variety.php';
include_once './Domain/Image.php';

class VarietyData extends Data {
    
    public function getAllVarieties() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $result = mysqli_query($conn, "call pcr_getVarieties ");
        $array = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentData = new Variety($row['id_variedad'], $row['nombre_variedad'],
                    $row['imagen_ruta']);
            array_push($array, $currentData);
        }
        return $array;
    }
    
    public function getImagesVariety($idVariety) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $result = mysqli_query($conn, "call pcr_getImagesVarieties(" . $idVariety . ")");
        $array = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentImg = new Image($row['id_imagen'], " ", $row['ruta_imagen']);
            array_push($array, $currentImg);
        }
        if(empty($array) == 1){
            return -1;
        }
        return $array;
    }
    
}
