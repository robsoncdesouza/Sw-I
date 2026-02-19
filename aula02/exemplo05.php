<?php
    $dia = "Segunda";
    switch($dia){
        case "Segunda":
            echo "Começo da semana";
            break;
        case "Sábado" || "Domingo":
            echo "Final de Semana";
            break;
        default:
            echo "Dia de semana";
            break;
    }
?>