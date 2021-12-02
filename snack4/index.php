<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
#creazione dell'array
$numbers =[];
#ciclo for fino a 15 
for($i=0;$i<15;$i++){
    $randomNumber = rand(1,199);
    #condizione che verifica che non ci siano doppi
    if(in_array($randomNumber,$numbers) != true){
        array_push($numbers,$randomNumber);
    }
}
var_dump($numbers);
?>