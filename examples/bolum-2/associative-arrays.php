<?php
    // 2- Associative(İlişkili) Arrays(key-value)

    // key-value => 34: istanbul, 53: Rize
    $plakalar = array("41","53","34");
    $sehirler = array("Kocaeli","Rize","İstanbul");

    echo $plakalar[0]." - ".$sehirler[0]."<br>";
    echo $plakalar[1]." - ".$sehirler[1]."<br>";
    echo $plakalar[2]." - ".$sehirler[2]."<br>";

    $plaka_bilgileri = array(
        "41"=>"Kocaeli",
        "53"=>"Rize",
        "34"=>"İstanbul"
    );

    echo $plaka_bilgileri["41"]."<br>";
    echo $plaka_bilgileri["53"]."<br>";
    echo $plaka_bilgileri["34"]."<br>";

    $telefon_rehberi = array(
        "ali"=>"53244444",
        "ahmet"=>"4444444",
        "ayşe"=>"333333"
    );

    echo $telefon_rehberi["ali"]."<br>";


?>