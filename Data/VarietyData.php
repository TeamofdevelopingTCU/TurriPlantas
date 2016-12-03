<?php

include_once 'Data.php';
include './Domain/Variety.php';

class VarietyData extends Data {
    
    public function getAllVarieties() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $result = mysqli_query($conn, "call pcr_getVarieties ");
        $array = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentData = new Variety($row['id_variedad'], $row['nombre_variedad'],
                    $row['imagen_ruta']);
            array_push($array, $currentData);
        }
        return $array;
    }
    
}
