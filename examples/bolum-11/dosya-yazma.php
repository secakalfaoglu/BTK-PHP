<?php

    // $myFile = fopen("dosya2.txt","w");   

    $myFile = fopen("dosya2.txt","a+");
    $title = "Java Dersleri\n";

    fwrite($myFile,$title);

    fseek($myFile,0);

    while(!feof($myFile)){
        echo fgets($myFile). "<br>";
    }

    fclose($myFile);

?>