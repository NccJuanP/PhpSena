<?php

class ciudad{
    public $nombre;
    public $abreviatura;
    public $numeroHabitantes;

    public function __construct($nombre, $abreviatura, $numeroHabitantes){
        $this->nombre = $nombre;
        $this->abreviatura = $abreviatura;
        $this->numeroHabitantes = $numeroHabitantes;
    }
}

$ciudad1 = new ciudad("Medellín", "MDE", 700000000);

echo "La ciudad es: $ciudad1->nombre y la abreviatura es: $ciudad1->abreviatura";

