<?php

include_once 'Data.php';
include 'Variety.php';

class VarietyData extends Data {
    
    public function getAllVarieties() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $result = mysqli_query($conn, "call pcr_obtenerVariedades ");
        $array = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentData = new Variety($row['id_variedad'], $row['nombre_variedad']);
            array_push($array, $currentData);
        }
        return $array;
    }
    
}
