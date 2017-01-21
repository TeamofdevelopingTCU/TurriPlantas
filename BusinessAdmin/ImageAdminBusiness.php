<?php

include_once '../DataAdmin/ImageAdminData.php';

class ImageAdminBusiness {
    
    public $imageAdminData;
    
    function ImageAdminBusiness() {
        $this->imageAdminData = new ImageAdminData();
    }

    public function getAllImages() {
        return $this->imageAdminData->getAllImages();
    }

    public function addImage($image) {
        return $this->imageAdminData->addImage($image);
    }

    public function deleteImage($id) {
        return $this->imageAdminData->deleteImage($id);
    }
    
}
