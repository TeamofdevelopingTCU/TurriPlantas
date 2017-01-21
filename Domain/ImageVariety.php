<?php

class ImageVariety {

    public $idImage;
    public $imagePath;
    public $idVariety;

    public function ImageVariety($idImage, $imagePath, $idVariety) {
        $this->idImage = $idImage;
        $this->imagePath = $imagePath;
        $this->idVariety = $idVariety;
    }

}
