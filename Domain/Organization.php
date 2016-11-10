<?php

class Organization {

    private $idOrganization;
    private $nameOrganization;
    private $history;
    private $mission;
    private $view;
    private $values;
    private $characteristics;
    private $location;

    public function Organization($idOrganization, $nameOrganization, $history, $mission, $view, $values, $characteristics, $location) {
        $this->idOrganization = $idOrganization;
        $this->nameOrganization = $nameOrganization;
        $this->history = $history;
        $this->mission = $mission;
        $this->view = $view;
        $this->values = $values;
        $this->characteristics = $characteristics;
        $this->location = $location;
    }

    function getIdOrganization() {
        return $this->idOrganization;
    }

    function getNameOrganization() {
        return $this->nameOrganization;
    }

    function getHistory() {
        return $this->history;
    }

    function getMission() {
        return $this->mission;
    }

    function getView() {
        return $this->view;
    }

    function getValues() {
        return $this->values;
    }

    function getCharacteristics() {
        return $this->characteristics;
    }

    function getLocation() {
        return $this->location;
    }

    function setIdOrganization($idOrganization) {
        $this->idOrganization = $idOrganization;
    }

    function setNameOrganization($nameOrganization) {
        $this->nameOrganization = $nameOrganization;
    }

    function setHistory($history) {
        $this->history = $history;
    }

    function setMission($mission) {
        $this->mission = $mission;
    }

    function setView($view) {
        $this->view = $view;
    }

    function setValues($values) {
        $this->values = $values;
    }

    function setCharacteristics($characteristics) {
        $this->characteristics = $characteristics;
    }

    function setLocation($location) {
        $this->location = $location;
    }

}
