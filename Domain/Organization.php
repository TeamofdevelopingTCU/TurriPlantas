<?php

class Organization {

    public $idOrganization;
    public $nameOrganization;
    public $history;
    public $mission;
    public $view;
    public $values;
    public $characteristics;
    public $location;

    
    public function Organization($idOrganization, $history, $location, $characteristics, $values, $mission, $view, $nameOrganization) {
        $this->idOrganization = $idOrganization;
        $this->nameOrganization = $nameOrganization;
        $this->history = $history;
        $this->mission = $mission;
        $this->view = $view;
        $this->values = $values;
        $this->characteristics = $characteristics;
        $this->location = $location;
    }
   
}
