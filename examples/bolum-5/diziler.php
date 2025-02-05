<?php
    $ogrenciler = array("ali","ayşe","ahmet");

    echo $ogrenciler[0] . "<br>";
    echo $ogrenciler[1] . "<br>";
    echo $ogrenciler[2] . "<br>";

    for($i = 0; $i < count($ogrenciler); $i++){
        echo $ogrenciler[$i] . "<br>";
    }

    $i = 0;
    while($i < count($ogrenciler)){
        echo $ogrenciler[$i] . "<br>";
        $i++;
    }

    $urunler = array(
        "100" => array(
            "urun_adi" => "elma",
            "fiyat" => 5
        ),
        "101" => array(
            "urun_adi" => "armut",
            "fiyat" => 3
        ),
        "102" => array(
            "urun_adi" => "muz",
            "fiyat" => 2
        ) 
    );

    $keys = array_keys($urunler);
    

    for($i = 0; $i < count($urunler); $i++){
        
        echo $urunler[$keys[$i]]["urun_adi"];
        echo $urunler[$keys[$i]]["fiyat"] . "<br>";
        
    }
?>