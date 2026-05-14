<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <style>

        table{
            border-collapse: collapse;
            width: 400px;
        }

        td{
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        .par{
            background-color: blue;
        }

        .impar{
            background-color: red;
        }
        h1{
            text-aling:center;    
        }

    </style>
</head>
<body>
    <h1>execicio 1 </h1>
    <table>

        <?php

            for($linha = 1; $linha <= 8; $linha++){

                if($linha % 2 == 0){
                    echo "<tr class='par'>";
                }
                else{
                    echo "<tr class='impar'>";
                }

                for($coluna = 1; $coluna <= 4; $coluna++){

                    echo "<td>L$linha C$coluna</td>";

                }

                echo "</tr>";
            }

        ?>

    </table>

</body>
</html>