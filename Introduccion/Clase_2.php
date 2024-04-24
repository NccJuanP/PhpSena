<?php 
    if(isset($_POST["btnejemplo1"])){
        $variable = $_POST["valor"];

        /* switch ($variable) {
            case "manzana":
                echo"Puedes hacer un pie de manzana";
                break;
                
                case "fresa":
                    echo"Puedes hacer un juego de fresa";
                    break;

                case "pera":
                    echo"Puedes hacer una compota de pera";
                    break;

                default:
                    echo "No esta la opcion";
                    break;
        } */

        if($variable == "manzana"){
            echo"Puedes hacer un pie de manzana";

        }else if( $variable == "fresa"){
            echo"Puedes hacer un juego de fresa";
        }else if($variable == "pera"){
            echo"Puedes hacer una compota de pera";
        }else{
            echo "No esta la opcion";
        }
    }

    if(isset($_POST["btnejemplo2"])){

    }
?>