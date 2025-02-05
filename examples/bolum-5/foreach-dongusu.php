<?php

    $ogrenciler = array("ali","ayşe","ahmet","deniz","mehmet");

    foreach($ogrenciler as $ogrenci){
        echo $ogrenci . "<br>";
    }

    // $urunler = array(
    //     array(
    //         "elma",
    //         5
    //     ),
    //     array(
    //         "armut",
    //         3
    //     ),
    //     array(
    //         "muz",
    //         2
    //     ) 
    // );

    // foreach($urunler as $urun){
    //     echo $urun[0] . " - " . $urun[1] . "<br>";
    // }

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

    foreach($urunler as $key => $value){
        echo $key." ". $value["urun_adi"] . " - " . $value["fiyat"] . "<br>";
      
    }
?>