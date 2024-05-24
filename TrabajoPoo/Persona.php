<?php

class Persona{
    protected $ojos;
    protected $cejas;
    protected $nariz;

    public function __construct($ojos, $cejas, $nariz){
        $this->ojos = $ojos;
        $this->cejas = $cejas;
        $this->nariz = $nariz;
    }

    public function ObtenerInformacion(){
        return "Ojos: $this->ojos, Cejas: $this->cejas, Nariz: $this->nariz";
    }

    public function 
    (){
        echo "Información de la persona: ". $this->ObtenerInformacion();
    }


}