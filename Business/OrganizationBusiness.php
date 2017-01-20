<?php

include './Data/OrganizationData.php';
class OrganizationBusiness {
    public $organizationData;
    
    public function OrganizationBusiness(){
        $this->organizationData = new OrganizationData();        
    }
    
    public function getOrganization(){        
        return $this->organizationData->getOrganization();
    }
}
