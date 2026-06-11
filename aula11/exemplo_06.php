 <?php 
    function msg($periodo){
        // if ($periodo == 'Manhã') {
        //     echo "Bom dia";
        // }if ($periodo == 'Tarde') {
        //     echo "Boa tarde";
        // }if ($periodo == 'Noite') {
        //     echo "Boa noite";
        // }else {
        //     echo 'Inexistente';
        // }

        switch ($periodo) {
            case 'Manhã' || 'manhã':
                echo 'Bom dia';
                break;
            
            case 'Tarde' || 'tarde':
                echo 'Boa tarde';
                break;

            case 'Noite' || 'noite':
                echo 'Boa noite';
                break;
            
            default:
                'Inexistente';
                break;
        }
    }

    msg('Manhã');
?> 