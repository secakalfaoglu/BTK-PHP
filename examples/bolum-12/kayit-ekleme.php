<?php
    include "ayar.php";

    $query = "INSERT INTO kurslar(baslik,altBaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay)
            VALUES('Angular Kursu','ileri seviye angular dersleri','1.jpeg', '10/10/2023',10,10,1)";
    
    // $query .= "INSERT INTO kurslar(baslik,altBaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay)
    //         VALUES('Angular Kursu','ileri seviye angular dersleri','1.jpeg', '10/10/2023',10,10,1);";
            
    // $query .= "INSERT INTO kurslar(baslik,altBaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay)
    // VALUES('Angular Kursu','ileri seviye angular dersleri','1.jpeg', '10/10/2023',10,10,1);";

    $sonuc = mysqli_query($baglanti, $query); // tek sorgu çalıştırır
    $insertedId = mysqli_insert_id($baglanti); // son eklenen kaydın id'sini döner
    // $sonuc = mysqli_multi_query($baglanti, $query); // çoklu sorgu çalıştırır

    if($sonuc){
        echo "kayıt eklendi <br>".$insertedId;

    }else{
        echo "kayıt eklenemedi <br>";
    }
    
    mysqli_close($baglanti);
    echo "mysql bağlantısı kapatıldı";

?>