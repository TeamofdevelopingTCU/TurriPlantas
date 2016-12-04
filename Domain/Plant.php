<?php

class Plant {
    private $idPlant;
    private $scientificName;
    private $commonName;
    private $idOrganization;
    private $variety;
    
    public function Plant($idPlant, $scientificName, $commonName, $idOrganization, $variety) {
        $this->idPlant = $idPlant;
        $this->scientificName = $scientificName;
        $this->commonName = $commonName;
        $this->idOrganization = $idOrganization;
        $this->variety = $variety;
    }

    function getIdPlant() {
        return $this->idPlant;
    }

    function getScientificName() {
        return $this->scientificName;
    }

    function getCommonName() {
        return $this->commonName;
    }

    function getIdOrganization() {
        return $this->idOrganization;
    }

    function getVariety() {
        return $this->variety;
    }

    function setIdPlant($idPlant) {
        $this->idPlant = $idPlant;
    }

    function setScientificName($scientificName) {
        $this->scientificName = $scientificName;
    }

    function setCommonName($commonName) {
        $this->commonName = $commonName;
    }

    function setIdOrganization($idOrganization) {
        $this->idOrganization = $idOrganization;
    }

    function setVariety($variety) {
        $this->variety = $variety;
    }


    
}
