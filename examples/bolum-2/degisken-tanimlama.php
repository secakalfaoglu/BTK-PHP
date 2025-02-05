<?php
    $ad = "Sadık";
    $soyad = "Turan";

    echo $ad . " " . $soyad;
    echo "<br>";
    $sayi1 = 50;
    $sayi2 = 100;

    // $sayi 1 = 60; => yanlış
    // Değişken isminde boşluk karakteri olamaz.

    /*
        $1sayi = 60; => yanlış
        Değişken ismi sayı ile başlayamaz. 
    */

    //Büyük küçük harf duyarlılığı vardır.
    $Sayi = 60;

    // Türkçe karakter kullanmamalıyız.
    
    echo $sayi1." ".$sayi2;
?>