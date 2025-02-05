<?php
    include "ayar.php";

    // $query = "DELETE FROM kurslar WHERE id=6";
    $query = "DELETE FROM kurslar WHERE id>6 and id <10";
    $sonuc = mysqli_query($baglanti, $query);
    $adet = mysqli_affected_rows($baglanti);

    if($sonuc){
        echo "kayıt silindi: ".$adet;
    }else{
        echo "kayıt silinemedi";
    }
    mysqli_close($baglanti);
?>