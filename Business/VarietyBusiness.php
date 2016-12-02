<?php

include './Data/VarietyData.php';
class VarietyBusiness {
    public $varietyData;
    
    public function VarietyBusiness(){        
        $this->varietyData = new VarietyData();
    }
    
    public function getAllVarieties(){        
        return $this->varietyData->getAllVarieties();
    }
}