<!-- Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
   $db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .row{
            display:flex;
            justify-content:space-around;
            color:white;
            text-align:center;
            margin-top:5rem;
        }
        .teachers{
            background-color:gray;
            padding:2rem;
        }
        .pm{
            background-color:green;
            padding:2rem;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="teachers">
            <h2>teachers</h2>
            <?php  
                for($i=0;$i < count($db['teachers']);$i++){
                    echo '<p>';
                    echo $db['teachers'][$i][name].' ';
                    echo $db['teachers'][$i][lastname];
                    echo '</p>';
                }
            ?>
        </div>
        <div class="pm">
            <h2>pm</h2>
            <?php  
                for($i=0;$i < count($db['pm']);$i++){
                    echo '<p>';
                    echo $db['pm'][$i][name].' ';
                    echo $db['pm'][$i][lastname];
                    echo '</p>';
                }
            ?>
        </div>
    </div>
</body>
</html>