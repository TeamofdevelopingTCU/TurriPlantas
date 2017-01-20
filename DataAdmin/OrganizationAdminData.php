<?php

include '../Data/Data.php';
include '../Domain/Organization.php';
/**
 * Description of OrganizationAdminData
 *
 * @author mm
 */
class OrganizationAdminData extends Data {

    public function getHistoryOrganization() {

        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');
        $resultEs = mysqli_query($connEs, "select historia from organizacion");
        $resultEn = mysqli_query($connEn, "select historia from organizacion");
        mysqli_close($connEn);
        mysqli_close($connEs);

        $rowEs = mysqli_fetch_array($resultEs);
        $rowEn = mysqli_fetch_array($resultEn);

        $array = [];
        array_push($array, $rowEs['historia']);
        array_push($array, $rowEn['historia']);
        return $array;
    }
    
    public function updateHistoryOrganization($history){        
        
        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');
        
        $queryEs = mysqli_query($connEs, "update organizacion set historia = '".$history[0]."'");
        $queryEn = mysqli_query($connEn, "update organizacion set historia = '".$history[1]."'");
        mysqli_close($connEn);
        mysqli_close($connEs);
        
        if($queryEs == true && $queryEn == true){
            return true;
        }else{
            return false;
        }
                
    }
    
    public function getMissionOrganization() {

        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');
        $resultEs = mysqli_query($connEs, "select mision from organizacion");
        $resultEn = mysqli_query($connEn, "select mision from organizacion");
        mysqli_close($connEn);
        mysqli_close($connEs);

        $rowEs = mysqli_fetch_array($resultEs);
        $rowEn = mysqli_fetch_array($resultEn);

        $array = [];
        array_push($array, $rowEs['mision']);
        array_push($array, $rowEn['mision']);
        return $array;
    }
    
    public function updateMissionOrganization($mission){        
        
        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');
        
        $queryEs = mysqli_query($connEs, "update organizacion set mision = '".$mission[0]."'");
        $queryEn = mysqli_query($connEn, "update organizacion set mision = '".$mission[1]."'");
        mysqli_close($connEn);
        mysqli_close($connEs);
        
        if($queryEs == true && $queryEn == true){
            return true;
        }else{
            return false;
        }
                
    }

     public function getViewOrganization() {

        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');
        $resultEs = mysqli_query($connEs, "select vision from organizacion");
        $resultEn = mysqli_query($connEn, "select vision from organizacion");
        mysqli_close($connEn);
        mysqli_close($connEs);

        $rowEs = mysqli_fetch_array($resultEs);
        $rowEn = mysqli_fetch_array($resultEn);

        $array = [];
        array_push($array, $rowEs['vision']);
        array_push($array, $rowEn['vision']);
        return $array;
    }
    
    public function updateViewOrganization($view){        
        
        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');
        
        $queryEs = mysqli_query($connEs, "update organizacion set vision = '".$view[0]."'");
        $queryEn = mysqli_query($connEn, "update organizacion set vision = '".$view[1]."'");
        mysqli_close($connEn);
        mysqli_close($connEs);
        
        if($queryEs == true && $queryEn == true){
            return true;
        }else{
            return false;
        }
                
    }
    
    public function getValuesOrganization() {

        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');
        $resultEs = mysqli_query($connEs, "select valores from organizacion");
        $resultEn = mysqli_query($connEn, "select valores from organizacion");
        mysqli_close($connEn);
        mysqli_close($connEs);

        $rowEs = mysqli_fetch_array($resultEs);
        $rowEn = mysqli_fetch_array($resultEn);

        $array = [];
        array_push($array, $rowEs['valores']);
        array_push($array, $rowEn['valores']);
        return $array;
    }
    
    public function updateValuesOrganization($values){        
        
        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');
        
        $queryEs = mysqli_query($connEs, "update organizacion set valores = '".$values[0]."'");
        $queryEn = mysqli_query($connEn, "update organizacion set valores = '".$values[1]."'");
        mysqli_close($connEn);
        mysqli_close($connEs);
        
        if($queryEs == true && $queryEn == true){
            return true;
        }else{
            return false;
        }
                
    }
    public function getCharacteristicsOrganization() {

        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');
        $resultEs = mysqli_query($connEs, "select caracteristicas from organizacion");
        $resultEn = mysqli_query($connEn, "select caracteristicas from organizacion");
        mysqli_close($connEn);
        mysqli_close($connEs);

        $rowEs = mysqli_fetch_array($resultEs);
        $rowEn = mysqli_fetch_array($resultEn);

        $array = [];
        array_push($array, $rowEs['caracteristicas']);
        array_push($array, $rowEn['caracteristicas']);
        return $array;
    }
    
    public function updateCharacteristicsOrganization($characteristics){        
        
        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');
        
        $queryEs = mysqli_query($connEs, "update organizacion set caracteristicas = '".$characteristics[0]."'");
        $queryEn = mysqli_query($connEn, "update organizacion set caracteristicas = '".$characteristics[1]."'");
        mysqli_close($connEn);
        mysqli_close($connEs);
        
        if($queryEs == true && $queryEn == true){
            return true;
        }else{
            return false;
        }
                
    }
    
}
