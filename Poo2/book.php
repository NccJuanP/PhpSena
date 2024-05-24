<?php

class book{
    public function __construct(
        private string $autor,
        private string $titulo,
        private  float $precio,
        private int $stock,
        private int $id
    ){}

    public function getinfo(){
        $info = "
        <ul>
        <i><b> $this->titulo </b></i>
        escrito por: <i>$this->autor</i>
        <br> Precio: <i>$this->precio</i>
        <br> Id: <i>$this->id</i>
        </ul>";

        if($this->stock > 0){
            $info.= "producto disponible <span Style='color:green;'>
            $this->stock</span>";
        }else{
            $info.= "producto no disponible <span Style='color:red;'>
            $this->stock</span>";
        }

        return $info;
    }
}

//instancia de la clase

$libro1 = new book(
    autor: "Minotauro",
    titulo: "La casa de las sombras",
    precio: 2.99,
    stock: 100,
    id: 1
);

$libro1 = new book(
    autor: "autor1",
    titulo: "titulo1",
    precio: 100,
    stock: 10,
    id: 1
);
 
echo $libro1->getinfo();