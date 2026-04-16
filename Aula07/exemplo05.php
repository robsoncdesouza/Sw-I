<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 05 - Tabela2</title>
    <style>
        table,tr,td,th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Tabela de Alunos</h1>
   <table>
        <tr>
            <th>RM</th>
            <th>NOME</th>
            <th>EMAIL</th>
        </tr>
        <!-- Aqui começa o laço -->
    <?php
        for($l=1;$l<=2;$l++){
            echo "<tr>";
            for($c=1;$c<=3;$c++){
                echo "<td> Linha $l Coluna $c";
            }
            echo "</tr>";
        } 
    
    ?>
        <!-- Aqui termina o laço -->
   </table> 
</body>
</html>