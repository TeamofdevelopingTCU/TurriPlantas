<?php

include_once  '../DataAdmin/OrganizationAdminData.php';

class OrganizationAdminBusiness {
    
    public $organizationAdminData;
    
    public function OrganizationAdminBusiness(){
        $this->organizationAdminData = new OrganizationAdminData();        
    }
    
    public function getHistoryOrganization(){         
        return $this->organizationAdminData->getHistoryOrganization();
    }
    
    public function updateHistoryOrganization($history){
        return $this->organizationAdminData->updateHistoryOrganization($history);
    }
    public function getMissionOrganization(){         
        return $this->organizationAdminData->getMissionOrganization();
    }
    
    public function updateMissionOrganization($mission){
        return $this->organizationAdminData->updateMissionOrganization($mission);
    }
    public function getViewOrganization(){         
        return $this->organizationAdminData->getViewOrganization();
    }
    
    public function updateViewOrganization($view){
        return $this->organizationAdminData->updateViewOrganization($view);
    }
    public function getValuesOrganization(){         
        return $this->organizationAdminData->getValuesOrganization();
    }
    
    public function updateValuesOrganization($values){
        return $this->organizationAdminData->updateValuesOrganization($values);
    }
    public function getCharacteristicsOrganization(){         
        return $this->organizationAdminData->getCharacteristicsOrganization();
    }
    
    public function updateCharacteristicsOrganization($characteristics){
        return $this->organizationAdminData->updateCharacteristicsOrganization($characteristics);
    }
}