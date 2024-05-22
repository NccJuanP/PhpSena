<?php
class colegio{
    public $nombre;
    private $director;
    public $ciudad;

    public function __construct($nombre, $director, $ciudad){
        $this->nombre = $nombre;
        $this->director = $director;
        $this->ciudad = $ciudad;
        $this->getDirector();
    }

    public function mostrarTodo(){
        echo "Colegio: $this->nombre director: $this->director en la ciudad de: $this->ciudad";
    }
    public function setDirector($value){
        $this->director = $value;
    }
    public function getDirector(){
        return $this->director;
    }
}

$colegio1 = new colegio("I.E San José", "don tomas", "Medellín");

$colegio1->mostrarTodo();
