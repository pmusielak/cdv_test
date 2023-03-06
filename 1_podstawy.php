<?php
    $firstName = "Janusz";
    $lastName = "Nowak";
    echo "Imie i Nazwisko: $firstName $lastName";
// heredoc
    echo <<< DATA
        Imię: $firstName<br>
        Nazwisko: $lastName<br>
DATA;
    $data = <<< DATA
    Imię: $firstName<br>
    Nazwisko: $lastName<br>
DATA;
    echo $data;
// nowdoc
echo <<< 'DATA'
    Imię: $firstName<br>
    Nazwisko: $lastName<br>
DATA;

$bin = 0b1011;
echo $bin; //11
$oct = 0o11;
echo $oct; //9
$hex = 0xA1;
echo $hex; //161
?>