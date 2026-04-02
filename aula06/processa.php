<?php

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    //email: adm@email.com
    //senha:1234

    if ($email == 'adm@email.com' && $senha =='1234') {
        //vamaos para área restrita...
        // echo "vamaos para área restrita...";
        $nome = "Robson";

        header('Location: restrita.php?nome='.$nome);
    } else {
        // volta para o formulário...
        // echo "Volta para o formulário";
        header('Location: error.php?erro=1');
    }
    


?>
