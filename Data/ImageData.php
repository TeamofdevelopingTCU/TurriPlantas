<?php

include_once 'Data.php';
include 'Image.php';

class ImageData extends Data {
    
    public function getAllImages() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $result = mysqli_query($conn, "call pcr_obtenerImagenes");
        $array = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentData = new Image($row['id_imagen'], $row['descripcion'], $row['imagen_ruta'], $row['id_organization']);
            array_push($array, $currentData);
        }
        return $array;
    }
    
}
