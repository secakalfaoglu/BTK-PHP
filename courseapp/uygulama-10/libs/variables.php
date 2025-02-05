<?php
const title = "Popüler Kurslar";

$kategoriler = array(

    array("kategori_adi" => "Programlama", "aktif" => true),
    array("kategori_adi" => "Web Geliştirme", "aktif" => false),
    array("kategori_adi" => "Veri Analizi", "aktif" => false),
    array("kategori_adi" => "Ofis Uygulamaları", "aktif" => false),
    array("kategori_adi" => "Mobil Uygulamalar", "aktif" => false),

);

$sehirler = array (
    "06" => "Ankara",
    "41" => "Kocaeli",
    "34" => "İstanbul",
    "61" => "Trabzon",
);

$hobiler = array(
    "1" => "Spor",
    "2" => "Sinema",
    "3" => "Kitap",
    "4" => "Gezi",
    "5" => "Yemek",
    "6" => "Müzik",
    "7" => "Dans",
    "8" => "Oyun",
    "9" => "Tiyatro",
    "10" => "Resim"
);


$kurslar = array(
    "1" => array(
        "baslik" => "Php Kursu",
        "altBaslik" => "Sıfırdan ileri seviye Php ile web geliştirme kursu",
        "resim" => "1.jpeg",
        "yayinTarihi" => "01.01.2023",
        "yorumSayisi" => 0,
        "begeniSayisi" => 10,
        "onay" => true
    ),
    "2" => array(
        "baslik" => "Python Kursu",
        "altBaslik" => "Sıfırdan ileri seviye Python programlama",
        "resim" => "2.jpg",
        "yayinTarihi" => "03.03.2023",
        "yorumSayisi" => 10,
        "begeniSayisi" => 0,
        "onay" => true
    ),
    "3" => array(
        "baslik" => "Node.js Kursu",
        "altBaslik" => "Sıfırdan ileri seviye Django proframlama",
        "resim" => "3.jpg",
        "yayinTarihi" => "05.05.2023",
        "yorumSayisi" => 10,
        "begeniSayisi" => 20,
        "onay" => false
    ),
    "4" => array(
        "baslik" => "Django Kursu",
        "altBaslik" => "Sıfırdan ileri seviye Python programlama",
        "resim" => "2.jpg",
        "yayinTarihi" => "03.03.2023",
        "yorumSayisi" => 0,
        "begeniSayisi" => 5,
        "onay" => true
    )
);
