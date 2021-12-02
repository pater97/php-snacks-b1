<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
#creazione array
$drangonball=[
    [
        'name' => 'goku',
        'lastname' => 'Kakaroth',
        'voti' => [
            'mma' => 10,
            'mangiare' => 10,
            'stile' => 10,
            'grinta' => 10,
            'rabbia' => 7
        ]
    ],
    [
        'name' => 'vegeta',
        'lastname' => 'quarto',
        'voti' => [
            'mma' => 9,
            'mangiare' => 5,
            'stile' => 9,
            'grinta' => 9,
            'rabbia' => 10
        ]
    ],
    [
        'name' => 'junior',
        'lastname' => 'piccolo',
        'voti' => [
            'mma' => 6,
            'mangiare' => 3,
            'stile' => 10,
            'grinta' => 8,
            'rabbia' => 8
        ]
    ],
    [
        'name' => 'crilin',
        'lastname' => 'pelato',
        'voti' => [
            'mma' => 4,
            'mangiare' => 7,
            'stile' => 6,
            'grinta' => 6,
            'rabbia' => 2
        ]
    ],
    [
        'name' => 'freezer',
        'lastname' => 'il freddo',
        'voti' => [
            'mma' => 10,
            'mangiare' => 3,
            'stile' => 10,
            'grinta' => 10,
            'rabbia' => 7
        ]
    ],
];


#for
for($i=0;$i < count($drangonball);$i++){
    // #calcolo meida
    $sommaVoti= ($drangonball[$i][voti][mma]+$drangonball[$i][voti][mangiare]+$drangonball[$i][voti][stile]+$drangonball[$i][voti][grinta]+$drangonball[$i][voti][rabbia]);
    $media = $sommaVoti/5;
    echo '<div>';
    echo '<h1>';
    echo $drangonball[$i][name],'  ';
    echo $drangonball[$i][lastname];
    echo '</h1>';
    echo '<p>';
    echo 'media dei voti: ' . $media;
    echo '</p>';
    echo '</div>';
}
?>