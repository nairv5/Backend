<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tp1_backend.php</title>
</head>
<body>
      
       <h1>Ejercicio 1 :<p> Imprima por pantalla: “Hola mundo”.</p></h1>
       <?php
        echo "Hola Mundo"
       ?>

       <br>
       <hr>

       <h1>Ejercicio 2: <p>Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.</p></h1>
       <?php
       $saludo = "Hola Mundo";
       echo $saludo;
       ?>
       
       <br>
       <hr>

       <h1>Ejercicio 3: <p>Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división
        entera y el resto de la división entera.</p></h1>
       <?php
       $entero1 = 10;
       $entero2 =5;
       $suma=$entero1+$entero2;
       $resta=$entero1-$entero2;
       $multiplicacion=$entero1*$entero2;
       $division=$entero1/$entero2;
       $resto=$entero1%$entero2;
       ?>

       <br>
       <hr>

       <?php
       echo "$suma <br>";
       echo "$resta <br>";
       echo "$multiplicacion <br>";
       echo "$division <br>";
       echo "$resto <br>";
       ?>

       <br>
       <hr>

       <h1>Ejercicio 4: <p>Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por
        pantalla.</p></h1>
       <?php
       $celsius =20;
       $vari1=1.8;
       $vari2=32;
       $resultado=(($celsius*$vari1)+$vari2);
       ?>

       <br>
       <hr>

       <?php
       echo "transformacion : (($celsius*$vari1)+$vari2)<br>";
       echo "Fahrenheit : $resultado" ;
       ?>

       <br>
       <hr>

       <h1>Ejercicio 5A: <p> Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.</p></h1>
       <?php
       $base=18;
       $altura=12;
       $perimetro=($base+$altura)*2;
       $area=$base*$altura;
       ?>

       <br>
       <hr>

       <?php
       echo "perimetro del rectangulo : $perimetro <br>" ;
       echo "area del rectangulo : $area";
       ?>

       <br>
       <hr>

       <h1>Ejercicio 5B: <p>Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.</p></h1>
       <?php
       $radio=30;
       $pi=3.14;
       $perimetro=($radio*$pi)*2;
       $superficie=$pi*pow($radio,2);
       ?>

       <br>
       <hr>

       <?php
       echo "perimetro del circulo : $perimetro <br>";
       echo "area del circulo : $superficie";
       ?>




</body>
</html>