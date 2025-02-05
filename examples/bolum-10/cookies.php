<?php

setcookie("username", "sadikturan", time() + (60 * 60 * 24));
setcookie("auth", "true", time() + (60 * 60 * 24));

if (isset($_COOKIE["username"])) {
    echo $_COOKIE["username"];
    echo "<br>";
} else{
    echo "Cookie bulunamadı";
}

echo $_COOKIE["auth"];

//güncelleme

setcookie("username", "admin", time() + (60 * 60 * 24));

// silme

setcookie("username", "admin", time() -(3600));