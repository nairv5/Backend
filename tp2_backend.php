<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp2_backend.php</title>
</head>
<body>

<h2> Backend : Trabajo Practico N°2</h2>
<h2>Ejercicio 1: Crear una variable n y validar que sea un número positivo</h2>
<?php
$variable=5;
echo "El numero de la variable es $variable.<br>";

if ($variable > 0) {
    echo "$variable es un numero positivo <br><hr>" ;
} else {
    echo "$variable NO es un numero positivo. <br><hr>";
}
?>

<h2>Ejercicio 2 :Crear una variable n y validar que sea un número mayor a 1 y menor a 10.</h2>

<?php
$variable=8;
echo "El numero de la variable es $variable.<br>";

if ($variable > 1 & $variable < 10){
    echo "el numero $variable es un numero mayor a 1 y menor a 10.<br><hr>";
} else {
    echo "el numero $variable NO es un numero comprendido entre 1 y 10. <br><hr>";
}
?>

<h2>Ejercicio 3: Crear una variable n y validar que sea un número mayor a 10 o menor a 2</h2>

<?php
$variable=1;
echo "El numero de la variable es $variable.<br>";

if ($variable > 10){
    echo "el numero $variable es mayor a 10. <br><hr> ";
} elseif ($variable < 2){
    echo "el numero $variable es menor a 2. <br><hr>";
} 
?>

<h2>Ejercicio 4: Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.</h2>

<?php
$numero1=8;
$numero2=10;
echo "El numero de las variables son $numero1 y $numero2.<br>";


if ( $numero1 > $numero2 ){
    echo "la suma de las dos variables es .($numero1+$numero2)" . "<br>La resta de las dos variables es .($numero1-$numero2)";
} elseif ($numero1<$numero2){
    echo "La multiplicacion de las dos variables es : " . ($numero1*$numero2) . "<br> La divicion de las dos variables es : " . floor ($numero2/$numero1) . "<br> El resto de las dos variables es: " . ($numero1%$numero2);
} else {
   echo "Los numeros ingresados son iguales";
}
?>
    
</body>
</html>