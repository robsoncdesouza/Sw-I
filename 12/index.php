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
        $resultado = "";
    foreach ($nota as $key => $value) {
       if ($value >= 7.0) {
            $aprovado++;
            $somadasNotas += $value;
            $resultado = $resultado."Aluno ". ($key+1)." Nota = ".$value ." - Aprovado<br>";
        } elseif ($value >= 5.0) {
            $recuperacao++;
            $somadasNotas += $value;
            $resultado = $resultado."Aluno ". ($key+1)." Nota = ".$value ." - Recuperação<br>";
        } else {
            $reprovado++;
            $somadasNotas += $value;
            $resultado = $resultado."Aluno ". ($key+1)." Nota = ".$value ." - Reprovado<br>";
        }
    }
    

    $media = $somadasNotas / count($nota);
    $resultado = $resultado."Média da turma: ".$media."<br>";
    $aprovados = $aprovado >= 7.0 ? $aprovado++ : $aprovados;
    $resultado1 = $aprovados. "Aprovados: ".$aprovado."<br>";
    $reprovados = $reprovado < 5.0 ? $reprovado++ : $reprovados;
    $resultado2 = $reprovados. "Reprovados: ".$reprovados."<br>";
    return ($resultado. $resultado1. $resultado2);
    }
    echo classificarAluno($notas);
    

    
?>
    
</body>
</html>


