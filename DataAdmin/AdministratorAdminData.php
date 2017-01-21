<?php

include_once '../Data/Data.php';
include '../Domain/Administrator.php';

class AdministratorAdminData extends Data{

    public function getAllAdministrators() {
        $connEs = $this->getConnetionDB('es');
        $connEs->set_charset('utf8');

        $resultEs = mysqli_query($connEs, "select * from administrador");

        mysqli_close($connEs);

        $array = [];

        while ($row = mysqli_fetch_array($resultEs)) {
            $currentData = new Administrator($row['id_administrador'],
                    $row['nombre_completo'],
                    $row['nombre_usuario'],
                    $row['contrasena'],
                    $row['email']);
            array_push($array, $currentData);
        }
        return $array;
    }

    public function addAdministrator($administrator) {
        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');

        $queryEs = mysqli_query($connEs, "insert into `administrador` VALUES (0, '" .
                $administrator->getUserName() ."','". 
                $administrator->getPassword() ."','" .
                $administrator->getEmail() . "','" . 
                $administrator->getName() . "');");
        $queryEn = mysqli_query($connEn, "insert into `administrador` VALUES (0, '" .
                $administrator->getUserName() ."','". 
                $administrator->getPassword() ."','" .
                $administrator->getEmail() . "','" . 
                $administrator->getName() . "');");
        
        mysqli_close($connEs);
        mysqli_close($connEn);

        if ($queryEs == true && $queryEn == true) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteAdministrator($id) {
        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');

        $queryEs = mysqli_query($connEs, "delete from administrador where "
                . "id_administrador = " . $id);
        $queryEn = mysqli_query($connEn, "delete from administrador where "
                . "id_administrador = " . $id);
        
        mysqli_close($connEs);
        mysqli_close($connEn);

        if ($queryEs == true && $queryEn == true) {
                return true;
        } else {
            return false;
        }
    }
    
    public function updateAdministrator($administrator){
        
        $connEs = $this->getConnetionDB('es');
        $connEn = $this->getConnetionDB('en');
        $connEs->set_charset('utf8');
        
        $queryEs = mysqli_query($connEs, "update administrador set contrasena = "
                . "'".$administrator->getPassword()."', "
                . "nombre_completo = '" . $administrator->getName()
                . "', email = '".$administrator->getEmail()."' "
                . "where id_administrador = " . $administrator->getIdAdministrator());
        $queryEn = mysqli_query($connEn, "update administrador set contrasena = "
                . "'".$administrator->getPassword()."', "
                . "nombre_completo = '" . $administrator->getName()
                . "', email = '".$administrator->getEmail()."' "
                . "where id_administrador = " . $administrator->getIdAdministrator());
        
        mysqli_close($connEn);
        mysqli_close($connEs);
        
        if($queryEs == true && $queryEn == true){
            return true;
        }else{
            return false;
        }
    }
    
    public function login($userName, $password){
        $connEs = $this->getConnetionDB('es');
        $connEs->set_charset('utf8');

        $resultEs = mysqli_query($connEs, "select * from administrador where"
                . " nombre_usuario = '" . $userName . "' AND contrasena = '"
                . $password . "';");

        mysqli_close($connEs);

        $row = mysqli_fetch_array($resultEs);
        $count = mysqli_num_rows($resultEs);
        
        if($count == 1){
            return 1;
        } else {
            return 0;
        }
        
    }
    
}
