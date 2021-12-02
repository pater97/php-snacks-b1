<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 carat
che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$email= $_GET['email'];
$name= $_GET['name'];
$age= $_GET['age'];

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
    <h1>
        risultato: <?php $result ?>
    </h1>

    <form action="./index.php" method="get">
        <label for="email">email adress</label>
        <input type="text" name="name" placeholder="nome">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="age" placeholder="age">
        <button>submit</button>
    </form>
</body>
</html>