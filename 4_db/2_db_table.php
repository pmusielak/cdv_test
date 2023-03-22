<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/table.css">
    <title>Użytkownicy</title>

</head>
<body>
    <h4>Użytkownicy</h4>
    <table>
        <tr>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Data urodzenia</th>
        </tr> 
<?php
    require_once "./skrypty_db/connect.php";
    $sql = "SELECT * FROM `users` JOIN `cities` ON `users`.`city_id`=`cities`.`id` JOIN `states` ON `cities`.`state_id`=`states`.`id`;";";";
    $result = $conn->query($sql);
    while($user = $result->fetch_assoc()){
        echo <<< TABLEUSERS
        <tr>
            <td>$user[firstName]</td>
            <td>$user[lastName]</td>
            <td>$user[birthday]</td>
        </tr>
    TABLEUSERS;
    }
    echo "</table>";
?>
</body>
</html>