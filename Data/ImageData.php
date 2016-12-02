<?php

include_once 'Data.php';
include './Domain/Image.php';

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
    
    public function getImagesHome(){
        
        $conn = new mysqli($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $query = "call  prc_getImagesHome";
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);
        $array = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentImage = new Image("","",$row['imagen_ruta']);
            array_push($array, $currentImage);
            
        }
        return $array;
        
        
       
    }
    
    
    
}
