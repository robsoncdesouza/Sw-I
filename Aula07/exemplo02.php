<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 02 - Tabela</title>
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
        for($i=1;$i<=2;$i++){
            echo "<tr>";
            echo "<td> Linha $i Coluna 1";
            echo "<td> Linha $i Coluna 2";
            echo "<td> Linha $i Coluna 3";
            echo "</tr>";
        } 
    
    ?>
        <!-- Aqui termina o laço -->
   </table> 
</body>
</html>