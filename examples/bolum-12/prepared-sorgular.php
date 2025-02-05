<?php
    include "ayar.php";
    $baslik = "Angular Kursu";
    $altBaslik = "Angular dersleri";
    $resim = "1.jpeg";
    $yayinTarihi = "10/10/2023";
    $yorumSayisi = 10;
    $begeniSayisi = 10;
    $onay = 1;

    $query = "INSERT INTO kurslar(baslik,altBaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay)
            VALUES(?,?,?,?,?,?,?)";
    
    $stmt = mysqli_prepare($baglanti, $query);
    mysqli_stmt_bind_param($stmt, "ssssiii", $baslik, $altBaslik, $resim, $yayinTarihi, $yorumSayisi, $begeniSayisi, $onay);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    echo "kayıt eklendi";
    
    mysqli_close($baglanti);
?>