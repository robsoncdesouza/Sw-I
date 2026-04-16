<?php
    $nomes = ['Anderson', 'Cíntia', 'Robson', 'Yasmin N', 'Yres'];

    $qtd = count($nomes);
    echo "A quantidade de nomes é: $qtd";
    echo "<br>";

    for ($i=0; $i <$qtd ; $i++) { 
        echo $nomes[$i];
        echo "<br>";
    }
?>