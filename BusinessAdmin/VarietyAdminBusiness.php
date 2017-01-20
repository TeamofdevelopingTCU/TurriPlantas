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
    public function deleteVariety($id){
        return $this->varietyAdminData->deleteVariety($id);
    }
     public function createVariety($variety){
        return $this->varietyAdminData->createVariety($variety);
    }
}
