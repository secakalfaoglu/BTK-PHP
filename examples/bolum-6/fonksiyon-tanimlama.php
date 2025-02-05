<?php

    //Fonksiyon tanımlama
    function selamlama(){
        echo "Merhaba BTK <br>";
    }

    selamlama(); // Fonksiyonu çağırma

    function selamlama1(){
        for($i = 0; $i < 10; $i++){
            echo "Merhaba BTK <br>";
        }
    }

    selamlama();

    function toplama() {
        $a = 40;
        $b = 30;
        echo $a + $b;
    }

    toplama();
?>