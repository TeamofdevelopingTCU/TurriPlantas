<?php

class Data {
    
    /*super clase de los data*/
    
    /* atributos */
    public $server;
    public $user;
    public $password;
    public $db;
    
    public $connection;
    public $isActive;
    
    /* constructor */
    public function Data(){
        $this->isActive = false;
        $this->server = "50.62.209.49";
        $this->user = "turriplantas";
        $this->password = "Turr1p1antas_123!";
        $this->db = "turriplantas_db";
    }
    
}

?>
