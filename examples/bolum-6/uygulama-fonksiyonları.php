<?php

    # 1- Kendisine gönderilen bir kelimeyi belirtilen kez ekranda gösteren fonksiyonu yazınız.

    function yazdir($kelime, $adet) {
        for($i = 0; $i < $adet; $i++) {
            echo $kelime. "<br>";
        }
    }

    yazdir("BTK", 5);

    # 2- Dikdörtgenin alan  ve çevresini hesaplayan fonksiyonu yazınız.

    function hesapla($kisa, $uzun) {
        $alan = $kisa * $uzun;
        $cevre = 2 * ($kisa + $uzun);
        return "Alan: $alan <br> Çevre: $cevre <br>";
    }

    echo hesapla (5, 10);

    # 3- Yazı tura uygulamasını fonksiyon kullanarak yapınız.

    function yaziTuraAt() {
        $sayi = rand(1, 2);
        if($sayi < 1) {
            echo $sayi." Tura". "<br>";
        } else {
            echo $sayi." Yazı". "<br>";
        }
    }

    yaziTuraAt();

    # 4- Kendisine gönderilen bir sayının tam bölenlerini bir diziyle döndüren fonksiyonu yazınız.

    function tamBolenleriBul($sayi) {
        $tamBolenler = array();
        for($i = 1; $i <= $sayi; $i++) {
            if($sayi % $i == 0) {
                array_push($tamBolenler, $i);
            }
        }
        return $tamBolenler;
    }

    print_r(tamBolenleriBul(12)); // dizi olduğu için print_r ile 


?>