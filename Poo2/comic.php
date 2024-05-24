<?php

require "book.php";

class comic extends book
{
    public function __construct(
        $autor,
        $titulo,
        $precio,
        $stock,
        $id,
        private array $ilustrador,
        private int $volumen
    ) {
        parent::__construct($autor, $titulo, $precio, $stock, $id);
    }

    public function getinfo()
    {
        $resultado = "<br>Volumen: $this->volumen <br>";
        $ul = "<ul> --ilustrador--  ";
        foreach ($this->ilustrador as $ilustrador) {
            $ul .= "<li>$ilustrador</li>";
        }
        $ul .= "</ul>";
        echo parent::getinfo();
        return $resultado .= $ul;
    }
}

//CREAMOS INSTANCIA DE COMIC

$comic1 = new comic("planeta","Mi esposa y yo compramos un rancho",10.99,2000,1,['Mario Parra', 'john connor'],2);
echo $comic1->getinfo();