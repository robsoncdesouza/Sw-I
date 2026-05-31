<?php
    $umadez = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $par = [];

    foreach ($umadez as $chave) {
        echo "$chave <br>";  
    }

    echo "<hr>";

    foreach ($umadez as $key) {
    
        if ($key %2 ==0) {
            $par [] = $key;
            echo "$key ";
        }
    }

    echo "<hr>";

    foreach ($par as $pares) {
        echo "$pares <br>";
    }

?>