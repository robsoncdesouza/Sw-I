<?php
    $colors = ["Verde", "Vermelho", "Amarelo"];

    array_push($colors, "Azul");
    array_shift($colors);

    foreach ($colors as $color) {
        echo "$color <br>";
    }

?>