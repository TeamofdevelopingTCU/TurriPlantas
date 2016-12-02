<?php

include './Data/ImageData.php';
class ImageBusiness {
    
    public $imageData;
    
    public function ImageBusiness(){
        $this->imageData = new ImageData();
    }
    
    public function getAllImages(){
        return $this->imageData->getAllImages();        
    }
    
    public function getImagesHome(){
        return $this->imageData->getImagesHome();        
    }
    
    
}
