<!-- PHPSnack1

Creiamo una struttura dati che rappresenta le partite di basket
di un’ipotetica tappa del calendario.
Ogni array interno conterrà le seguenti informazioni:
una squadra di casa
una squadra ospite
punti fatti dalla squadra di casa
punti fatti dalla squadra ospite
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php

$partite = [
     
    [
        "casa" => "Olimpia Milano",
        "ospite" => "Cantù",
        "casaPunti" => 55,
        "ospitePunti" => 30
    ],
    [
        "casa" => "Sampdoria",
        "ospite" => "Benevento",
        "casaPunti" => 25,
        "ospitePunti" => 300
    ],
    [
        "casa" => "Loreo",
        "ospite" => "Filippus",
        "casaPunti" => 15,
        "ospitePunti" => 3
    ]
];

for($i = 0; $i < count($partite); $i++) {

    echo "{$partite[$i]['casa']} - {$partite[$i]['ospite']} | {$partite[$i]['casaPunti']} - {$partite[$i]['ospitePunti']} </br>";

}



?> 