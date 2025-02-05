<?php
    session_start();

    // $_SESSION["username"] = "sadikturan";
    // $_SESSION["password"] = "12345";

    // unset($_SESSION["username"]);

    // session_unset();

    $_SESSION = [];

    if(isset($_SESSION["username"])){
        echo "Kullanıcı adı: " . $_SESSION["username"];
    } else {
        echo "Kullanıcı adı bulunamadı";
    }
   
    echo "<br>";
    echo $_SESSION["password"];
    print_r($_SESSION);
?>