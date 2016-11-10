<?php

include_once 'Data.php';
include 'Organization.php';

class OrganizationData extends Data {
    
    public function obtenerOrganizacion(){
        $conn = new mysqli($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $result = mysqli_query($conn, "call pcr_obtenerOrganizacion");
        mysqli_close($conn);
        $row = mysqli_fetch_array($result);
        $organization = new Organization($row['id_organizacion'], $row['nombre_organizacion'], $row['historia'],
                $row['localizacion'], $row['caracteristicas'], $row['valores'], $row['mision'],
                $row['vision']);
        return $organization;
    }
    
}
