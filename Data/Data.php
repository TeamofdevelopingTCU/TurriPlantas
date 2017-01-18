<?php

/**
 * Description of PlanData
 */
class Data {
    
    public $server;
    public $user;
    public $password;
    public $db;
    
    public $connection;
    public $isActive;

    /* constructor */

    public function Data() {

        if (!isset($_SESSION)) {
            session_start();
        }
        
        //Si la variable lang no existe se pone en español
        if (!isset($_SESSION["lang"])) {
            $_SESSION["lang"] = 'es';
            $this->isActive = false;
            $this->server = "localhost";
            $this->user = "root";
            $this->password = "";
            $this->db = "turriplantas_esp";
        } else if (isset($_SESSION["lang"])) {
            if ($_SESSION["lang"] == 'es') {
                $this->isActive = false;
                $this->server = "localhost";
                $this->user = "root";
                $this->password = "";
                $this->db = "turriplantas_esp";
            } else if ($_SESSION["lang"] == 'en') {
                $this->isActive = false;
                $this->server = "localhost";
                $this->user = "root";
                $this->password = "";
                $this->db = "turriplantas_eng";
            }
        }
    }

}

?>