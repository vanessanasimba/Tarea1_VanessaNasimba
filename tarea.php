<?php
// variables
$nombre = "Vanessa";
$apellido = "Nasimba";
$numero1 = 4;
$numero2 = 5;
$numero3 = 2.3;
$validar = true;
$array = array("hola", "como", "estas", "tu");


echo $nombre . "<br>";
echo $apellido . "<br>";
echo $numero1 . "<br>";
echo $numero2 . "<br>";
echo $numero3 . "<br>";

// operaciones 
$suma = $numero1 + $numero2;
echo 'SUMA = ' . $suma . "<br>";

$mutiplicacion = $numero3 * $numero1;
echo 'MULTIPLIACION = ' . $mutiplicacion . "<br>";

$resta = $numero3 % $numero1;
echo 'Modulo = ' . $resta . "<br>";

// concatenacion de cadenas 
$nombre_apellido = $nombre . " " . $apellido;
echo "CONCATENAR: " . $nombre_apellido . "<br>";
echo "tamano cadena: " . strlen($nombre_apellido) . "<br>";

// condicionales 
if ( $numero1 > 10){
    echo $numero1 . " es mayor a 10" . "<br>";
} else {
    echo $numero1 . " es menor a 10" . "<br>";
} 


if ( $numero2 > $numero1){
    echo $numero2 . " es mayor a ". $numero1 . "<br>";
} else {
    echo $numero2 . " es menor a ". $numero1 . "<br>";
} 
?>