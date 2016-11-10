<?php

class Variety {

    private $idVariety;
    private $nameVariety;
    
    public function Variety($idVariety, $nameVariety) {
        $this->idVariety = $idVariety;
        $this->nameVariety = $nameVariety;
    }
    
    function getIdVariety() {
        return $this->idVariety;
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
