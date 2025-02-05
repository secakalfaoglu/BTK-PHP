<?php
    $course = array(
        "title" => "javascript kursu",
        "price" => 100,
        "isActive" => true
    );

    echo $course["title"]."<br>";

    // array => json string
    $jsonString = json_encode($course, JSON_PRETTY_PRINT);

    $myFile = fopen("course.json","w");
    fwrite($myFile,$jsonString);
?>