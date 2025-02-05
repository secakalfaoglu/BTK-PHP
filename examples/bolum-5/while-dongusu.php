<?php

    
    for($i = 1; $i <= 100; $i += 1){
        echo $i . "<br>";
    }
    
    $i = 1;
    $toplam = 0;
    
    while($i <= 100){
        $toplam += $i;
        $i += 1;
    }
  
    echo $toplam . "<br>";
?>