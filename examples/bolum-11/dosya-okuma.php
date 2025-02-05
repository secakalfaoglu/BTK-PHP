<?php
    /*
        fopen("dosya_ismi","dosya açma modu");

        dosya açma modları:

        r: Sadece okuma. Dosya imleci dosyanın başında olur.
        w: Sadece yazma. Dosya imleci dosyanın başında olur. Dosya konumdaysa içindeki tüm veriler silinir.
        a: Sadece yazma. Dosya imleci dosyanın sonunda olur. Dosyaya ekleme yapılır. Dosya konumda yoksa oluşturulur.
        x: Sadece yazma. Dosya konumda yoksa oluşturulur, varsa False döner.

        r+: Okuma ve yazma. Dosya imleci dosyanın başında olur.
        w+: Okuma ve yazma. Dosya imleci dosyanın başında olur. Dosya konumdaysa içindeki tüm veriler silinir.
        a+: Okuma ve yazma. Dosya imleci dosyanın sonunda olur. Dosyaya ekleme yapılır. Dosya konumda yoksa oluşturulur.
        x+: Okuma ve yazma. Dosya konumda yoksa oluşturulur, varsa False döner.
    */

    $myFile = fopen("dosya.txt","r");
    $size = filesize("dosya.txt");
    // echo fread($myFile,$size); 

    // echo fgets($myFile). "<br>";
    // echo fgets($myFile). "<br>";
    // echo fgets($myFile). "<br>";

    while(!feof($myFile)){
        echo fgets($myFile). "<br>";
    }

    fclose($myFile);

?>