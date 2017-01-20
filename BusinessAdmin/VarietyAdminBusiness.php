<?php

include '../DataAdmin/VarietyAdminData.php';

/**
 * Description of VarietyAdminBusiness
 *
 * @author mm
 */
class VarietyAdminBusiness {
    public $varietyAdminData;
    
    public function VarietyAdminBusiness(){
        $this->varietyAdminData = new VarietyAdminData();        
    }
    
    public function getAllVarieties(){
        return $this->varietyAdminData->getAllVarieties();
    }
    public function updateVarieties($variety){
        return $this->varietyAdminData->updateVarieties($variety);
    }
}
