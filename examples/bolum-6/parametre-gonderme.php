<?php
    function selamlama($isim) {
        return "Merhaba ". $isim. "<br>";
    }

    echo selamlama("BTK");
    echo selamlama("Ahmet");
    echo selamlama("Mehmet");

    function toplama($a, $b) {
        return $a + $b;
    }

    echo toplama(20, 30);

    function yasHesapla ($dogumYili) {
        return date('Y') - $dogumYili;

    }
    echo yasHesapla(1990);

    function emekliligeKacYilKaldi($dogumYili, $isim){
        $yas = yasHesapla($dogumYili);
        $emeklilikYasi = 65;
        $kalanYil = $emeklilikYasi - $yas;
        if ($kalanYil > 0) {
            return " $isim, adlı kişinin emekliliğine $kalanYil yıl kaldı";
        } else {
            return "$isim, zaten $kalanYil önce emekli oldunuz.";
        }
    }

    echo emekliligeKacYilKaldi(1950, "Ahmet");
    echo emekliligeKacYilKaldi(1990, "Mehmet");
?>