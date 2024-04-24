<?php 
    if(isset($_POST["btnejemplo1"])){
        $variable = $_POST["valor"];

        switch ($variable) {
            case "1":
                echo "Apenas inicia la semana y ya quiero que se acabe";
                break;

            case "2":
                echo "todavía falta tanto para el fin de semana?";
                break;

            case "3":
                echo "Si empiezo a tomar desde hoy cuenta como alcoholismo?";
                break;

            case "4":
                echo "ahora si a ponerle animo a la semana";
                break;

            case "5":
                echo "hoy es viernes y el cuerpo lo sabe";
                break;

            case "6":
                echo "por fin, pasaron como 2 semanas para que llegara el fin de semana";
                break;

            case "7":
                echo "no me busque que ando haciendo pereza";
                break;

            default:
                echo "algo salio mal";
                break;
        }

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

        /* if($variable == "manzana"){
            echo"Puedes hacer un pie de manzana";

        }else if( $variable == "fresa"){
            echo"Puedes hacer un juego de fresa";
        }else if($variable == "pera"){
            echo"Puedes hacer una compota de pera";
        }else{
            echo "No esta la opcion";
        } */
    }

    if(isset($_POST["btnejemplo2"])){

    }
?>