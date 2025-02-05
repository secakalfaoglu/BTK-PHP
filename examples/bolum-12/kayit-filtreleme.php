<?php
include "ayar.php";

// $query = "SELECT * FROM kurslar WHERE id=1";
// $query = "SELECT * FROM kurslar WHERE id > 1";
// $query = "SELECT * FROM kurslar WHERE onay=0";
//  $query = "SELECT * FROM kurslar WHERE id>4 and id<7";
//  $query = "SELECT * FROM kurslar WHERE baslik='Angular Kursu'";
// $query = "SELECT * FROM kurslar WHERE baslik LIKE '%Kursu%'";
// $query = "SELECT * FROM kurslar WHERE baslik LIKE 'Kursu%'";
// $query = "SELECT * FROM kurslar WHERE baslik LIKE '%Kursu'";
$query = "SELECT * FROM kurslar WHERE baslik LIKE '%php' and onay=1";

$sonuc = mysqli_query($baglanti, $query);

if (mysqli_num_rows($sonuc) > 0) {
    while ($row = mysqli_fetch_assoc($sonuc)) {
        echo $row["id"] . " - " . $row["baslik"] . "<br>";
    }
} else {
    echo "kayıt bulunamadı";
}


mysqli_close($baglanti);

?>