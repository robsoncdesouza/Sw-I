<?php 
    
    $n = $_POST ['name'];
    
    function msg($name){ 
        echo "Bom dia $name! <br>";
    }
    
    msg($n);
?>