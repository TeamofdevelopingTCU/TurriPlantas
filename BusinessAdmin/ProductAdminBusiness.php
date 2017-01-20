<?php

include '../DataAdmin/ProductAdminData.php';
/**
 * Description of ProductAdminBusiness
 *
 * @author mm
 */
class ProductAdminBusiness {
    public $productAdminData;
    
    public function ProductAdminBusiness(){
        $this->productAdminData = new ProductAdminData();        
    }
    
    public function getAllProduct(){
        return $this->productAdminData->getAllProducts();
    }
    
    public function updateProducts($products){
        return $this->productAdminData->updateProducts($products);
    }
    public function deleteProduct($id){
        return $this->productAdminData->deleteProduct($id);
    }
     public function createProduct($product){
        return $this->productAdminData->createProduct($product);
    }
    
}
