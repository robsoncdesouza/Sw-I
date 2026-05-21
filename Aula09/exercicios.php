<?php 
    $nomes = ["Matheus F", "Matheus T", "Maria E", "Robson C", "Yasmin C"];

    foreach ($nomes as $valor) {
        echo "$valor <br>";
    }

    echo "<hr>";

    array_push($nomes, "Arthur F");

    foreach ($nomes as $valor) {
        echo "$valor <br>";
    }

    echo "<hr>";

    $nomes [1] = "Arthur G";

    foreach ($nomes as $valor) {
        echo "$valor <br>";
    }

    echo "<hr>";

    $num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    $total = array_sum($num);

    echo "$total <br>";

    $med = $total / count($num);

    echo $med;

    echo "<hr>";
?>