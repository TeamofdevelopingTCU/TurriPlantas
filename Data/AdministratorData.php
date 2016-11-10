<?php

include_once 'Data.php';
include 'Administrator.php';

class AdministratorData extends Data {
   
    public function validateUser($nameUser, $passUser){
        $conn = new mysqli($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $query = 'call pcr_validarUsuario('.$nameUser.','.$passUser.')';
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);
        $row = mysqli_fetch_array($result);
        if($row['id_administrator'] != ""){
            return 1;
        } else {
            return 0;
        }
    }
    
}
