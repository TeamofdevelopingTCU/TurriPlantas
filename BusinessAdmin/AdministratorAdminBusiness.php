<?php

include_once '../DataAdmin/AdministratorAdminData.php';

class AdministratorAdminBusiness {

    public $administratorAdminData;
    
    function AdministratorAdminBusiness() {
        $this->administratorAdminData = new AdministratorAdminData();
    }

    public function getAllAdministrators() {
        return $this->administratorAdminData->getAllAdministrators();
    }

    public function addAdministrator($administrator) {
        return $this->administratorAdminData->addAdministrator($administrator);
    }

    public function deleteAdministrator($id) {
        return $this->administratorAdminData->deleteAdministrator($id);
    }
    
    public function updateAdministrator($administrator){
        return $this->administratorAdminData->updateAdministrator($administrator);
    }
    
    public function login($userName, $password){
        return $this->administratorAdminData->login($userName, $password);
    }
    
}
