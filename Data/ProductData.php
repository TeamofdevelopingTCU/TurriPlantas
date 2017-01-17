<?php

include_once 'Data.php';
include './Domain/Product.php';

class ProductData extends Data {

    public function getAllProducts() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $result = mysqli_query($conn, "call pcr_getProducts ");
        $array = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentData = new Product($row['id_producto'], $row['nombre_producto'],
                    $row['imagen_ruta']);
            array_push($array, $currentData);
        }
        return $array;
    }
    
}
