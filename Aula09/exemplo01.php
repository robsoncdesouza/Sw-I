<?php 
    $frutas = ["Maça","Banana", "Laranja"];

    // echo $frutas;
    // echo $frutas[0];

    // foreach ($frutas as $indice => $valor) {
    //     echo "Índice: $indice ==> $valor <br>";
    // }

    // foreach ($frutas as $valor) {
    //     echo "Fruta: $valor <br>";
    // }

    // $qtde = count($frutas);

    // for ($i=0; $i <= $qtde -1 ; $i++) { 
    //     // echo $i . "<br>";
    //     echo "$frutas[$i] <br>";
    // }

    $animais = ["Gato", "Cachorro"];

    $animais[] = "Passarinho";

    foreach ($animais as $valor) {
        echo "$valor <br>";
    }

    echo "<hr>";

    $animais [1] = "Tartaruga";

    foreach ($animais as $valor) {
        echo "$valor <br>";
    }

    echo "<hr>";

    array_push($animais, "Peixe");

    foreach ($animais as $chave => $valor) {
        echo "$chave ==> $valor <br>";
    }

    echo "<hr>";

    array_unshift($animais, "Cachorro");

    foreach ($animais as $chave => $valor) {
        echo "$chave ==> $valor <br>";
    }

    echo "<hr>";
?>