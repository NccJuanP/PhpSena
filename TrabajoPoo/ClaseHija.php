<?php

require "Persona.php";

class Hijo extends Persona{
    protected $FormaCara;

    public function __construct($ojos, $cejas, $nariz, $FormaCara){
        parent::__construct($ojos, $cejas, $nariz);
        $this->FormaCara = $FormaCara;
    }

    public function MostrarInformacion(){
        echo "Información del hijo: ". $this->ObtenerInformacion() . ", forma de la cara: $this->FormaCara";
    }
}