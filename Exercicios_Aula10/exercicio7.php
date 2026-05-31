<?php
    $numbs = [4, 17, 2, 9, 23, 11];

    sort($numbs);
    foreach ($numbs as $numb) {
        echo "$numb <br>";
    }
    echo "<hr>";
    rsort($numbs);
    foreach ($numbs as $numb) {
        echo "$numb <br>";
    }

?>