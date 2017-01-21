<?php

include_once '../Data/Data.php';
include '../Domain/Plant.php';

class PlantAdminData extends Data {

    public function getAllPlants() {
        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');
        $resultEs = mysqli_query($connEs, "call pcr_getPlants");
        $resultEn = mysqli_query($connEn, "call pcr_getPlants");
        mysqli_close($connEn);
        mysqli_close($connEs);
        
        $arrayEs = [];
        $arrayEn = [];
        
        while ($row = mysqli_fetch_array($resultEs)) {
            $currentData = new Plant($row['id_planta'], $row['nombre_cientifico'],
                    $row['nombre_comun'], $row['id_organizacion'], $row['id_variedad']);
            array_push($arrayEs, $currentData);
        }
        while ($row = mysqli_fetch_array($resultEn)) {
            $currentData = new Plant($row['id_planta'], $row['nombre_cientifico'],
                    $row['nombre_comun'], $row['id_organizacion'], $row['id_variedad']);
            array_push($arrayEn, $currentData);
        }
        
        $array = [$arrayEs, $arrayEn];
        
        return $array;
    }
    
    public function updatePlants($plants){
        $plantEs = $plants[0];
        $plantEn = $plants[1];
        
        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');
        
        $queryEs = mysqli_query($connEs, "update planta set nombre_cientifico = "
                . "'".$plantEs->getScientificName()."', id_variedad =  ".$plantEs->getVariety()." "
                . "where id_planta = ".$plantEs->getIdPlant());
        $queryEn = mysqli_query($connEn, "update planta set nombre_cientifico = "
                . "'".$plantEn->getScientificName()."', id_variedad =  ".$plantEn->getVariety()." "
                . "where id_planta = ".$plantEn->getIdPlant());
        
        mysqli_close($connEn);
        mysqli_close($connEs);
        
        if($queryEs == true && $queryEn == true){
            return true;
        }else{
            return false;
        }
    }
    
    function deletePlant($id){
        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');
        
        $queryEs = mysqli_query($connEs, "delete from planta where id_planta = ".$id);
        $queryEn = mysqli_query($connEn, "delete from planta where id_planta = ".$id);
        
        mysqli_close($connEn);
        mysqli_close($connEs);
        
        if($queryEs == true && $queryEn == true){
            return true;
        }else{
            return false;
        }
    }
    
    function createPlant($plant){
        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');
        
        $queryEs = mysqli_query($connEs, "insert into `planta` (`id_planta`, "
                . "`nombre_cientifico`, `id_variedad`) VALUES (0, '"
                .$plant[0]."', ".$plant[2].");");
        $queryEn = mysqli_query($connEn, "insert into `planta` (`id_planta`, "
                . "`nombre_cientifico`, `id_variedad`) VALUES (0, '"
                .$plant[1]."', ".$plant[2].");");
     
        mysqli_close($connEn);
        mysqli_close($connEs);
        
        if($queryEs == true && $queryEn == true){
            return true;
        }else{
            return false;
        }
    }
    
}
