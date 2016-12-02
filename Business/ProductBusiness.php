<?php

include './Data/ProductData.php';

class ProductBusiness {

    public $productData;
    
    public function ProductBusiness() {
        $this->productData = new ProductData();
    }
    
    public function getAllProducts() {
        return $this->productData->getAllProducts();
    }

    
}
