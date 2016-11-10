<?php

include_once 'Data.php';
include 'Plant.php';

class PlantData extends Data{
    
    public function getAllPlants() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $result = mysqli_query($conn, "call pcr_obtenerPlantas");
        $array = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentData = new Plant($row['id_planta'], $row['nombre_cientifico'],
                    $row['nombre_comun'], $row['imagen_ruta'], $row['id_variedad']);
            array_push($array, $currentData);
        }
        return $array;
    }
    
    public function getPlantasByVariety($idVariety) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $result = mysqli_query($conn, "call pcr_obtenerPlantasPorVariedad(". $idVariety . ')');
        $array = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentData = new Plant($row['id_planta'], $row['nombre_cientifico'],
                    $row['nombre_comun'], $row['imagen_ruta'], $row['id_variedad']);
            array_push($array, $currentData);
        }
        return $array;
    }
    
}
