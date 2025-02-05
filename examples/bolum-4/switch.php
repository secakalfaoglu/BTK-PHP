<?php

    $sayi = 5;

    if ($sayi == 1){
        echo "Bir";
    } else if ($sayi == 2){
        echo "İki";
    } else if ($sayi == 3){
        echo "Üç";
    } else if ($sayi == 4){
        echo "Dört";
    } else if ($sayi == 5){
        echo "Beş";
    } else {
        echo "Geçersiz Sayı";
    }

    switch($sayi){
        case 1:
            echo "Bir";
            break;
        case 2:
            echo "İki";
            break;
        case 3:
            echo "Üç";
            break;
        case 4:
            echo "Dört";
            break;
        case 5:
            echo "Beş";
            break;
        default:
            echo "Geçersiz Sayı";
            break;
    }


    $not = 60;

    if ($not>=0 and $not<25){
        echo "0-24: FF";
    } else if ($not>=25 and $not<45){
        echo "25-44: DD";
    } else if ($not>=45 and $not<55){
        echo "45-54: CC";
    } else if ($not>=55 and $not<70){
        echo "55-69: BB";
    } else if ($not>=70 and $not<=100){
        echo "70-100: AA";
    } else {
        echo "Geçersiz Not";
    }

    switch(true){   
        case $not>=0 and $not<25:
            echo "0-24: FF";
            break;
        case $not>=25 and $not<45:
            echo "25-44: DD";
            break;
        case $not>=45 and $not<55:
            echo "45-54: CC";
            break;
        case $not>=55 and $not<70:
            echo "55-69: BB";
            break;
        case $not>=70 and $not<=100:
            echo "70-100: AA";
            break;
        default:
            echo "Geçersiz Not";
            break;


    }

    $ay = "ocak";

    switch($ay) {
        case "aralık":
        case "ocak":
        case "şubat":
            echo "Kış";
            break;
        case "mart":
        case "nisan":
        case "mayıs":
            echo "İlkbahar";
            break;
        case "haziran":
        case "temmuz":
        case "ağustos":
            echo "Yaz";
            break;
        case "eylül":
        case "ekim":
        case "kasım":
            echo "Sonbahar";
            break;

        default:
            echo "Geçersiz Ay";
            break;
    }

?>