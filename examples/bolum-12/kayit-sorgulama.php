<?php

include "ayar.php";

$query = "SELECT * FROM kurslar";
//$query = "SELECT id, baslik FROM kurslar";

$sonuc = mysqli_query($baglanti, $query);

while($row = mysqli_fetch_row($sonuc)){
    echo $row[0] . " - " . $row[1]."<br>";
}

echo "<hr>";

$sonuc = mysqli_query($baglanti, $query);

while($row = mysqli_fetch_assoc($sonuc)){
    echo $row["id"] . " - " . $row["baslik"]."<br>";
}




mysqli_close($baglanti);

?>