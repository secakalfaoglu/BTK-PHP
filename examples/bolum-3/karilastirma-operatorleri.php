<?php

    /*
        == Equal                    $a == $b
        === Identical               $a === $b
        != Not equal                $a != $b
        <> Not equal                $a <> $b
        !== Not identical           $a !== $b
        > Greater than              $a > $b
        < Less than                 $a < $b
        >= Greater than or equal to $a >= $b
        <= Less than or equal to    $a <= $b
        <=> Spaceship               $a <=> $b
    */

    $a = 10;
    $b = 20;
    $username = "sadikturan";


    $sonuc = ($a == $b);
    echo var_dump($sonuc)."<br>";

    $sonuc = ($username == "sadikturan");
    echo var_dump($sonuc)."<br>";

    $sonuc = ($username != "sadikturan");
    echo var_dump($sonuc)."<br>";

    $a = "10";
    $b = 10;
    $sonuc = ($a == $b);
    echo var_dump($sonuc)."<br>";

    $sonuc = ($a === $b); //tip kontrolüde var
    echo var_dump($sonuc)."<br>";

    $sonuc = ($a > $b);
    echo var_dump($sonuc)."<br>";

    $sonuc = ($a >= $b);
    echo var_dump($sonuc)."<br>";

    $sonuc = ($a < $b);
    echo var_dump($sonuc)."<br>";

    $sonuc = ($a <= $b);
    echo var_dump($sonuc)."<br>";

    $sonuc = ($a <=> $b);
    echo $sonuc."<br>";
?>