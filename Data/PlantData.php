<?php

include_once 'Data.php';
include './Domain/Plant.php';

class PlantData extends Data{
    
    public function getAllPlants() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $result = mysqli_query($conn, "call pcr_getPlants");
        $array = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentData = new Plant($row['id_planta'], $row['nombre_cientifico'],
                    $row['nombre_comun'], $row['id_organizacion'], $row['id_variedad']);
            array_push($array, $currentData);
        }
        return $array;
    }
    
    public function getPlantasByVariety($idVariety) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $result = mysqli_query($conn, "call pcr_getPlantsByVariety(" . $idVariety . ")");
        $array = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentData = new Plant($row['id_planta'], $row['nombre_cientifico'],
                    $row['nombre_comun'], $row['id_organizacion'], $row['id_variedad']);
            array_push($array, $currentData);
        }
        return $array;
    }
    
}
