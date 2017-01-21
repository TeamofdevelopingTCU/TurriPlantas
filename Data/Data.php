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
            if(@session_start() == false)
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

    function getConnetionDB($lang) {
        if ($lang == 'es') {
            $this->server = "localhost";
            $this->user = "root";
            $this->password = "";
            $this->db = "turriplantas_esp";
        } else if ($lang == 'en') {
            $this->server = "localhost";
            $this->user = "root";
            $this->password = "";
            $this->db = "turriplantas_eng";
        }
        $conn = new mysqli($this->server, $this->user, $this->password, $this->db);
        return $conn;
    }
}

?>