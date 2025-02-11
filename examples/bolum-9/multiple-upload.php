<?php
if (isset($_POST["btnFileUpload"]) && $_POST["btnFileUpload"] == "Upload") {

    $dosya_adeti = count($_FILES["fileToUpload"]["name"]);
    $maxFileSize = (1024 * 1024) * 1;
    $fileTypes = array("image/jpg", "image/jpeg", "image/png", "image/gif");
    $uploadOk = true;

    if ($dosya_adeti > 2) {
        $uploadOk = false;
        echo "En fazla 2 dosya yüklenebilir";
    }

    if ($uploadOk) {
        for ($i = 0; $dosya_adeti > $i; $i++) {

            $fileTmpPath = $_FILES["fileToUpload"]["tmp_name"][$i];
            $fileName = $_FILES["fileToUpload"]["name"][$i];
            $fileSize = $_FILES["fileToUpload"]["size"][$i];
            $fileType = $_FILES["fileToUpload"]["type"][$i];


            if (in_array($fileType, $fileTypes)) {

                if ($fileSize > $maxFileSize) {
                    echo $fileName . " dosya boyutu max 1 mb olmalıdır" . "<br>";
                } else {
                    $dosyaAdi_Array = explode(".", $fileName);
                    $dosyaAdi_uzantisiz = $dosyaAdi_Array[0];
                    $dosyaAdi_uzantisi = $dosyaAdi_Array[1];

                    $yeniDosyaAdi = $fileName."-".rand(0, 999999).".". $dosyaAdi_uzantisi;
                    $dest_path = "images/" . $yeniDosyaAdi;


                    if (move_uploaded_file($fileTmpPath, $dest_path)) {
                        echo $yeniDosyaAdi . " dosyası yüklendi" . "<br>";
                    } else {
                        echo $yeniDosyaAdi . " dosya yükleme hatası" . "<br>";
                    }
                }
            } else {
                echo "dosya uzantısı kabul edilmiyor <br>";
                echo "kabul edilen dosyalar: " . implode(", ", $fileTypes) . "<br>";
            }
        }
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
        <input type="file" name="fileToUpload[]" multiple="multiple">
        <input type="submit" value="Upload" name="btnFileUpload">
    </form>
</body>

</html>