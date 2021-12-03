<?php 
$invitato= $_GET['invitato'];
$invitati=[
    'marco',
    'giovanni',
    'luca',
    'giuseppe',
    'fabio',
    'fabiola',
    'tiziano',
    'valentina',
    'pablo'
];
if(in_array($invitato,$invitati)){
    echo 'ok';
}else{
    echo 'ko';
}

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