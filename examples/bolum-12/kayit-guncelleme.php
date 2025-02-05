<?php
include "ayar.php";

//$query = "UPDATE kurslar SET baslik='PHP Dersleri', altBaslik='ileri seviye php dersleri' WHERE id=1";
$query = "UPDATE kurslar SET onay=1";
$sonuc = mysqli_query($baglanti, $query);
if($sonuc){
    echo "kayıt güncellendi";
}else{
    echo "kayıt güncellenemedi";
}
mysqli_close($baglanti);
