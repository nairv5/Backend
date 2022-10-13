<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrices</title>
</head>
<body>

 <h1>Trabajo Practico N°5 : Arrays</h1>
 <h2>Nair Ventos</h2>
 <?php
print "<h3>Ejercicio 1 :Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</h3>";

$npares = [2,4,6,8,10,12,14,16,18,20];
print "$npares[0] <br>";
print " $npares[1] <br>";
print " $npares[2] <br>";
print " $npares[3] <br>";
print "$npares[4] <br>";
print " $npares[5] <br>";
print " $npares[6]<br>";
print " $npares[7]<br>";
print " $npares[8]<br>";
print " $npares[9]<br>";
?>

<hr>

<?php
print "<h3>Ejercicio 2: Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
matriz. Mostrar el esquema del array con print_r().</h3>";

$datos = ["Pedro","ana","34","1"];
print "<pre> <br>";
print_r ($datos);
print "</pre> <br>";
foreach ($datos as $valor){
    print "$valor <br>";
}

?>
<hr>

<?php
print "<h3>Ejercicio 3:  Crear un array asociativo e introducir los siguientes valores:Nombre: Pedro, Apellido: Torres, Dirección: Av. Mayor 3703, Teléfono: 1122334455</h3>";

$valores = ['Nombre' => "Pedro <br>"  , 'Apellido' => "Torres <br>", 'Direccion' => "Av. Mayor 3703 <br>", 'Telefono' => "1122334455 <br>"];

foreach ($valores as $indice => $value){
    print "$indice => $value";
}
?>
  
  <hr>


  <?php
   print "<h3>Ejercicio 4:  Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid</h3>";

$ciudades = ["Madrid" , "Barcelona" , "Londres" , "New york", "Los Angeles", "Chicago"];

foreach ($ciudades as $indice => $valor){
    print "la ciudad con el indice $indice  tiene el nombre $valor <br>";
}
?>

<hr>

<?php
print"<h3>Ejercicio 5:  Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
Ejemplo: El índice de Madrid es MD.</h3>";


$ciudades = ['Madrid' => "MD", 'Barcelona' => "BLC" , 'Londres' => "LD" , 'New York' => "NY" , 'Los Angeles' => "LA" , 'Chicago' => "CCG"];
foreach ($ciudades as $indice => $valor){
    print "El indice de $valor es $indice <br>";
}
?>
</body>
</html>