<?php

include_once '../DataAdmin/ImageVarietyAdminData.php';

class ImageVarietyAdminBusiness {
    
    public $imageVarietyAdminData;
    
    function ImageVarietyAdminBusiness() {
        $this->imageVarietyAdminData = new ImageVarietyAdminData();
    }
    
    public function getAllImages() {
        return $this->imageVarietyAdminData->getAllImages();
    }
    
    public function addImageVariety($image) {
        return $this->imageVarietyAdminData->addImageVariety($image);
    }
    
    public function deleteImageVariety($id){
        return $this->imageVarietyAdminData->deleteImageVariety($id);
    }
    
}

