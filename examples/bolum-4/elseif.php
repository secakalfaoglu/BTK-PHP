<?php
     $username = "admin";
     $password = "1234";

     if ($username != "admin") {
            echo "username yanlış!";
        } else if($password != "1234") {
            echo "password yanlış!";
        } else {
            echo "Giriş Başarılı!";
     }


    $saat = 10;

    if ($saat < 10){
        echo "Günaydın";
    } else if ($saat < 20){
        echo "İyi Günler";
    } else {
        echo "İyi Akşamlar";
    }
?>