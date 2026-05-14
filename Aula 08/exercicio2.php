<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <style>

        table{
            border-collapse: collapse;
            margin-top: 20px;
        }

        td{
            border: 1px solid black;
            padding: 10px;
            text-align: center;
            background-color: blue;
        }

        body{
            background-color: red;
        }

        input{
            margin: 5px;
        }

    </style>
</head>
<body>

    <form method="POST">

        Linhas:
        <input type="number" name="linhas">

        <br>

        Colunas:
        <input type="number" name="colunas">

        <br>

        <input type="submit" value="Criar Tabela">

    </form>

    <?php

        if(isset($_POST['linhas']) && isset($_POST['colunas'])){

            $linhas = $_POST['linhas'];
            $colunas = $_POST['colunas'];

            echo "<table>";

            $i = 1;

            while($i <= $linhas){

                echo "<tr>";

                $j = 1;

                while($j <= $colunas){

                    echo "<td>L$i C$j</td>";

                    $j++;
                }

                echo "</tr>";

                $i++;
            }

            echo "</table>";
        }

    ?>

</body>
</html>