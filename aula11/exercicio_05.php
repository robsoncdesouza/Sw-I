<?php
    $temperaturas = [22.5, 24.0, 25.5, 23.0];

    function calcularMediaTemperatura($listaDeTemperaturas){
        $med = array_sum($listaDeTemperaturas) / count($listaDeTemperaturas);
        return $med;
    }

    $medFim = calcularMediaTemperatura($temperaturas);
    echo $medFim;
?>