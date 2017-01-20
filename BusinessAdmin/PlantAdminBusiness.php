<?php

include '../DataAdmin/PlantAdminData.php';

class PlantAdminBusiness {

    public $plantAdminData;
    
    function PlantAdminBusiness() {
        $this->plantAdminData = new PlantAdminData();
    }
    
    public function getAllPlants() {
        return $this->plantAdminData->getAllPlants();
    }
    
    public function updatePlants($plants){
        return $this->plantAdminData->updatePlants($plants);
    }
    
    function deletePlant($id){
        return $this->plantAdminData->deletePlant($id);
    }
    
    function createPlant($plant){
        return $this->plantAdminData->createPlant($plant);
    }
    
}
