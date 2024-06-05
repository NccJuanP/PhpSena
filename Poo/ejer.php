<?php 

class colegio{
    public $nombre;
    private $director;

    public function __construct($nombre, $director){
        $this->nombre = $nombre;
        $this->director = $director;
    }

    public function mostrarTodo(){
        echo "Colegio: $this->nombre director: $this->director";
    }
    public function setDirector($value){
        $this->director = $value;
    }
    public function getDirector(){
        return $this->director;
    }
}

$colegio1 = new colegio("I.E San José", "don tomas");
/* $colegio1->nombre = "I.E San José";
//$colegio1->director = "don tomas";
$colegio1->setDirector("don tomas"); */

$colegio1->mostrarTodo();

