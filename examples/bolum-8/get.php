<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_GET) {
        $query = $_GET['q'];
        $category = $_GET['category'];

        echo $query;
        echo "<br>";
        echo $category;
    }

    ?>





    <form method="GET">
        <input type="text" name="q" id="">
        <input type="text" name="category" id="">
        <button type="submit">Gönder</button>

    </form>
</body>

</html>