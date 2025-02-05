<?php

if (isset($_POST["btnFileUpload"]) && $_POST["btnFileUpload"] == "Upload") {

    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {

        $uploadOk = true;
        $dest_path = "./uploadedFiles/";
        $filename = $_FILES["fileToUpload"]["name"];
        $fileSize = $_FILES["fileToUpload"]["size"];
        $dosya_uzatilari = array("jpg", "jpeg", "png", "gif");

        // Dosya seçilmiş mi?
        if (empty($filename)) {
            $uploadOk = false;
            echo "Please select a file <br>";
        }
        // dosya boyutu
        if ($fileSize > 500000) {
            $uploadOk = false;
            echo "File size is too large <br>";
        }

        // dosya uzantısı kontrol
        // 1.jpeg => 1, jpeg
        $dosyaAdi = explode(".", $filename);
        $dosyaAdi_uzantisiz = $dosyaAdi[0];
        $dosyaAdi_uzantisi = $dosyaAdi[1];

        if (!in_array($dosyaAdi_uzantisi, $dosya_uzatilari)) {
            $uploadOk = false;
            echo "dosya uzantısı kabul edilmiyor <br>";
            echo "kabul edilen dosyalar: " . implode(", ", $dosya_uzatilari) . "<br>";
        }
        // dosya ismi kontrol - random
        $yeni_dosyaAdi = md5(time() . $dosyaAdi_uzantisiz) . "." . $dosyaAdi_uzantisi;

        $fileSourcePath = $_FILES["fileToUpload"]["tmp_name"];

        $fileDestPath = $dest_path . $yeni_dosyaAdi;

        if (!$uploadOk) {
            echo "Dosya yüklenemedi";
        } else {
            if (move_uploaded_file($fileSourcePath, $fileDestPath)) {
                echo "File uploaded successfully";
            } else {
                echo "File upload failed";
            }
        }
    } else {
        echo "Bir hata oluştu";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="username">
        <input type="file" name="fileToUpload">
        <input type="submit" value="Upload" name="btnFileUpload">
    </form>
</body>

</html>