<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Początek strony </h4>
    <?php
    // require_once, include, include_once
    include "./skrypty/list.php";
 @   include_once "/skrypty/lista.php"; //małpa usuwa wyskakujący błąd

    echo "<br>Require<br>";
    require"./skrypty/list.php";
    require_once"./skrypty/list.php";
@   require"./skrypty/lista11.php"; //małpa nie ignoruje fatal errora
    ?>
    <h4>Koniec strony</h4>
</body>
</html>