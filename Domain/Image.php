<?php

class Image {

    public $idImage;
    public $imagePath;
    public $description;
    
    public function Image($idImage, $description,$imagePath) {
        $this->idImage = $idImage;
        $this->imagePath = $imagePath;
        $this->description = $description;
    }
    
}
