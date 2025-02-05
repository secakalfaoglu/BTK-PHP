<?php

    $a = 10;
    $b = 20;
    $c = 5;

    // 1-a, b çarpımı ile a, b, c toplamının farkı nedir?

    $sonuc = ($a * $b) - ($a + $b + $c);
    echo $sonuc."<br>";

    // 2- a, b, c toplamının mod 3'ü nedir?

    $sonuc = ($a + $b + $c) % 3;
    echo $sonuc."<br>";

    // 3- b'nin c. kuvvetini hesaplayın.

    $sonuc = $b ** $c;
    echo $sonuc."<br>";

    // 4- a için 50-100 arasında kontrolü yapınız.

    $sonuc = ($a > 50 and $a < 100);
    echo var_dump($sonuc)."<br>";

    // 5- a için pozitif çift kontrolü yapınız.
    
    $sonuc = ($a > 0 and $a % 2 == 0);
    echo var_dump($sonuc)."<br>";

    // 6-username ve passwprd ile uygulama giriş kontrolü yapınız.

    $username = "sadikturan";
    $password = "1234";

    $sonuc = ($username == "sadikturan" and $password == "1234");
    echo "Giriş durumu: ".$sonuc."<br>";

    // 7- a,b,c için büyüklük kontrolü yapınız.
    $sonuc = ($a > $b and $a > $c);
    echo "a en büyük: ".$sonuc."<br>";

    $sonuc = ($b > $a and $b > $c);
    echo "b en büyük: ".$sonuc."<br>";

    $sonuc = ($c > $a and $c > $b);
    echo "c en büyük: ".$sonuc."<br>";
    // 8- 2 vize(%60) ve final(%40) notuna göre ortalama hesaplayınız.
    //    a- Eğer ortalama 50 ve üstündeyse geçti değilse kaldı yazdırın.
    //    b- Geçmek için ortalama 50 olsa bile final notu en az 50 olmalıdır.
    //    c- Geçmek için finalden 70 alındığında ortalamnın önemi olmasın.
    
    $vize1 = 60;
    $vize2 = 60;
    $final = 70;

    $ortalama = (($vize1 + $vize2)/2) * 0.6 + $final * 0.4;
    echo "Ortalama: ".$ortalama."<br>";

    $gecmeDurumu = $ortalama >= 50;
    echo "Geçme Durumu: ".$gecmeDurumu."<br>";

    $gecmeDurumu = ($ortalama >= 50 and $final >= 50);
    echo "Geçme Durumu: ".$gecmeDurumu."<br>";

    $gecmeDurumu = ($ortalama >= 50) or $final >= 70;
    echo "Geçme Durumu: ".$gecmeDurumu."<br>";
?>