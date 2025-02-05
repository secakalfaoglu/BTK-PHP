<?php
    $myFile = fopen("course.json","r");
    $size = filesize("course.json");

    $jsonString = fread($myFile,$size);

    echo fread($myFile,$size);
    echo $jsonString."<br>";
    echo gettype($jsonString)."<br>";
    //echo $jsonString["title"]."<br>";

    //string to array => decode
    $jsonArray = json_decode($jsonString,true);
    echo $jsonArray["title"]."<br>";
?>