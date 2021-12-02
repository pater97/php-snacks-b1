

<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e
come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->

<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
// prima serie di post 
echo '<div>';
echo '<h1>';
echo 'post del 10/01/2019';
echo '</h1>';
for($i=0;$i < count($posts['10/01/2019']);$i++){
    echo '<div>';
    echo '<h2>';
    echo $posts['10/01/2019'][$i][title];
    echo '</h2>';
    echo '<h5>';
    echo $posts['10/01/2019'][$i][author];
    echo '</h5>';
    echo '<p>';
    echo $posts['10/01/2019'][$i][text];
    echo '</p>';
    echo '</div>';
};
echo '</div>';

// seconda serie di post 
echo '<div>';
echo '<h1>';
echo 'post del 10/02/2019';
echo '</h1>';
for($i=0;$i < count($posts['10/02/2019']);$i++){
    echo '<div>';
    echo '<h2>';
    echo $posts['10/02/2019'][$i][title];
    echo '</h2>';
    echo '<h5>';
    echo $posts['10/02/2019'][$i][author];
    echo '</h5>';
    echo '<p>';
    echo $posts['10/02/2019'][$i][text];
    echo '</p>';
    echo '</div>';
};
echo '</div>';

// terza serie di post 
echo '<div>';
echo '<h1>';
echo 'post del 15/05/2019';
echo '</h1>';
for($i=0;$i < count($posts['15/05/2019']);$i++){
    echo '<div>';
    echo '<h2>';
    echo $posts['15/05/2019'][$i][title];
    echo '</h2>';
    echo '<h5>';
    echo $posts['15/05/2019'][$i][author];
    echo '</h5>';
    echo '<p>';
    echo $posts['15/05/2019'][$i][text];
    echo '</p>';
    echo '</div>';
};
echo '</div>';
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