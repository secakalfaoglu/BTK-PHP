<?php
    function toplam(...$sayilar){
        $toplam = 0;
        foreach($sayilar as $sayi){
            $toplam += $sayi;
        }
        return $toplam;
    }

    echo toplam(20, 30, 50, 60);
?>