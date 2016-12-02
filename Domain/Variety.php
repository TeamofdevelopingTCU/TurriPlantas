<?php

class Variety {

    private $idVariety;
    private $nameVariety;
    private $imagePath;
    
    public function Variety($idVariety, $nameVariety, $imagePath) {
        $this->idVariety = $idVariety;
        $this->nameVariety = $nameVariety;
        $this->imagePath = $imagePath;
    }
    
    function getIdVariety() {
        return $this->idVariety;
    }
    function getImagePath() {
        return $this->imagePath;
    }

    function setImagePath($imagePath) {
        $this->imagePath = $imagePath;
    }

    function getNameVariety() {
        return $this->nameVariety;
    }

    function setIdVariety($idVariety) {
        $this->idVariety = $idVariety;
    }

    function setNameVariety($nameVariety) {
        $this->nameVariety = $nameVariety;
    }


    
}
