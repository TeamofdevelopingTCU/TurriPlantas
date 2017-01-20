<?php

include '../Data/Data.php';
include '../Domain/Product.php';
/**
 * Description of ProductAdminData
 *
 * @author mm
 */
class ProductAdminData extends Data {
    
     public function getAllProducts() {
        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');
        $resultEs = mysqli_query($connEs, "call pcr_getProducts ");
        $resultEn = mysqli_query($connEn, "call pcr_getProducts ");
        mysqli_close($connEn);
        mysqli_close($connEs);
        $arrayEs = [];
        $arrayEn = [];
        while ($rowEs = mysqli_fetch_array($resultEs)) {
            $currentDataEs = new Product($rowEs['id_producto'], $rowEs['nombre_producto'],
                    $rowEs['imagen_ruta']);
            array_push($arrayEs, $currentDataEs);
        }
        while ($rowEn = mysqli_fetch_array($resultEn)) {
            $currentDataEn = new Product($rowEn['id_producto'], $rowEn['nombre_producto'],
                    $rowEn['imagen_ruta']);
            array_push($arrayEn, $currentDataEn);
        }
        $array = array($arrayEs,$arrayEn);
        return $array;
    }
    
    public function updateProducts($products){        
        
        $productEs = $products[0];
        $productEn = $products[1];
        
        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');
        
        $queryEs = mysqli_query($connEs, "update producto set nombre_producto = "
                . "'".$productEs->getNameProduct()."', imagen_ruta =  '".$productEs->getImagePath()."' "
                . "where id_Producto = ".$productEs->getIdProduct());
        $queryEn = mysqli_query($connEn, "update producto set nombre_producto = "
                . "'".$productEn->getNameProduct()."', imagen_ruta =  '".$productEn->getImagePath()."' "
                . "where id_Producto = ".$productEn->getIdProduct());
        mysqli_close($connEn);
        mysqli_close($connEs);
        
        if($queryEs == true && $queryEn == true){
            return true;
        }else{
            return false;
        }
                
    }
    
    function deleteProduct($id){
        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');
        
        $queryEs = mysqli_query($connEs, "delete from Producto where id_producto = ".$id);
        $queryEn = mysqli_query($connEn, "delete from Producto where id_producto = ".$id);
        mysqli_close($connEn);
        mysqli_close($connEs);
        
        if($queryEs == true && $queryEn == true){
            return true;
        }else{
            return false;
        }
    }
    
    function createProduct($product){
        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');
        $queryEs = mysqli_query($connEs, "insert into `producto` (`id_producto`, "
                . "`nombre_producto`, `imagen_ruta`) VALUES (NULL, '".$product[0]."', '".$product[2]."');");
        $queryEn = mysqli_query($connEn, "insert into `producto` (`id_producto`, "
                . "`nombre_producto`, `imagen_ruta`) VALUES (NULL, '".$product[1]."', '".$product[2]."');");
     
        mysqli_close($connEn);
        mysqli_close($connEs);
        
        if($queryEs == true && $queryEn == true){
            return true;
        }else{
            return false;
        }
    }
    
    
    
    
}
