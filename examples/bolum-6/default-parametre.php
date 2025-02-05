<?php
    function selamlama($isim="Misafir", $mesaj = "Merhaba") {
        return " $mesaj $isim <br>";

    }

    //$sonuc = selamlama("ahmet");
    $sonuc = selamlama();

    echo $sonuc;

    function  kareAl($taban=3, $us=2) {
        return $taban ** $us;

    }

    $sonuc = kareAl(5, 3);
    $sonuc = kareAl(5);
    echo $sonuc;
?>