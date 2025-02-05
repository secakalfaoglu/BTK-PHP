<?php

function getDb()
{
    $myFile = fopen("db.json", "r");
    $size = filesize("db.json");
    $data = json_decode(fread($myFile, $size), true);
    fclose($myFile);
    return $data;
}

function kursEkle(string $baslik, string $altBaslik, string $resim, string $yayinTarihi, int $yorumSayisi = 0, int $begeniSayisi = 0, bool $onay = true)
{
    $db = getDb();

    array_push($db["kurslar"], array(
        "baslik" => $baslik,
        "altBaslik" => $altBaslik,
        "resim" => $resim,
        "yayinTarihi" => $yayinTarihi,
        "yorumSayisi" => $yorumSayisi,
        "begeniSayisi" => $begeniSayisi,
        "onay" => $onay
    ));

    $myFile = fopen("db.json", "w");
    fwrite($myFile, json_encode($db, JSON_PRETTY_PRINT));
    fclose($myFile);
}


function urlDuzenle($baslik)
{
    return str_replace([" ", "ç", "@", "."], ["-", "c", "", "-"], strtolower($baslik));
}

function kisaAciklama($altBaslik)
{
    if (strlen($altBaslik) > 50) {
        return substr($altBaslik, 0, 50) . "...";
    } else {
        return $altBaslik;
    }
}

function safe_html($data)
{
    $data = trim($data); // baştaki ve sondaki boşlukları temizler
    $data = stripslashes($data); // sql injection önlemek için
    $data = htmlspecialchars($data); // html taglarını etkisiz hale getirir
    return $data;
}
