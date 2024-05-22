<?php
class persona{
    private $nombre;
    private $apellido;
    private $edad;

    public function __construct($nombre, $apellido, $edad){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->ciudad = $edad;
    }

    public function mayorEdad(){
        if($this->edad >= 18){
            return true;
        }
        else{
            return true;
        }
    }

    public function nombreCompleto(){
        echo "{$this->nombre} {$this->apellido}";
    }

    function __set($propiedad, $value){
        if(property_exists($this,$propiedad)){
            $this->$propiedad = $value;
        }
    }

    function __get($propiedad){
        if(property_exists($this,$propiedad)){
           return $this->$propiedad;
        }
    }
}

$persona1 = new persona("Juan", "Londoño", 21);

if($persona1->mayorEdad()){
    echo "El Usuario es mayor de edad";
}else{
    echo "El Usuario no es mayor de edad";
}

echo "<br>";

echo $persona1->__set("nombre", "cristian");
echo $persona1->__get("nombre");
