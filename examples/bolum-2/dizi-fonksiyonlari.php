<?php
    // Array Functions

    $notlar = array(50,60,70,80,75,100,100);
    $plakalar = array("41"=> "koaceli","53"=>"rize","34"=>"istanbul");

    //print_r(array_flip($plakalar)); // key-value yer değiştirme
    $index = array_rand($notlar); // rastgele eleman seçme
    echo $notlar[$index]."<br>";

    $indexes = array_rand($notlar,2); // rastgele eleman seçme
    print_r($indexes);
    echo $notlar[$indexes[0]]."<br>";
    echo $notlar[$indexes[1]]."<br>";
    
    
    //tekrar eden eleman yazdırma
    print_r(array_count_values($notlar));



    // eleman sona ekleme
    //array_push($notlar, 100);

    // eleman başa ekleme
    //array_unshift($notlar, 40);

    // eleman silme - sondan
    // array_pop($plakalar);

    // elaman silme - baştan
    // array_shift($plakalar);

    // sıralama - küçükten büyüğe
    // sort($notlar);
    // sort($plakalar);
    // asort($plakalar);   //value
    // ksort($plakalar);   // key'e göre sıralama

    // sıralama - büyükten küçüğe
    //  rsort($notlar);
    //  arsort($plakalar); //value
    //  krsort($plakalar);   // key'e göre sıralama

    // string to array
    // $str = "kocaeli,41";
    // $arr = explode(",", $str);


    // array to string
    // $arr = array("sadikturan","mail.@gmail.com");
    // $str = implode(",", $arr);

    // print_r($arr);
    // echo $str;


    // echo count($notlar)."<br>"; 
    // echo count($plakalar)."<br>"; 

    // print_r($notlar)."<br>";
    // print_r($plakalar)."<br>";


?>