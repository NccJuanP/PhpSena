<?php

class Student {
    private $Id;
    private $Name;
    private $Grupo;

    public function __construct($Name, $Grupo) {
        $this->Name = $Name;
        $this->Grupo = $Grupo;
    }

    public function getId() {
        return $this->Id;
    }

    public function getName() {
        return $this->Name;
    }

    public function getGrupo() {
        return $this->Grupo;
    }

    public function setId($Id) {
        $this->Id = $Id;
    }

    public function setName($Name) {
        $this->Name = $Name;
    }

    public function setGrupo($Grupo) {
        $this->Grupo = $Grupo;
    }
}