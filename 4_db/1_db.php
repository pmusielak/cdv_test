<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uzytkownicy</title>
</head>
<body>
<?php
require_once "./skrypty_db/connect.php";

$sql = "SELECT * FROM `users`;";
$result = $conn->query($sql);
//$user = $result->fetch_assoc();
//echo $user["firstName"];

while($user = $result->fetch_assoc()){
//echo "test<br>";
//print_r($user);
//var_dump($user);
$year = substr($user["birthday"],0,4);
echo <<< USERS
    Imię i nazwisko: $user[firstName] $user[lastName] <br>
    Data urodzenia: $user[birthday] <br>
    Rok urodzenia: $year
    <hr>

USERS;
}
?>
</body>
</html>