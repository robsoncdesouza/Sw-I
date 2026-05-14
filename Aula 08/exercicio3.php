<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>

    <style>

        table{
            border-collapse: collapse;
            width: 500px;
        }

        th, td{
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th{
            background-color: black;
            color: white;
        }

        .eletronico{
            background-color: red;
        }

        .roupa{
            background-color: white;
        }

        .alimento{
            background-color: purple;
        }

    </style>
</head>
<body>

    <?php

        $produtos = [

            [
                "nome" => "Celular",
                "preco" => "9000",
                "categoria" => "eletronico"
            ],

            [
                "nome" => "Calça Baggy",
                "preco" => "120",
                "categoria" => "roupa"
            ],

            [
                "nome" => "Pão Francês",
                "preco" => "1",
                "categoria" => "alimento"
            ]

        ];

    ?>

    <table>

        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Categoria</th>
        </tr>

        <?php

            foreach($produtos as $produto){

                echo "<tr class='".$produto['categoria']."'>";

                echo "<td>".$produto['nome']."</td>";
                echo "<td>R$ ".$produto['preco']."</td>";
                echo "<td>".$produto['categoria']."</td>";

                echo "</tr>";
            }

        ?>

    </table>

</body>
</html>