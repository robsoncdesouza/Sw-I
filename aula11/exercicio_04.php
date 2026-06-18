<?php 
    function verificarAcesso($senhaDigitada){
        if ($senhaDigitada == 123456) {
            return 'Acesso Liberado!';
        } else {
            return 'Acesso Negado!';
        }
        
    }

    $senhaCerta = verificarAcesso(123456);
    echo $senhaCerta;
?>