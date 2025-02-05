<?php
    function toplama() {
        return 20 + 30;
    }

   $sonuc = toplama();

   echo $sonuc;

   function sene() {
    return date('Y');
   }

   function yasHesapla() {
    return sene() - 1990;
   }
   $yas = yasHesapla();
    echo $yas;

    function saat() {
        return date('h');
    }

    function selamlama() {
        $saat = saat();
        if($saat < 10) {
            return "Günaydın";
        } else if($saat < 20) {
            return "İyi günler";
        } else {
            return "İyi akşamlar";
        }
    }

    echo selamlama();
?>