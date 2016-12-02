<?php

include './Data/PlantData.php';

class PlantBusiness {
    
    public $plantData;
    
    public function PlantBusiness(){        
        $this->plantData = new PlantData();        
    }
    
    public function getAllPlants(){
        return $this->plantData->getAllPlants();
    }
    
    public function getPlantasByVariety($idVariety){        
        return $this->plantData->getPlantasByVariety($idVariety);
    }
    
    
}
