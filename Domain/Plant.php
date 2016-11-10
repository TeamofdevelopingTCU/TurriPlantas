<?php

class Plant {
    private $idPlant;
    private $scientificName;
    private $commonName;
    private $imagePath;
    private $variety;
    
    public function Plant($idPlant, $scientificName, $commonName, $imagePath, $variety) {
        $this->idPlant = $idPlant;
        $this->scientificName = $scientificName;
        $this->commonName = $commonName;
        $this->imagePath = $imagePath;
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

    function getImagePath() {
        return $this->imagePath;
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

    function setImagePath($imagePath) {
        $this->imagePath = $imagePath;
    }

    function setVariety($variety) {
        $this->variety = $variety;
    }


    
}
