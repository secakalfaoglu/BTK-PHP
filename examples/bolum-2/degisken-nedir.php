<?php
    $maasAli= 20000;
    $maasMehmet= 15000;
    $maasVolkan = 25000;

    $vergiOrani1 = 0.27;
    $vergiOrani2 = 0.35;

    
    echo $maasAli - ($maasAli * $vergiOrani1); // Ali maaş
    echo "<br>";
    echo $maasMehmet - ($maasMehmet * $vergiOrani1); // Mehmet maaş
    echo "<br>";
    echo $maasVolkan - ($maasVolkan * $vergiOrani2); // Volkan maaş
    echo "<br>";
?>