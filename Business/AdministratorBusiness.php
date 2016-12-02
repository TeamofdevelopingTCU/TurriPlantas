<?php

include './Data/AdministratorData.php';

class AdministratorBusiness {
    public $administratorData;
    
    
    public function AdministratorBusiness(){
        $this->administratorData = new AdministratorData();
    }    

    public function validateUser($nameUser, $passUser){
        return $this->administratorData->validateUser($nameUser, $passUser);
    }
    
}
