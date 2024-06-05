<?php

class Subject {
    private $Id;
    private $Name;
    private $Description;

    public function __construct($Name, $Description) {
        $this->Name = $Name;
        $this->Description = $Description;
    }

    public function getId() {
        return $this->Id;
    }

    public function getName() {
        return $this->Name;
    }

    public function getDescription() {
        return $this->Description;
    }

    public function setId($Id) {
        $this->Id = $Id;
    }

    public function setName($Name) {
        $this->Name = $Name;
    }

    public function setDescription($Description) {
        $this->Description = $Description;
    }
}