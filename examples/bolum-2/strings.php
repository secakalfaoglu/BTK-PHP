<?php
    $ad = "Sadık";
    $soyad = "Turan";
    $yas = 6;

    //$mesaj = "My name is ".$ad.' '.$soyad." and ".$yas." years old.";
    $mesaj = "My name is {$ad} {$soyad} and {$yas} years old.";
    echo $mesaj."<br>";
    echo $mesaj[0]."<br>"; //M
    echo $mesaj[5]."<br>"; //m

    // string fonksiyonları
    echo strlen($mesaj)."<br>";
    echo str_word_count($mesaj)."<br>";
    echo strtolower($mesaj)."<br>";
    echo strtoupper($mesaj)."<br>";
    echo ucfirst($mesaj)."<br>";
    echo str_replace(["Sadık","6"],["Çınar","39"],$mesaj)."<br>";
?>