<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 01 - Lista de Itens</title>
</head>
<body>
    <h1>LISTA ITENS</h1>
    <ul>
        <!-- Aqui comça o laço de repetição -->
         <?php
            for ($i=1; $i<=10;$i++){
                echo "<li> Item $i </li>";
            }

        ?>
        <!-- Aqui termina o laço de repetição -->
    </ul>
</body>
</html>