<?php 
    function calcularAutonomia($capacidadeBateria, $consumoPorMinuto){
        $autonomia = $capacidadeBateria / $consumoPorMinuto;
        return $autonomia;
    }

    echo "Tempo estimado de voo: $autonomia minutos"; 

    calcularAutonomia(90,2);
?>