<?php
    /*
        and => x ve y'nin true olmasıyla sonuç true olur
        or  => x ve y'den her hangi birinin true olmasıyla sonuç true olur.
        xor => x ve y'den her hangi birinin true olmasıyla sonuç false olur. (sadece birinin)
        !   => x'in tersini alır 
    */

    // (yas >= 18) => ehliyet alabilir
    // (mezuniyet=="lise")

    $yas = 20;
    $mezuniyet = "lise";

    $sonuc = ($yas >= 18) and ($mezuniyet=="lise"); 

    // and
    // false & false => false
    // true & false => false
    // true & true => true

    // or
    // true & false => true
    // true & true => true
    // false & false => true
    $sonuc = ($yas >= 18) and ($mezuniyet=="lise" or $mezuniyet=="lisans" or $mezuniyet="yüksek lisans"); 

    // xor
    // true & false => true
    // true & true => false
    // false & false => false
    $sonuc = ($yas >= 18) and ($mezuniyet=="lise" or $mezuniyet=="lisans" or $mezuniyet="yüksek lisans"); 


    // not
    $sonuc = !(true);
    echo var_dump($sonuc)."<br>";


?>