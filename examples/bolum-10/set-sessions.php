<?php
    session_start();

    $_SESSION["username"] = "sadikturan";
    $_SESSION["password"] = "12345";

    echo $_SESSION["username"];
    echo "<br>";
    echo $_SESSION["password"];
?>