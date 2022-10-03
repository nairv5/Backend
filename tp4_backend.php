<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tp 4 : While-do while- for</title>
</head>
<body>
<h1> Backend : Trabajo Practico N°4 : Nair Ventos</h1>
<h3>Mostrar los números del 1 al 100.</h3>

<?php 
$i=1;
while ($i <= 100) {
    echo $i . "-" ;
    $i++;
}
?>

<h3>Mostrar los números del 100 al 1.</h3>

<?php
$i= 100;
do {
    echo $i . "-" ;
    $i-- ;
} while ($i >= 1) ;
?>

<h3>Mostrar los números pares del 1 al 100.</h3>
<?php
for ($i = 2; $i%2 == 0 && $i <= 100; $i+=2) {
            echo $i . "- ";
        }
?>

<h3>Mostrar los números impares del 1 al 100.</h3>
<?php
for ($i = 1; $i%1 == 0 && $i <= 100; $i+=2) {
            echo $i . "- ";
        }
?>

<h3> Mostrar la suma de los números de 1 a 20.</h3>

<?php

$suma= 1;

for ($i=0 ; $i <= 20 ; $i++ ) {
    echo "La suma de los numeros es  :  $suma + $i = " , $suma + $i, "<br>";
    $suma += $i;
}

echo "La suma total de los numeros es : $suma" ;

 ?>

 <h3>Mostrar la suma de números pares de 1 a 20.</h3>

 <?php
$suma= 0;

for ($i=2 ; $i <= 20 ; $i+=2 ) {
    echo "La suma de los numeros es  :  $suma + $i = " , $suma + $i, "<br>";
    $suma += $i;
}

echo "La suma total de los numeros es : $suma" ;
 ?>




    
</body>
</html>