<?php

class Student {
    private $Id;
    private $Name;
    private $Grupo;
    private $notas = array();

/*     public function __construct($Name, $Grupo) {
        $this->Name = $Name;
        $this->Grupo = $Grupo;
    } */

    public function getId() {
        return $this->Id;
    }

    public function getName() {
        return $this->Name;
    }

    public function getGrupo() {
        return $this->Grupo;
    }

    public function getNotas() {
        return $this->notas;
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

    public function setNotas($nota) {
        array_push($this->notas, $nota);
    }
}