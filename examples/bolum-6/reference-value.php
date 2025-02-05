<?php
    //reference
    //value

    // & ile orneksayi nin adresini gönderdi ve direkt orda değişiklik yaptı
    function toplama(&$sayi) {
        $sayi += 10;
        echo $sayi."<br>";
    }

    $ornekSayi  = 5;
    toplama($ornekSayi);

    echo $ornekSayi."<br>";

    function yasHesapla(&$tarihler) {
        for($i=0; $i < count($tarihler); $i++) {
            $tarihler[$i] = 2025 - $tarihler[$i];
        }
        return $tarihler;
    }

    $liste = array(1990, 1995, 2000, 2005);

    echo "<pre>";
    print_r(yasHesapla($liste));
    print_r($liste);
    echo "</pre>";
?>