<?php

class Administrator {
    
    private $idAdministrator;
    private $name;
    private $userName;
    private $password;
    private $email;
    
    public function Administrator($idAdministrator, $name, $userName, $password, $email) {
        $this->idAdministrator = $idAdministrator;
        $this->name = $name;
        $this->userName = $userName;
        $this->password = $password;
        $this->email = $email;
    }
    function getIdAdministrator() {
        return $this->idAdministrator;
    }

    function getName() {
        return $this->name;
    }

    function getUserName() {
        return $this->userName;
    }

    function getPassword() {
        return $this->password;
    }

    function getEmail() {
        return $this->email;
    }

    function setIdAdministrator($idAdministrator) {
        $this->idAdministrator = $idAdministrator;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setUserName($userName) {
        $this->userName = $userName;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setEmail($email) {
        $this->email = $email;
    }


}
