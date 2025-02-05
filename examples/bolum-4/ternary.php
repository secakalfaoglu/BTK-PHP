<?php
    $yas = 20;
    $egitim = "lise";


    if ($yas >= 18) {
        if ($egitim == "lise" || $egitim == "üniversite") {
            echo "Ehliyet alabilir";
        } else {
            echo "Eğitim durumunuz yetersiz";
        }
    } else {
        echo "yaşınız ehliyet almak için uygun değil";
    }

    echo "<br>";

    $sonuc = ($yas >= 18)
        ? (($egitim == "lise" || $egitim == "üniversite")
            ? "Ehliyet alabilir"
            : "Eğitim durumunuz yetersiz")
        : "yaşınız ehliyet almak için uygun değil";

    echo $sonuc;

?>
