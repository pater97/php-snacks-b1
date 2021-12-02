<!-- Snack 1:
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

$prova = 'ciao';
$dieciDicembre = [
    [
        "squadraCasa" => 'lakers',
        "squadraOspite" => 'raptors',
        "puntiCasa" => 55,
        "puntiOspite" => 60
    ],
    [
        "squadraCasa" => 'kings',
        "squadraOspite" => 'clippers',
        "puntiCasa" => 85,
        "puntiOspite" => 30
    ],
    [
        "squadraCasa" => 'thunder',
        "squadraOspite" => 'rokets',
        "puntiCasa" => 90,
        "puntiOspite" => 80
    ],
    [
        "squadraCasa" => 'Heats',
        "squadraOspite" => 'warriors',
        "puntiCasa" => 55,
        "puntiOspite" => 60
    ],
    [
        "squadraCasa" => 'phoenix',
        "squadraOspite" => 'celtics',
        "puntiCasa" => 45,
        "puntiOspite" => 70
    ],
    [
        "squadraCasa" => 'chigago bulls',
        "squadraOspite" => 'sixers',
        "puntiCasa" => 65,
        "puntiOspite" => 60
    ],
];


for($i = 0 ;$i < count($dieciDicembre);$i++){
    echo $dieciDicembre[$i][squadraCasa];
    echo $dieciDicembre[$i][squadraOspite];
    echo $dieciDicembre[$i][puntiCasa];
    echo $dieciDicembre[$i][puntiOspite];
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>