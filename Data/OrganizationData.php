<?php

include_once 'Data.php';
include './Domain/Organization.php';

class OrganizationData extends Data {
    
    public function getOrganization(){       
        $conn = new mysqli($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $result = mysqli_query($conn, "call pcr_getOrganization");
        mysqli_close($conn);
        $row = mysqli_fetch_array($result);
        $organization = new Organization($row['id_organizacion'], $row['historia'],
                $row['localizacion'], $row['caracteristicas'], $row['valores'], $row['mision'],
                $row['vision'],$row['nombre_organizacion']);
                     
        return $organization;   
    }
    
}
