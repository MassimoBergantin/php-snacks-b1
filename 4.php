<!-- PHPSnack4

Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà i seguenti dati:
nome
cognome
un array contenente i suoi voti scolastici
Stampare nome, cognome e la media dei voti di ogni alunno. -->

<?php 

$students = [
    [
        'nome' => 'Massimo',
        'cognome' => 'Bergantin',
        'voti' => [
            8,
            5,
            6
        ],
        'nome' => 'Filippo',
        'cognome' => 'Romagnoli',
        'voti' => [
            7,
            9,
            6
        ],
        'nome' => 'Elena',
        'cognome' => 'Benedetti',
        'voti' => [
            10,
            9,
            7
        ]
    ]
];



    for ($i = 0; $i < count($students); $i++) {

        $media = array_sum($students[$i]['voti']) / count($students[$i]['voti']);

        echo "Nome: {$students[$i]['nome']} <br> Cognome: {$students[$i]['cognome']} <br> Media dei voti: {$media} <br> <hr>";
    };

    
?>