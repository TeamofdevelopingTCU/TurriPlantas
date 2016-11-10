<?php

class Image {

    private $idImage;
    private $imagePath;
    private $description;
    
    public function Image($idImage, $imagePath, $description) {
        $this->idImage = $idImage;
        $this->imagePath = $imagePath;
        $this->description = $description;
    }
    
    function getIdImage() {
        return $this->idImage;
    }

    function getImagePath() {
        return $this->imagePath;
    }

    function getDescription() {
        return $this->description;
    }

    function setIdImage($idImage) {
        $this->idImage = $idImage;
    }

    function setImagePath($imagePath) {
        $this->imagePath = $imagePath;
    }

    function setDescription($description) {
        $this->description = $description;
    }


    
}
