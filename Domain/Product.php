<?php

class Product {
    
    private $idProduct;
    private $nameProduct;
    private $imagePath;

    public function Product($idProduct, $nameProduct, $imagePath) {
        $this->idProduct = $idProduct;
        $this->nameProduct = $nameProduct;
        $this->imagePath = $imagePath;
    }
    function getIdProduct() {
        return $this->idProduct;
    }

    function getNameProduct() {
        return $this->nameProduct;
    }

    function getImagePath() {
        return $this->imagePath;
    }

    function setIdProduct($idProduct) {
        $this->idProduct = $idProduct;
    }

    function setNameProduct($nameProduct) {
        $this->nameProduct = $nameProduct;
    }

    function setImagePath($imagePath) {
        $this->imagePath = $imagePath;
    }

}
