<?php

include '../BusinessAdmin/ImageVarietyAdminBusiness.php';

$b = new ImageVarietyAdminBusiness();

$array = $b->getAllImages();

foreach ($array as $currentImage) {
    
    echo $currentImage->imagePath;
    
}

