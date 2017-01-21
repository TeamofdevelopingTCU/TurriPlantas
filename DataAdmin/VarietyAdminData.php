<?php

include_once '../Data/Data.php';
include '../Domain/Variety.php';

/**
 * Description of VarietyAdminData
 *
 * @author mm
 */
class VarietyAdminData extends Data {
    
    public function getAllVarieties() {
        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');
        $resultEs = mysqli_query($connEs, "call pcr_getVarieties ");
        $resultEn = mysqli_query($connEn, "call pcr_getVarieties ");
        $arrayEs = [];
        $arrayEn = [];
        while ($rowEs = mysqli_fetch_array($resultEs)) {
            $currentDataEs = new Variety($rowEs['id_variedad'], $rowEs['nombre_variedad'],
                    $rowEs['imagen_ruta']);
            array_push($arrayEs, $currentDataEs);
        }
        while ($rowEn = mysqli_fetch_array($resultEn)) {
            $currentDataEn = new Variety($rowEn['id_variedad'], $rowEn['nombre_variedad'],
                    $rowEn['imagen_ruta']);
            array_push($arrayEn, $currentDataEn);
        }
        $array = array($arrayEs, $arrayEn);
        return $array;
    }
    
    public function updateVarieties($variety){        
        
        $varietyEs = $variety[0];
        $varietyEn = $variety[1];
        
        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');
        
        $queryEs = mysqli_query($connEs, "update variedad set nombre_variedad = "
                . "'".$varietyEs->getNameVariety()."', imagen_ruta =  '".$varietyEs->getImagePath()."' "
                . "where id_variedad = ".$varietyEs->getIdVariety());
        $queryEn = mysqli_query($connEn, "update variedad set nombre_variedad = "
                . "'".$varietyEn->getNameVariety()."', imagen_ruta =  '".$varietyEn->getImagePath()."' "
                . "where id_variedad = ".$varietyEn->getIdVariety());
        mysqli_close($connEn);
        mysqli_close($connEs);
        
        if($queryEs == true && $queryEn == true){
            return true;
        }else{
            return false;
        }
                
    }
    
     function deleteVariety($id){
        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');
        
        $queryEs = mysqli_query($connEs, "delete from variedad where id_variedad = ".$id);
        $queryEn = mysqli_query($connEn, "delete from variedad where id_variedad = ".$id);
        mysqli_close($connEn);
        mysqli_close($connEs);
        
        if($queryEs == true && $queryEn == true){
            return true;
        }else{
            return false;
        }
    }
    
    function createVariety($variety){
        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');
        $queryEs = mysqli_query($connEs, "insert into `variedad` (`id_variedad`, "
                . "`nombre_variedad`, `imagen_ruta`) VALUES (NULL, '".$variety[0]."', '".$variety[2]."');");
        $queryEn = mysqli_query($connEn, "insert into `variedad` (`id_variedad`, "
                . "`nombre_variedad`, `imagen_ruta`) VALUES (NULL, '".$variety[1]."', '".$variety[2]."');");
     
        mysqli_close($connEn);
        mysqli_close($connEs);
        
        if($queryEs == true && $queryEn == true){
            return true;
        }else{
            return false;
        }
    }
    
    
}
