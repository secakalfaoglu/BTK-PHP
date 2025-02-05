<?php
    /*
        PHP'de veri tipleri şunlardır:
        1- string   : Metinsel ifadeler
        2- integer  : Tam sayılar
        3- double    : Ondalıklı sayılar
        4- boolean  : true - false
        5- array    : Dizi
        6- rbject   : Nesne
        7- NULL     : Boş
    
    */

    $urunAdi = "Iphone 15";
    echo $urunAdi.' : '.gettype($urunAdi);

    echo "<br>";

    $fiyat = 40000;
    echo $fiyat.' : '.gettype($fiyat);

    echo "<br>";

    $kdvOrani = 0.18;
    echo $kdvOrani.' : '.gettype($kdvOrani);
    
    echo "<br>";

    $satistaMi = true;
    echo $satistaMi.' : '.gettype($satistaMi);

    echo "<br>";

    $a = 20;
    echo gettype($a);

    echo "<br>";

    $a = (double)20;
    echo gettype($a);

    echo "<br>";

    $a = (int)20.5;
    echo gettype($a);
    echo $a;

    echo "<br>";

    $a = '20';
    echo gettype($a);

    echo "<br>";

    $a = (int)'20';
    echo gettype($a);

    echo "<br>";

    $a = (int)'a20';
    echo gettype($a);
    echo $a;

    echo "<br>";

    $a = (int)'20a';
    echo gettype($a);
    echo $a;

    echo "<br>";

    $a = true;
    echo gettype($a);
    echo $a;

    echo "<br>";

    $a = (int) true;
    echo gettype($a);
    echo $a;

    echo "<br>";
?>