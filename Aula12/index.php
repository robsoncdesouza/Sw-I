<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Avaliativo</title>
</head>
<body>
    <?php
    $notas = [8.5, 6.0, 4.5, 9.0, 7.2, 5.5, 3.8, 10.0, 6.8, 4.9]; 
    function classificarAluno($nota){
        $aprovado = 0;
        $recuperacao = 0;
        $reprovado = 0;
        $somadasNotas = 0;
        $resultado = " ";
    foreach ($nota as $key => $value) {
       if ($value >= 7.0) {
            $aprovado++;
            $somadasNotas += $value;
            $resultado = $resultado."Aluno ". ($key+1)." - Nota: ".$value." - APROVADO<br>";
        } elseif ($value >= 5.0) {
            $recuperacao++;
            $somadasNotas += $value;
            $resultado = $resultado."Aluno ". ($key+1)." - Nota: ".$value." - RECUPERAÇÃO<br>";
        } else {
            $reprovado++;
            $somadasNotas += $value;
            $resultado = $resultado."Aluno ". ($key+1)." - Nota: ".$value." - REPROVADO<br>";
        }
    }
    

    $media = $somadasNotas / count($nota);
    $resultado = $resultado."<hr>";
    $resultado = $resultado."<h3>Resumo da turma</h3>";
    $resultado = $resultado."Média da turma: ".$media."<br>";
    $resultado = $resultado."Aprovados: ".$aprovado."<br>";
    $resultado = $resultado."Em Recuperação: ".$recuperacao."<br>";
    $resultado = $resultado."Reprovados: ".$reprovado."<br>";
    return $resultado;
    }
    echo classificarAluno($notas);
    

    
?>
    
</body>
</html>


