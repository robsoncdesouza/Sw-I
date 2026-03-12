<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa Dados</title>
</head>
<body>
   
    <?php
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        $idade = $_GET['idade'];

        $ano_atual = date("Y");
        //echo $ano_atual;
        $nasc = $ano_atual - $idade;
    ?>

    <p>O nome digitado é: <?php echo $nome; ?> </p>
    <p>O email digitado é: <?php echo $email; ?> </p>
    <p>A idade digitada é: <?php echo $idade; ?> </p>
    <p>O ano de nascimento é: <?php echo $nasc; ?> </p>

</body>
</html>

