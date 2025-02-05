<?php
if (!empty($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $username;
    echo "<br>";
    echo $password;
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

    <form method="POST">
        <input type="text" name="username">
        <input type="password" name="password">
        <button type="submit">Login</button>
    </form>
</body>

</html>