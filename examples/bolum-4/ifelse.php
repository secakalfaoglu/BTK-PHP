<?php
    // Koşullu Durumlar

        // 1- if-else
        // 2- Switch Bloğu
        // 3- Ternary Operatörü
    
    $username = "admin";
    $password = "1234";

    if ($username == "admin") {
        
        if($password == "1234") {
            echo "Giriş Başarılı!";
        } else {
            echo "password yanlış!";
        }

    } else {
        echo "username yanlış!";
    }
    
?>